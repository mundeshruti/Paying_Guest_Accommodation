<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "project");
if (!isset($_SESSION["user_id"])) {
    header("location: index.php");
    die();
}
$user_id = $_SESSION['user_id'];

$sql_1 = "SELECT * FROM users WHERE id = $user_id";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}
$user = mysqli_fetch_assoc($result_1);
if (!$user) {
    echo "Something went wrong!";
    return;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile </title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="css/dashboard.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />

</head>

<body>
    <div class="header sticky-top">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="home.php">
                <img src="img/slogo1.jpg" />Paying Guest Accomondation
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                <ul class="navbar-nav">
                    <a class="nav-link" href="home.php">
                        <button>HOME</button>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    if (!isset($_SESSION['user_id'])) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">

                                <button>Signup</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                                <button>Login</button>
                            </a>
                        </li>

                        <?php
                    } else {
                        ?>


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

    <div id="loading"></div>

    <div class="sidebar">
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="nav-links">
            <li>
                <a href="#" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="user-profile page-container">
        <h1>My Profile</h1>
        <div class="row">
            <div class="profile-picture col-md-3">
                <i class="fas fa-user text-center"></i>
            </div>
            <div class="col-md-9">
                <div class="row align-items-end">
                    <div class="col-9">
                        <div class="user-name">
                            <?= $user['full_name'] ?>
                        </div>
                        <div class="user-email">
                            <?= $user['email'] ?>
                        </div>
                        <div class="user-phone">
                            <?= $user['phone'] ?>
                        </div>
                        <div class="user-gender">
                            <?= $user['gender'] ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>