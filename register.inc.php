
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login | Skyware</title>
</head>
<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row d-flex justify-content-center py-5 mb-3">
                <img src="/public/assets/images/login.svg" alt="" width="180">
            </div>
        </div>
    </div>
    <div class="alert alert-success">User Registered Successfully</div>
    <div class="container">

        <div class="card col-lg-4 mx-auto px-0 shadow rounded px-2" style="background: white; border:none;">
            <div class="card-header text-center" style="background: white; border:none;">
                <h3 style="color: #00B0FF;">Register </h3>
            </div>
            <div class="card-body" style="font-size: 0.7rem;">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="register.php" method="POST">
                            <div class="form-row">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="firstName">Firstname</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="firstName"   required>
                                            <small id="firstName" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="lastName">Lastname</label>
                                            <input type="text" class="form-control" id="lastName" name="lastName"  aria-describedby="emailHelp" required>
                                            <small id="emailHelp" class="form-text text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" minlength="4">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="email_password" name="email_password" minlength="4"> 
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input" id="referalCodeCheck">
                                    <label class="form-check-label" for="exampleCheck1" name="referalCodeCheck">Referral Code</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Referal Code</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="referalCode" aria-describedby="emailHelp">
                                </div>
                                <input type="submit" value="Submit" class="btn btn-primary form-control">
                        </form>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
</body>
</html>