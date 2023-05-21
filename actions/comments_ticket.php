<?php
    require_once(__DIR__ . '/../db/account_class.php');
    require_once(__DIR__ . '/../db/ticketcomment_class.php');
    
    function draw_ticket_details(PDO $db, Ticket $ticket)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $comment = $_POST['comment'];
    
            $ticketComment = new TicketComment($ticket->id, $ticket->author, $comment);
    
            $ticketComment->save($db);
        }
    
        $comments = TicketComment::getCommentsForTicket($db, $ticket->id);
    }

?>