<?php
declare(strict_types=1);

class Account
{
    public int $id;
    public string $username;
    public string $email;
    public string $name;
    public string $role;

    public function __construct(int $id, string $username, string $email, string $name, string $role)
    {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->name = $name;
        $this->role = $role;
    }

    public static function login(PDO $db, string $usernameOrEmail, string $password): ?Account
    {
        $stmt = $db->prepare('
            SELECT id, username, email, name, role
            FROM Account
            WHERE (username = ? OR email = ?) AND password = ?
        ');

        $stmt->execute([$usernameOrEmail, $usernameOrEmail, $password]);
        $account = $stmt->fetch();

        if ($account) {
            return new Account(
                intval($account['id']),
                $account['username'] == null? "" : $account['username'],
                $account['email'] == null? "" : $account['email'],
                $account['name'] == null? "" : $account['name'],
                $account['role'] == null? "" : $account['role']
            );
        } else
            return null;
    }

    public static function signup(PDO $db, string $username, string $email, string $password): ?Account
    {
        $stmt = $db->prepare("
            insert into Account (username, email, password)
            values (?, ?, ?)
        ");

        $stmt->execute([$username, $email, $password]);
        $account = $stmt->fetch();

        if ($account) {
            return new Account(
                $account['id'],
                $account['username'],
                $account['email'],
                $account['name'],
                $account['role']
            );
        } else
            return null;
    }

    public static function getUser(PDO $db, string $username): ?Account
    {
        $stmt = $db->prepare('
            select id, username, email, name, role
            from Account
            where username = ?
        ');

        $stmt->execute([$username]);
        $account = $stmt->fetch();

        return $account ? new Account(
            $account['id'],
            $account['username'],
            $account['email'],
            $account['name'],
            $account['role']
        )
            : null;
    }
}
?>