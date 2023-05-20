<?php
    declare(strict_types=1);

    require_once(__DIR__ . '/../session.php');
    $session = new Session();

    require_once(__DIR__ . '/../db/connection.php');
    require_once(__DIR__ . '/../db/account_class.php');

    $db = getdbconnection();

    $user = Account::signup($db, $_POST['username'], $_POST['email'], $_POST['password']);

    if($user != null){
        $session->setId($user->id);
        $session->setUsername($user->username);
        $session->setEmail($user->email);
        $session->setName($user->name);
        $session->setRole($user->role);
        $session->addMessage('success', 'Signup successful!');
    }
    else $session->addMessage('error', 'There is already an account with this username or email');

    header('Location: /../pages/authentication.php');
?>