<?php
    declare(strict_types=1);

    require_once(__DIR__ . '/../session.php');
    $session = new Session();

    require_once(__DIR__ . '/../db/connection.php');
    require_once(__DIR__ . '/../db/account_class.php');

    $db = getdbconnection();

    $user = Account::login($db, $_POST['usernameemail'], $_POST['password']);

    if($user){
        $session->setId(intval($user->id));
        $session->setUsername($user->username);
        $session->setEmail($user->email);
        $session->setName($user->name);
        $session->setRole($user->role);
        $session->addMessage('success', 'Login successful!');
    }
    else $session->addMessage('error', 'Email/username or password wrong.');

    header('Location: /../pages/profile.php');

?>