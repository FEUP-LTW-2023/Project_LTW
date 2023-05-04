<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../templates/global_template.php');
    require_once(__DIR__ . '/../templates/faq_template.php');

    draw_topbar();
    draw_faq();
    draw_footer();
?>