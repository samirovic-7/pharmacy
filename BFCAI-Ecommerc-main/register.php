<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medicine - Home</title>
    <link rel="shortcut icon" href="assets/image/index/small_img/logoIcon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/css/all.min.css" />
    <link rel="stylesheet" href="assets/css/login.css">
</head>


<div class="header">
    <div class="container">
         <h2 class="h1 text-center"> Create New Customer Account </h2>
    </div>
</div>

<div class="reistration text-center">
    <div class="container">
        <div class="registration-content">

        <h2 class="h1"> Personal Information </h2>
            <div class="registration-form">
                <form id="admin_register" method="post" enctype="multipart/form-data">

                

                <div class="mb-3 row">
                    <label for="firstname" class="col-sm-3 col-form-label"> First name </label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="first_name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="lastname" class="col-sm-3 col-form-label"> Last name </label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname"  name="last_name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="age" class="col-sm-3 col-form-label"> Age </label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="age" name="age">
                    </div>
                </div>

                

                <div class="mb-3 row">
                    <label for="phone" class="col-sm-3 col-form-label"> Phone </label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label"> Image </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file"  id="file" name="file" >
                    </div>
                </div>
                <br>
                <br>

                <h2 class="h1"> Sign-in Information </h2>


                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label"> Email </label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="confirm" class="col-sm-3 col-form-label"> confirm password </label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="confirm" name="confirm_password">
                    </div>
                </div>

                <button type="submit" class="btn btn-dark" id="register"> Register </button>
                </form>
            </div>
        </div>


    </div>
    

</div>





<script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/dynamicTabs.js"></script>
    <script src="assets/js/accordion.js"></script>
    <script src="assets/js/script.js"></script>

    <script src="front_code/register.js"></script>


</body>

</html>