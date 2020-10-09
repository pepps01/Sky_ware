<?php
    session_start();
    require("connect.php");
    

    if(!isset($_SESSION["userID"]))
    {
        header("Location: login.php");
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Dashboard | Skyware</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex justify-content-center py-2 mb-1">
                <img src="/public/assets/images/dashboard.svg" alt="" width="180">
            </div>
            <div class="row text-center justify-content-center mb-5 ">
                    <div class="col-lg-12 text-center">
                        <a href="/" class="text-center">Skyware</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="card col-lg-12 mx-auto  shadow rounded " style="background: white; border:none;">
            <div class="card-header text-center" style="background: white; border:none;">
                <h3 style="color: #00B0FF;">Welcome  <?php 
                    if(!empty($_SESSION["firstName"])){
                        $_SESSION["firstName"] . " ". $_SESSION["lastName"];
                    }else
                    {
                        echo "";
                    }

                    
                ?> 
                </h3>
            </div>
            <div class="card-body" style="font-size: 0.7rem;">
                <div class="row">
                    <div class="col-lg-12">
                        <p>My Referal Code is <span style="font-weight:bolder;"><?php echo($_SESSION["personalCode"]) ;?></span></p>
                        <h5>People in your Network</h5>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">RefDate</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $personalCode = $_SESSION['personalCode'];
                            $sql = "SELECT firstName, lastName From users WHERE referalCode =  '$personalCode'";
                            $result = $conn->query($sql);

                            if($result->num_rows > 0){
                                while($row = $result->fetch_assoc()){

                                    $firstName = $row["firstName"];
                                    $lastName = $row["lastName"];

                                    echo "<tr>
                                        <td>" .$firstName. "</td>
                                        <td>" . $lastName. "</td>
                                        <td>
                                            <button  class='btn btn-sm btn-success'>Say Hi</button>
                                        </td>
                                        
                                    </tr>";
                                }
                            }

                        ?>
                            
                            
                    </tbody>
                    </table>
                    </div>
                </div>
           
            </div>
            <div class="card-footer text-center" style="border:none; background: white;">
                <a href="logout.php" class="">logout</a>
            </div>
        </div>
    </div>
</body>
</html>