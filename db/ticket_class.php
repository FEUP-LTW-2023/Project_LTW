<?php
class Ticket
{
    public int $id;
    public int $authorid;
    public int $agentid;
    public string $title;
    public string $description;
    public DateTime $datecreated;

    public function __construct(int $id, int $authorid, int $agentid, string $title, string $description, DateTime $datecreated)
    {
        $this->id = $id;
        $this->authorid = $authorid;
        $this->agentid = $agentid;
        $this->title = $title;
        $this->description = $description;
        $this->datecreated = $datecreated;
    }

    public static function createTicket(PDO $db, int $authorid, int $agentid, string $title, string $description): ?Ticket
    {
        $stmt = $db->prepare('
            insert into Ticket (author, agent, title, description)
            values (?,?,?,?)
        ');

        $stmt->execute([$authorid, $agentid, $title, $description]);

        $ticketId = intval($db->lastInsertId());

        if ($ticketId) {
            $stmt = $db->prepare('
                select datecreated from Tickets
                where id = ?
            ');
            $stmt->execute([$ticketId]);

            $datecreated = $stmt->fetchColumn();

            return new Ticket($ticketId, $authorid, $agentid, $title, $description, new DateTime($datecreated));
        }

        return null;
    }
}

?>
