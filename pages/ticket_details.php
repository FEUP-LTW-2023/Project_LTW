<?php
    declare(strict_types=1);

    require_once(__DIR__ . '/../templates/sidebar_template.php');
    require_once(__DIR__ . '/../templates/ticket_details_template.php');
    require_once(__DIR__ . '/../db/ticket_class.php'); 
    require_once(__DIR__ . '/../db/connection.php'); 

    $db = getdbconnection();

    $ticket = Ticket::getTicket($db, intval($_GET['id']));


    draw_head($ticket);
    // para já fica client sidebar, depois adicionar logica para verificar a role do user
    draw_client_sidebar();
    draw_ticket_details($db, $ticket);
?>


<?php function draw_head(Ticket $ticket) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="../new/image/png" sizes="32x32" href="../new/assets/coding.png" />
        <!-- Boxicons -->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
        <!-- My CSS -->
        <link rel="stylesheet" href="../new/ticket_detail.css">

        <title><?php echo $ticket->subject ?></title>
    </head>

    <body>
<?php } ?>