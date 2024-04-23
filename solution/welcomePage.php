<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
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

        .custom-bg {
            background-color: #F0FAFF;
        }

        .custom-height {
            height: 600px;
            width: 850px;
        }

    </style>
</head>
<body>
    <div class="container-fluid d-flex align-items-center justify-content-center flex-column custom-bg" style="height: 100vh; ">
        <div class="container d-flex justify-content-center custom-bg">
            <div class="row d-flex bg-primary shadow-lg curved-border align-items-center">
                <div class="col-6 bg-primary text-center curved-border p-5">
                <?php

                $newUser = $_GET['newUser'] ?? '';
                $activeUser = $_GET['activeUser'] ?? '';


                echo "<h4>Welcome, </h4>" . "<h2>" . $newUser . $activeUser . "</h2>";

                ?>
                </div>

                <div class="col-6 bg-light text-center curved-border p-5">
                <h3 class="text-primary">Back to the first page</h3>
                <a href="index.php" class="btn btn-dark">Index</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
