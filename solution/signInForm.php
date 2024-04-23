<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    return header('Location: signIn.php?errorMsg=Please%20log%20in%20again.');
}

$username = $_POST['username'];
$password = $_POST['password'];

$users = explode(PHP_EOL, file_get_contents('users.txt'));

$errors = [];

if (empty($username)) {
    $errors['usernameLog_error'] = 'Username is required to sign in.';
}

if (empty($password)) {
    $errors['passwordLog_error'] = 'Password is required to sign in.';
}

if (!empty($errors)) {
    return header('Location: signIn.php?' . http_build_query($errors));
}

foreach ($users as $user) {
    $userData = explode('|', $user);

    if ($userData[1] === $username && password_verify($password, $userData[2])) {
        return header('Location: welcomePage.php?activeUser=' . $username);
    }
}
return header('Location: signIn.php?userNotFound=Wrong%20username/password%20combination.')

?>