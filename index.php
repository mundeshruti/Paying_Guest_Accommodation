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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link href="css/index.css" rel="stylesheet" />
    
</head>

<body>

    <div class="header sticky-top">
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="#">
            <img src="img/slogo1.jpg" />Paying Guest Accomondation
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
                <?php
                if (!isset($_SESSION['user_id'])) {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php" data-toggle="modal" data-target="#signup-modal">

                            <button>Signup</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" data-toggle="modal" data-target="#login-modal">
                            <button>Login</button>
                        </a>
                    </li>

                    <?php
                } else {
                    ?>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <button>My Profile</button>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <button>Logout</button>
                        </a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </nav>
</div>
	<div class="landing-image">
		<h2 class="white text-center" >
		Paying Guest Accommondation</h2>
			<h3> Home like Stay Always… </h3>