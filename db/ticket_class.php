<?php
class Ticket
{
    public int $id;
    public int $authorid;
    public int $agentid;
    public string $subject;
    public string $description;
    public string $department;
    public DateTime $datecreated;

    public function __construct(int $id, int $authorid, int $agentid, string $subject, string $description, string $department, DateTime $datecreated)
    {
        $this->id = $id;
        $this->authorid = $authorid;
        $this->agentid = $agentid;
        $this->subject = $subject;
        $this->description = $description;
        $this->department = $department;
        $this->datecreated = $datecreated;
    }

    public static function createTicket(PDO $db, int $authorid, int $agentid, string $subject, string $description, string $department): ?Ticket
    {
        $stmt = $db->prepare('
            insert into Ticket (author, agent, subject, description, department)
            values (?,?,?,?, ?)
        ');

        $stmt->execute([$authorid, $agentid, $subject, $description, $department]);

        $ticketId = intval($db->lastInsertId());

        if ($ticketId) {
            $stmt = $db->prepare('
                select datecreated from Ticket
                where id = ?
            ');
            $stmt->execute([$ticketId]);

            $datecreated = $stmt->fetchColumn();

            return new Ticket($ticketId, $authorid, $agentid, $subject, $description, $department, new DateTime($datecreated));
        }

        return null;
    }
}

?>
