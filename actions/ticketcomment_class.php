<?php

class TicketComment
{
    public int $ticketid;
    public int $commentauthor;
    public string $comment;

    public function __construct(int $ticketid, int $commentauthor, string $comment)
    {
        $this->ticketid = $ticketid;
        $this->commentauthor = $commentauthor;
        $this->comment = $comment;
    }

    public function save(PDO $db): bool
    {
        $stmt = $db->prepare("
            INSERT INTO TicketComment (ticketid, commentauthor, comment)
            VALUES (?, ?, ?)
        ");

        return $stmt->execute([$this->ticketid, $this->commentauthor, $this->comment]);
    }

    public static function getCommentsForTicket(PDO $db, int $ticketid): array
    {
        $stmt = $db->prepare("
            SELECT ticketid, commentauthor, comment
            FROM TicketComment
            WHERE ticketid = ?
            ORDER BY id DESC
        ");

        $stmt->execute([$ticketid]);
        $comments = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $comments;
    }
}
?>
