<?php
session_start();
include("connect.php");
include('test.php');


$errors =[];
$output =[];

if(!empty($_POST["Submit"])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST["email"];
    $email_password = md5($_POST['email_password']);
    $referalCode = $_POST["referalCode"];
    
    if(!empty($referalCode)){
            $sql = "SELECT 
            userID, email, personalCode,firstName, lastName 
            FROM users
            WHERE email = '$email' AND email_password = '$password'

            ";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()){
                $_SESSION['userID'] = $row["userID"];
                $_SESSION['firstName'] = $row["firstName"];
                $_SESSION['lastName'] = $row["lastName"];
                $_SESSION['email'] = $row["email"];
                $_SESSION['personalCode'] = $row["personalCode"];
            }

            header("Location: dashboard.php");
        }else{
            header("Location:login.inc.php");
        }

    }
}



$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $_SESSION['UserID'] = $row["userID"];
    $_SESSION['firstName'] = $row["firstName"];
    $_SESSION['lastName'] = $row["lastName"];
    $_SESSION['Email'] = $row["email"];
    $_SESSION['referalCode'] = $row["referalCode"];
    $_SESSION['logged_in'] =true;
}

// echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
header("Location:dashboard.php");

} else {
  header("Location:login.inc.php");
}
$conn->close();