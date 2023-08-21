<?php
   
  $conn = mysqli_connect("127.0.0.1", "root", "", "project");
  
  if(mysqli_connect_errno()){
      echo "Connection Error: ".mysqli_connect_error();
      return;
  }

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = sha1($password);
    $full_name = $_POST['full_name'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result);
    if ($row_count != 0) {
        $response = array("success" => true, "message" => "This email id is already registered with us! plz  <a href='login.php'>login here");
        echo json_encode($response);
        return;
    }

    $sql = "INSERT INTO users (email, password, full_name, phone, gender) VALUES ('$email', '$password', '$full_name', '$phone', '$gender')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }
    
    $response = array("success" => true, "message" => "Account successfully created! <a href='login.php'>login here");
    echo json_encode($response);
    mysqli_close($conn);
?>