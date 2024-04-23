<?php

declare(strict_types= 1);

function validateUsername(string $username): bool 
{
    $usernameRegex = '/^[a-zA-Z0-9]+$/';

    return (bool) preg_match($usernameRegex, $username);
}

function validatePassword(string $password): bool 
{
    $passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{5,}$/";

    return (bool) preg_match($passwordRegex, $password);
}

function validateEmail(string $email): bool
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        list($emailPart, $domainPart) = explode('@', $email);

        if (strlen($emailPart) >= 5) {
            return true;
        }
    }
    return false;
}


function uniqueUsername(string $username): bool {
    $users = explode(PHP_EOL, file_get_contents('users.txt'));

    foreach ($users as $user) {
        $credentials = explode('|', $user);

        if ($credentials[1] === $username) {
            return false;
        }        
    }
    return true;
}

function uniqueEmail(string $email): bool {
    $users = explode(PHP_EOL, file_get_contents('users.txt'));

    foreach ($users as $user) {
        $credentials = explode('|', $user);

        if ($credentials[0] === $email) {
            return false;
        }
    }
    return true;
}
?>