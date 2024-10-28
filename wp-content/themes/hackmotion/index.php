<?php
get_header();
?>

<div class="content-main">
  <?php
    $goal = get_query_var('goal', 'break 80');

    $allowed_goals = ['break Par', 'break 80', 'break 90', 'break 100'];
    if (!in_array($goal, $allowed_goals)) {
        $goal = 'break 80';
    }
  ?>

<div class="hero-section">
  <div class="hero-section-left">
    <div class="hero-description">
        <div class="text-content">
            <h1 class="hero-heading">We have put together a swing improvement solution to help you <span class="hero-span"><?php echo esc_html($goal); ?></span></h1>
            <div class="pack">
                <h2 class="hero-heading-two">Pack includes:</h2>
                <div class="divider"></div>
                <h3 class="hero-heading-three">Swing Analyzer -  HackMotion Core<br>Drills by coach Tyler Ferrell<br>Game improvement plan by HackMotion</h3>
                <button class="button-hero">Start now ➜</button>
            </div>
        </div>
    </div>
  </div>

  <div class="hero-section-right">
    <div class="first-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/graph.png" alt="Image 1" class="hero-image">
    </div>
    <div class="second-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/frame-2.png" alt="Image 3" class="hero-image">
    </div>
    <div class="mobile-images">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/mobile-1.png" alt="Image 3" class="hero-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/mobile-2.png" alt="Image 3" class="hero-image">
    </div>
  </div>
</div>

<div class="bottom-section">
    <h1 class="blue-text-heading">The best solution for you: Impact Training Program</h1>
    <div class="divider-heading"></div>
    <br />
    <br />
    <div class="video-cards-section">
        <div class="video-container">
            <video id="swingVideo" width="746" height="510" controls>
                <source src="<?php echo get_template_directory_uri(); ?>/assets/video.mp4" type="video/mp4">
                Your browser doesn't support video.
            </video>
            <div class="progress-line" id="progressLine"></div>
        </div>

        <div class="progress-container-vertical">
            <div class="progress-vertical" id="progressVertical"></div>
        </div>

        <div class="progress-container-horizontal">
            <div class="progress-horizontal" id="progressHorizontal"></div>
        </div>

        <div class="collapsible-cards">
            <div class="card" data-time="5">
            <button class="collapsible">
                <span class="arrow">
                    <svg class="arrow-down" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00005 7.45002C5.86672 7.45002 5.74172 7.42919 5.62505 7.38752C5.50838 7.34586 5.40005 7.27502 5.30005 7.17502L0.700049 2.57502C0.516715 2.39169 0.425049 2.15836 0.425049 1.87502C0.425049 1.59169 0.516715 1.35836 0.700049 1.17502C0.883382 0.991691 1.11672 0.900024 1.40005 0.900024C1.68338 0.900024 1.91672 0.991691 2.10005 1.17502L6.00005 5.07502L9.90005 1.17502C10.0834 0.991691 10.3167 0.900024 10.6 0.900024C10.8834 0.900024 11.1167 0.991691 11.3 1.17502C11.4834 1.35836 11.575 1.59169 11.575 1.87502C11.575 2.15836 11.4834 2.39169 11.3 2.57502L6.70005 7.17502C6.60005 7.27502 6.49172 7.34586 6.37505 7.38752C6.25838 7.42919 6.13338 7.45002 6.00005 7.45002Z" fill="#5773FF"/>
                    </svg>
                    <svg class="arrow-up" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path d="M6.00005 3.27502L2.10005 7.17502C1.91672 7.35836 1.68338 7.45002 1.40005 7.45002C1.11672 7.45002 0.883382 7.35836 0.700049 7.17502C0.516715 6.99169 0.425049 6.75836 0.425049 6.47502C0.425049 6.19169 0.516715 5.95836 0.700049 5.77502L5.30005 1.17502C5.40005 1.07502 5.50838 1.00419 5.62505 0.962524C5.74172 0.920858 5.86672 0.900024 6.00005 0.900024C6.13338 0.900024 6.25838 0.920858 6.37505 0.962524C6.49172 1.00419 6.60005 1.07502 6.70005 1.17502L11.3 5.77502C11.4834 5.95836 11.575 6.19169 11.575 6.47502C11.575 6.75836 11.4834 6.99169 11.3 7.17502C11.1167 7.35836 10.8834 7.45002 10.6 7.45002C10.3167 7.45002 10.0834 7.35836 9.90005 7.17502L6.00005 3.27502Z" fill="#5773FF"/>
                    </svg>
                </span>
                Static Top Drill
            </button>
                <div class="content" style="display: none;">
                    <p>Get a feel for the optimal wrist position at Top of your swing</p>
                </div>
                <div class="divider-card"></div>
            </div>
            <div class="card" data-time="14">
            <button class="collapsible">
                <span class="arrow">
                    <svg class="arrow-down" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00005 7.45002C5.86672 7.45002 5.74172 7.42919 5.62505 7.38752C5.50838 7.34586 5.40005 7.27502 5.30005 7.17502L0.700049 2.57502C0.516715 2.39169 0.425049 2.15836 0.425049 1.87502C0.425049 1.59169 0.516715 1.35836 0.700049 1.17502C0.883382 0.991691 1.11672 0.900024 1.40005 0.900024C1.68338 0.900024 1.91672 0.991691 2.10005 1.17502L6.00005 5.07502L9.90005 1.17502C10.0834 0.991691 10.3167 0.900024 10.6 0.900024C10.8834 0.900024 11.1167 0.991691 11.3 1.17502C11.4834 1.35836 11.575 1.59169 11.575 1.87502C11.575 2.15836 11.4834 2.39169 11.3 2.57502L6.70005 7.17502C6.60005 7.27502 6.49172 7.34586 6.37505 7.38752C6.25838 7.42919 6.13338 7.45002 6.00005 7.45002Z" fill="#5773FF"/>
                    </svg>
                    <svg class="arrow-up" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path d="M6.00005 3.27502L2.10005 7.17502C1.91672 7.35836 1.68338 7.45002 1.40005 7.45002C1.11672 7.45002 0.883382 7.35836 0.700049 7.17502C0.516715 6.99169 0.425049 6.75836 0.425049 6.47502C0.425049 6.19169 0.516715 5.95836 0.700049 5.77502L5.30005 1.17502C5.40005 1.07502 5.50838 1.00419 5.62505 0.962524C5.74172 0.920858 5.86672 0.900024 6.00005 0.900024C6.13338 0.900024 6.25838 0.920858 6.37505 0.962524C6.49172 1.00419 6.60005 1.07502 6.70005 1.17502L11.3 5.77502C11.4834 5.95836 11.575 6.19169 11.575 6.47502C11.575 6.75836 11.4834 6.99169 11.3 7.17502C11.1167 7.35836 10.8834 7.45002 10.6 7.45002C10.3167 7.45002 10.0834 7.35836 9.90005 7.17502L6.00005 3.27502Z" fill="#5773FF"/>
                    </svg>
                </span>
                Dynamic Top Drill
            </button>
                <div class="content" style="display: none;">
                    <p>Dynamically train your wrist position at Top</p>
                </div>
                <div class="divider-card"></div>
            </div>
            <div class="card" data-time="24">
            <button class="collapsible">
                <span class="arrow">
                    <svg class="arrow-down" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.00005 7.45002C5.86672 7.45002 5.74172 7.42919 5.62505 7.38752C5.50838 7.34586 5.40005 7.27502 5.30005 7.17502L0.700049 2.57502C0.516715 2.39169 0.425049 2.15836 0.425049 1.87502C0.425049 1.59169 0.516715 1.35836 0.700049 1.17502C0.883382 0.991691 1.11672 0.900024 1.40005 0.900024C1.68338 0.900024 1.91672 0.991691 2.10005 1.17502L6.00005 5.07502L9.90005 1.17502C10.0834 0.991691 10.3167 0.900024 10.6 0.900024C10.8834 0.900024 11.1167 0.991691 11.3 1.17502C11.4834 1.35836 11.575 1.59169 11.575 1.87502C11.575 2.15836 11.4834 2.39169 11.3 2.57502L6.70005 7.17502C6.60005 7.27502 6.49172 7.34586 6.37505 7.38752C6.25838 7.42919 6.13338 7.45002 6.00005 7.45002Z" fill="#5773FF"/>
                    </svg>
                    <svg class="arrow-up" width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                        <path d="M6.00005 3.27502L2.10005 7.17502C1.91672 7.35836 1.68338 7.45002 1.40005 7.45002C1.11672 7.45002 0.883382 7.35836 0.700049 7.17502C0.516715 6.99169 0.425049 6.75836 0.425049 6.47502C0.425049 6.19169 0.516715 5.95836 0.700049 5.77502L5.30005 1.17502C5.40005 1.07502 5.50838 1.00419 5.62505 0.962524C5.74172 0.920858 5.86672 0.900024 6.00005 0.900024C6.13338 0.900024 6.25838 0.920858 6.37505 0.962524C6.49172 1.00419 6.60005 1.07502 6.70005 1.17502L11.3 5.77502C11.4834 5.95836 11.575 6.19169 11.575 6.47502C11.575 6.75836 11.4834 6.99169 11.3 7.17502C11.1167 7.35836 10.8834 7.45002 10.6 7.45002C10.3167 7.45002 10.0834 7.35836 9.90005 7.17502L6.00005 3.27502Z" fill="#5773FF"/>
                    </svg>
                </span>
                Top Full Swing Challenge
            </button>
                <div class="content" style="display: none;">
                    <p>Train your maximum power swing</p>
                </div>
                <div class="divider-card"></div>
            </div>
        </div>
    </div>
</div>
<br />
<br />

<?php
get_footer();
?>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const video = document.getElementById('swingVideo');
    const progressLine = document.getElementById('progressLine');
    const cards = document.querySelectorAll('.card');

    console.log('Page viewed. Sending AJAX request to track page view...');
    fetch('<?php echo ('https://our-database.com/api/database'); ?>?action=track_page_view', {
        method: 'POST'
    })
    .then(response => {
        console.log('AJAX request sent successfully for page view:', response);
    })
    .catch(error => {
        console.error('Error sending AJAX request for page view:', error);
    });

    video.addEventListener('play', function() {
        console.log('Video is playing. Sending AJAX request to track video play...');
        fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=track_video_play', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ timestamp: video.currentTime })
        })
        .then(response => {
            console.log('AJAX request sent successfully for video play:', response);
        })
        .catch(error => {
            console.error('Error sending AJAX request for video play:', error);
        });
    });

    video.addEventListener('pause', function() {
        console.log('Video is paused. Sending AJAX request to track video pause...');
        fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=track_video_pause', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ timestamp: video.currentTime })
        })
        .then(response => {
            console.log('AJAX request sent successfully for video pause:', response);
        })
        .catch(error => {
            console.error('Error sending AJAX request for video pause:', error);
        });
    });

video.addEventListener('timeupdate', function() {
    const currentTime = video.currentTime;
    const duration = video.duration;

    if (duration > 0) {
        const progress = (currentTime / duration) * 100;
        progressLine.style.width = progress + '%';

        const progressVertical = document.getElementById('progressVertical');
        const progressHorizontal = document.getElementById('progressHorizontal');

        const height = (progress / 100) * 510;
        const width = (progress / 100) * 100;

        progressVertical.style.height = height + 'px';
        progressHorizontal.style.width = width + '%';

        cards.forEach(card => {
            const cardTime = parseFloat(card.getAttribute('data-time'));
            const content = card.querySelector('.content');
            const arrowDown = card.querySelector('.arrow-down');
            const arrowUp = card.querySelector('.arrow-up');

            if (currentTime >= cardTime) {
                cards.forEach(innerCard => {
                    const innerContent = innerCard.querySelector('.content');
                    const innerArrowDown = innerCard.querySelector('.arrow-down');
                    const innerArrowUp = innerCard.querySelector('.arrow-up');
                    
                    if (innerCard !== card) {
                        innerContent.style.display = 'none';
                        innerArrowDown.style.display = 'inline';
                        innerArrowUp.style.display = 'none';
                    } else {
                        if (content.style.display === 'block') {
                            arrowDown.style.display = 'none';
                            arrowUp.style.display = 'inline';
                        } else {
                            arrowDown.style.display = 'inline';
                            arrowUp.style.display = 'none';
                        }
                    }
                });

                if (content.style.display === 'none') {
                    content.style.display = 'block';
                    arrowDown.style.display = 'none';
                    arrowUp.style.display = 'inline';
                    const cardTitle = card.querySelector('.collapsible').textContent;
                }
            }
        });
    }
});

    document.querySelectorAll(".card").forEach(card => {
        card.addEventListener("click", () => {
            const time = card.getAttribute("data-time");
            video.currentTime = time;
            video.play();
        });
    });

    video.addEventListener('seeked', function() {
        console.log('Video seeked. Sending AJAX request to track video seek...');
        fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=track_video_seek', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ timestamp: video.currentTime })
        })
        .then(response => {
            console.log('AJAX request sent successfully for video seek:', response);
        })
        .catch(error => {
            console.error('Error sending AJAX request for video seek:', error);
        });
    });

cards.forEach(card => {
    const button = card.querySelector('.collapsible');
    const arrowDown = button.querySelector('.arrow-down');
    const arrowUp = button.querySelector('.arrow-up');

    button.addEventListener('click', function() {
        const content = card.querySelector('.content');
        const isContentVisible = content.style.display === 'block';
        
        content.style.display = isContentVisible ? 'none' : 'block';

        if (isContentVisible) {
            arrowDown.style.display = 'inline';
            arrowUp.style.display = 'none';
        } else {
            arrowDown.style.display = 'none';
            arrowUp.style.display = 'inline';
        }

        if (!isContentVisible) {
            const currentTime = video.currentTime;
        }
    });
});

});
</script>