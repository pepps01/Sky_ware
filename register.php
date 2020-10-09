<?php
include('connect.php');
require_once('test.php');


$errors = [];
$output =[];


// Validate input 
if(!empty($_POST["Submit"])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST["email"];
    $email_password = md5($_POST['email_password']);
    $referalCode = $_POST["referalCode"];
    
    if(!empty($referalCode)){
        $sql = "SELECT referalCode
                From users
                WHERE referalCode = '$referalCode'";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc()){
                $referalCode = $row["referalCode"];
            }
            $personalCode = createReferralCode();
        }else{
            $personalCode = createReferralCode();
            $referalCode ="";
        }
    }
}

// Check for Errors

$referalCode = createReferralCode($firstName,$lastName);


// Creating a post
$sql = "INSERT INTO users (firstName, lastName, email,email_password, referalCode, personalCode ,userType )
VALUES (  '$firstName'  , '$lastName', '$email', '$email_password', '$referalCode' , '$personalCode' ,'2')";

if ($conn->query($sql) === TRUE) {

  header("Location: login.inc.php");

} else {
    header("Location: login.inc.php");
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




function createReferralCode($firstName, $lastName)
{
    $randomNum = [1000001,2000002];
    $code = "";
    $rand = mt_rand($randomNum[0],$randomNum[1]);
    $code = substr($firstName,0,2)."".substr($lastName,0,2)."".substr($rand,0,5);

    return $code;
}
