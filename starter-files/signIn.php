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
            border-radius: 0 35px 0 35px;
        }

        .curved-border2 {
            border-radius: 0 35px 0 0;
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

        .height{
            height: 70px; 
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex align-items-center justify-content-center flex-column custom-bg" style="height: 100vh; ">
        <div class="container d-flex justify-content-center custom-bg">
            <div class="row d-flex bg-primary shadow-lg curved-border custom-height justify-content-center">
                <div class="bg-primary text-center curved-border p-5">
                    <h3 class="text-light mb-5">Login</h3>


                    <form action="signUpForm.php" method="POST">
                        <div class="mb-4">
                            <input type="text" id="username" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="mb-4">
                            <input type="text" id="password" name="password" placeholder="Password" class="form-control">
                        </div>

                        <button class="btn btn-dark">Login</button>
                    </form>
                </div>
                <div class="col bg-light curved-border2 text-center mt-5 d-flex flex-column align-items-center justify-content-center">
                    <h3 class="text-primary">Still not registered?</h3>
                    <a href="signUp.php" class="btn btn-outline-dark">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>