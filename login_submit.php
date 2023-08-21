<?php
  session_start();
  $conn = mysqli_connect("127.0.0.1", "root", "", "project");
  
  if(mysqli_connect_errno()){
      echo "Connection Error: ".mysqli_connect_error();
      return;
  }
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result);
    if ($row_count == 0) {
        $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
        echo json_encode($response);
        return;
    }

    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['full_name'] = $row['full_name'];
    $_SESSION['email'] = $row['email'];

    $response = array( "Login successful! <a href='home.php'>Continue" );
    echo json_encode($response);
    mysqli_close($conn);
?>