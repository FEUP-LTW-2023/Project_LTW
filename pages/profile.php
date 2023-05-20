<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../session.php');
    $session = new Session();

    if(!$session->isLoggedIn()) die(header('Location: authentication.php'));
    
    require_once(__DIR__ . '/../templates/sidebar_template.php');
    require_once(__DIR__ . '/../templates/profile_template.php');

    draw_head();
    // para já fica client sidebar, depois adicionar logica para verificar a role do user
    draw_client_sidebar();
    draw_profile($session);
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
        />
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
        <link rel="stylesheet" href="../new/profile.css">

        <title>QuickFix - Profile</title>
    </head>
    <body>
<?php } ?>