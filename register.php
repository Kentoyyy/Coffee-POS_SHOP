<!DOCTYPE html>
<html lang="en">

<head>
     <link rel="icon" type="image/x-icon" href="favicon.ico">
    
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - A.B Café & Bar</title>
    <meta name="description" content="Inventory &amp; Point of Sale System">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-badges.css">
    <link rel="stylesheet" href="assets/css/Pricing-Centered-icons.css">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5" style="border-radius: 20px;">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background: url(logo.png);background-size: contain;"></div>
                    </div>
                    <div class="col-lg-7" style="padding: 40px;">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">A.B Café & Bar - SignUp First</h4>
                            </div>
                            <form class="user" action="functions/create-account.php" method="post">
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email"></div>
                                <div class="mb-3"><input class="form-control form-control-user" type="number" id="number" aria-describedby="number" placeholder="Number" name="number"></div>
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Repeat Password" name="repeat_password"></div>

                                </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                                <hr>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>