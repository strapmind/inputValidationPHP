<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return header('Location: signUp.php?errorMsg=Please%20submit%20the%20form%20again.');
}

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

include_once ('validations.php');

$errors = [];

if (!validateUsername($username)) {
    $errors['usernameError'] = 'Username cannot contain empty spaces or special signs.';
}

if (!uniqueUsername($username)) {
    $errors['uniqueError'] = 'Username taken.';
}

if (!validatePassword($password)) {
    $errors['passwordError'] = 'Enter a combination of at least one number, special sign and uppercase letter.';
}

if (!validateEmail($email)) {
    $errors['emailError'] = 'Enter a valid email';
} else {
    if (!uniqueEmail($email)) {
        $errors['uniqueEmail'] = 'Email already in use.';
    }
}

if (!empty($errors)) {
    return header('Location: signUp.php?' . http_build_query($errors));
}

$registeredUser = "$email|$username|" . password_hash($password, PASSWORD_DEFAULT);

if (file_put_contents('users.txt', $registeredUser . PHP_EOL, FILE_APPEND)) {
    return header('Location: welcomePage.php?newUser=' . $username);
}
?>