<?php
function add_goal_query_var($vars) {
    $vars[] = 'goal';
    return $vars;
}
add_filter('query_vars', 'add_goal_query_var');

function my_theme_enqueue_styles() {
    wp_enqueue_style('ibm-plex-sans', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400&display=swap', false);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function log_interaction($interaction_type, $data) {
    global $wpdb;

    $user_id = get_current_user_id();
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $browser = $_SERVER['HTTP_USER_AGENT'];
    $timestamp = current_time('mysql');
    $video_timestamp = $data['timestamp'];

    $table_name = $interaction_type === 'play' || $interaction_type === 'pause' || $interaction_type === 'seek' 
        ? 'video_interactions' 
        : 'card_interactions';

    $card_title = isset($data['title']) ? $data['title'] : '';

    $result = $wpdb->insert(
        $table_name,
        array_merge(
            array(
                'user_id' => $user_id,
                'ip_address' => $ip_address,
                'browser' => $browser,
                'timestamp' => $timestamp,
                'interaction_type' => $interaction_type,
                'video_timestamp' => $video_timestamp
            ),
            $card_title ? array('card_title' => $card_title) : array()
        )
    );

    if ($result === false) {
        error_log("Error inserting {$interaction_type}: " . $wpdb->last_error);
    }
}

function track_page_view() {
    if (is_page_template('index.php')) {
        global $wpdb;

        $user_id = get_current_user_id();
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $browser = $_SERVER['HTTP_USER_AGENT'];
        $timestamp = current_time('mysql');
        $page_url = home_url(add_query_arg(array(), $GLOBALS['wp']->request));

        error_log("User ID: " . $user_id);

        $result = $wpdb->insert(
            'page_views',
            array(
                'user_id' => $user_id,
                'ip_address' => $ip_address,
                'browser' => $browser,
                'timestamp' => $timestamp,
                'page_url' => $page_url
            )
        );

        if ($result === false) {
            error_log("Error inserting page view: " . $wpdb->last_error);
        }
    }
}
add_action('wp_head', 'track_page_view');

function track_video_play() {
    $data = json_decode(file_get_contents('php://input'), true);
    log_interaction('play', $data);
    wp_die();
}
add_action('wp_ajax_track_video_play', 'track_video_play');
add_action('wp_ajax_nopriv_track_video_play', 'track_video_play');

function track_video_pause() {
    $data = json_decode(file_get_contents('php://input'), true);
    log_interaction('pause', $data);
    wp_die();
}
add_action('wp_ajax_track_video_pause', 'track_video_pause');
add_action('wp_ajax_nopriv_track_video_pause', 'track_video_pause');

function track_video_seek() {
    $data = json_decode(file_get_contents('php://input'), true);
    log_interaction('seek', $data);
    wp_die();
}
add_action('wp_ajax_track_video_seek', 'track_video_seek');
add_action('wp_ajax_nopriv_track_video_seek', 'track_video_seek');

function enqueue_custom_styles() {
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
?>