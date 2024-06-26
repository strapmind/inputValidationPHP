<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Madimi+One&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Kanit", sans-serif;
        }

        .curved-border {
            border-radius: 35px 0 0 35px;
        }

        .curved-border2 {
            border-radius: 35px 0 0 0;
        }

        .custom-bg {
            background-color: #F0FAFF;
        }

        .custom-height {
            height: 600px;
            width: 400px;
        }

        .form-control::placeholder {
            opacity: 70%;
            font-weight: 300;
        }
    </style>
</head>
<body>
<div class="container-fluid d-flex align-items-center justify-content-center flex-column custom-bg" style="height: 100vh; ">
        <div class="container d-flex justify-content-center custom-bg">
            <div class="row d-flex flex-column bg-primary shadow-lg curved-border custom-height justify-content-center">
                <div class="bg-primary text-center curved-border">
                    <h3 class="text-light mb-5 mt-3">Signup</h3>
                    <?php

                    $errorMsg = $_GET['errorMsg'] ?? '';

                    if (!empty($errorMsg)) {
                        echo '<div class="alert alert-danger">'. $errorMsg .'</div>';
                    }

                    $usernameError = $_GET['usernameError'] ?? '';
                    $passwordError = $_GET['passwordError'] ?? '';
                    $emailError = $_GET['emailError'] ?? '';
                    $uniqueUsernameError = $_GET['uniqueError'] ?? '';
                    $uniqueEmailError = $_GET['uniqueEmail'] ??'';

                    ?>
                    <form action="signUpForm.php" method="POST">
                        <div class="mb-4 px-5">
                            <input type="email" id="email" name="email" placeholder="Email address" 
                            class="<?= $emailError ? "form-control border border-danger" : "form-control" ?> <?= $uniqueEmailError ? "form-control border border-danger" : "form-control" ?>">
                            <span class="text-warning">
                                <?= $emailError ?>
                            </span>
                            <span class="text-warning">
                                <?= $uniqueEmailError ?>
                            </span>
                        </div>

                        <div class="mb-4 px-5">
                            <input type="text" id="username" name="username" placeholder="Username" 
                            class="<?= $usernameError ? "form-control border border-danger" : "form-control" ?> <?= $uniqueUsernameError ? "form-control border border-danger" : "form-control" ?> ">
                            <span class="text-warning">
                                <?= $usernameError ?>   
                            </span>
                            <span class="text-warning">
                                <?= $uniqueUsernameError ?>   
                            </span>

                        </div>

                        <div class="mb-4 px-5">
                            <input type="password" id="password" name="password" placeholder="Password" 
                            class="<?= $passwordError ? "form-control border border-danger" : "form-control" ?>">
                            <span class="text-warning">
                                <?= $passwordError ?>   
                            </span>
                        </div>

                        <button class="btn btn-dark mb-5">Sign up</button>
                    </form>
                </div>
                <div class="col bg-light curved-border2 text-center d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary text-nowrap">Already registered?</h3>
                    <a href="signIn.php" class="btn btn-outline-dark">Sign In</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>