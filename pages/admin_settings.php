<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../templates/sidebar_template.php');
    require_once(__DIR__ . '/../templates/admin_settings_template.php');

    draw_head();
    draw_admin_sidebar();
    draw_admin_settings();
?>


<?php function draw_head() { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
        rel="icon"
        type="../new/image/png"
        sizes="32x32"
        href="../new/assets/coding.png"
        >
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
        <link rel="stylesheet" href="../style/style2.css">

        <title>QuickFix - Settings Admin</title>
    </head>
    <body>
<?php } ?>