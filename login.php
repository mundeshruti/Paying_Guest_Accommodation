<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet">
</head>

<body class="back">
    <br>
    <br>
        <div class="col-md-5 mx-auto">
            <div class="card card-body">
                <h1 class="text-center">Login </h1>
                <div class="modal-body">
                    <form id="login-form" class="form" role="form" method="post" action="login_submit.php">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>

                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                minlength="6" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-primary">Login</button></a>
                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <span>
                        <a href="signup.php" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Sign
                            Up</a>
                        to register a Account
                    </span>
                </div>
            </div>
        </div>

</body>

</html>