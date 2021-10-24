<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/dashboard.css';?>">
    <style type="text/css">
        #loginform{width: 40%;}
    </style>
</head>

<body style="padding: 50px;">
    <div class="conatiner" >
        <center>
        <h1><span class="fa fa-users"></span></h1>
        </center>
        <h3 class="text-center mt-3">Admin Panel</h3>
        <p class="text-center mb-4">Please Login To Continue</p>
        
        <form name="loginform" id="loginform"
            method="POST" class="form-container mx-auto">
            <div class="form-group">
                <label for="username">Enter Username</label>
                <input type="text" class="form-control my-2" name="username" id="username" placeholder="Username">
                <span></span>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control my-2" name="password" id="password" placeholder="Password">
                <span></span>
            </div>

                <button type="submit" class="btn btn-success mr-3">Login</button>
        
        </form>
    </div>


    
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>