<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../templates/global_template.php');
    require_once(__DIR__ . '/../templates/faq_template.php');

    // para já fica client sidebar, depois adicionar logica para verificar a role do user
    draw_client_sidebar();
    draw_faq();
    draw_footer();
?>