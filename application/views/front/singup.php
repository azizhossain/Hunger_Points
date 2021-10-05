<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="<?= base_url('public/uploads/logo/hungerpoint.png'); ?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/profile.css');?>">
</head>

<body style="background: #ebebe0;">
    <div class="img-container">
        <img width="100%" height="250px" src="<?php echo base_url().'public/uploads/slide/bg.jpg';?>">
        <div class="centered-text"></div>
    </div>
    <div class="wrapper container" style="background: white;">

        <div style="width: 500px;background-color: rgb(0,0,0,0.3);margin: auto;color: #FFFFFF;padding: 5px 0px 5px 0px;text-align: center;border-radius: 5px 5px 5px 5px;margin-bottom: 15px; "><h2>Registration Form</h2></div>
        <form action="<?php echo base_url().'home/index'; ?>" method="POST" name="myForm" id="myForm"
            class="form-container mx-auto shadow-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="username">Enter Username</label>
                        <input type="text" class="form-control
                <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>" name="username" id="userName"
                            placeholder="Enter Username" value="<?php echo set_value('username')?>">
                        <?php echo form_error('username'); ?>
                        <span></span>
                    </div>

                    <div class="form-group">
                        <label for="lastname">Enter Last Name</label>
                        <input type="text" class="form-control 
                <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>" name="lastname" id="lastName"
                            placeholder="Enter Last Name" value="<?php echo set_value('lastname')?>">
                        <?php echo form_error('lastname'); ?>
                        <span></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control
                <?php echo (form_error('password') != "") ? 'is-invalid' : '';?>" name="password" id="pass"
                            placeholder="Password" value="<?php echo set_value('password')?>">
                        <?php echo form_error('password'); ?>
                        <span></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">Enter First Name</label>
                        <input type="text" class="form-control
                <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>" name="firstname" id="firstName"
                            placeholder="Enter First Name" value="<?php echo set_value('firstname')?>">
                        <?php echo form_error('firstname'); ?>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control
                <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>" name="email" placeholder="Email"
                            id="email" value="<?php echo set_value('email')?>">
                        <?php echo form_error('email'); ?>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="phone">Contact</label>
                        <input type="number" class="form-control
                <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>" name="phone" placeholder="Contact"
                            id="phone" value="<?php echo set_value('phone')?>">
                        <?php echo form_error('phone'); ?>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" type="text" style="height:70px;" class="form-control
        <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"
                    value="<?php echo set_value('address');?>"></textarea>
                <?php echo form_error('address'); ?>
                <span></span>
            <div class="status text-center text-danger font-weight-bold my-2"></div>
            <button type="submit" class="btn btn-primary btn-block">Create Account</button><br>
            <h6 style="text-align: center; color: red;">Already registered?</h6>
            <div class="status text-center text-danger font-weight-bold my-2"></div>
            <a href="<?php echo base_url().'home/index';?>" class="btn waves-effect" style="background: black;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;color:white;">Log In</a>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>