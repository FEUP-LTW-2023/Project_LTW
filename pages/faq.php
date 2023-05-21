<?php
    declare(strict_types = 1);

    require_once(__DIR__ . '/../session.php');
    require_once(__DIR__ . '/../db/connection.php');
    require_once(__DIR__ . '/../db/account_class.php');
    
    
    $db = getdbconnection();
    $session = new Session();
    $user = Account::getUserWithId($db, $session->getId());

    require_once(__DIR__ . '/../templates/sidebar_template.php');
    require_once(__DIR__ . '/../templates/faq_template.php');

    draw_head();
    switch($user->role){
        case 'Client':
            draw_client_sidebar();
            break;
        case 'Agent':
            draw_agent_sidebar();
            break;
        case 'Admin':
            draw_admin_sidebar();
            break;
        default:
            header('Location: authentication.php');
            break;
    }
    draw_faq();
?>

<?php function draw_head() { ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=100.0">

        <link href="../style/style2.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="faq.js"></script>

  <title>FAQ</title>
</head>

<body>
<?php } ?>