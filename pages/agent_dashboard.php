<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../templates/global_template.php');
    require_once(__DIR__ . '/../templates/dashboard_template.php');

    draw_topbar();
    draw_agentdashboard();
    draw_footer();
?>