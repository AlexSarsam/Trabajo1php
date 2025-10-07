<?php


require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/tabs.php';
?>
<main id="main" class="wrap">
    <?php
    
    require __DIR__ . '/sections/part1-profile.php';
    require __DIR__ . '/sections/part2-music.php';
    require __DIR__ . '/sections/part3-movies.php';
    require __DIR__ . '/sections/part4-menu.php';
    require __DIR__ . '/sections/part5-event.php';
    require __DIR__ . '/sections/part6-travel.php';
    ?>
</main>

<?php
require __DIR__ . '/includes/footer.php';
?>
<script src="assets/js/tabs.js"></script>
