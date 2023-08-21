<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "project");
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;
$city_name = $_GET["city"];

$sql_1 = "SELECT * FROM cities WHERE name = '$city_name'";
$result_1 = mysqli_query($conn, $sql_1);
if (!$result_1) {
    echo "Something went wrong!";
    return;
}

$city = mysqli_fetch_assoc($result_1);
if (!$city) {
    echo "Sorry! We do not have any PG listed in this city.";
    return;
}

$city_id = $city['id'];

$sql_2 = "SELECT * FROM properties WHERE city_id = $city_id";
$result_2 = mysqli_query($conn, $sql_2);
if (!$result_2) {
    echo "Something went wrong!";
    return;
}

$properties = mysqli_fetch_all($result_2, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet" />
    <link href="css/room.css" rel="stylesheet" />
</head>

<body>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb py-2">
            <li class="breadcrumb-item">
                <a href="home.php">Back</a>
            </li>
        </ol>
    </nav>
    <?php
    foreach ($properties as $property) {
        $property_images = glob("img/properties/" . $property['id'] . "/*");
        ?>
        <div class="property-card property-id-<?= $property['id'] ?>">
            <div class="content-container col-md-12" style="padding:5px;margin-left:180px">
                <div class="detail-container">
                        <div class="property-name">
                            <?= $property['name'] ?>
                        </div>
                        <div class="property-address">
                            <?= $property['address'] ?>
                        </div>
                        <div class="property-gender">
                            <div class="star-container" title="<?= $total_rating ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="rent-container col-6">
                            <div class="rent">₹
                                <?= number_format($property['rent']) ?>/-
                            </div>
                            <div class="rent-unit">per month</div>
                        </div>
                        <BR>
                        <div class="button-container col-6">
                            <a href="detail.php?property_id=<?= $property['id'] ?>"
                                class="btn btn-primary">BOOK</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
    </div>
</body>

</html>