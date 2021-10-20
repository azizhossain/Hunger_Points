<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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


<body>
    <!-- Navigation Start -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url().'home/index';?>"><img src="
            <?= base_url('public/uploads/logo/hungerpoint.png'); ?>" class="responsive-img" 
            style="width: 40px;height: 40px;border: 0px  solid silver;">Hunger Points</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRes">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarRes">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'home/index';?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo base_url().'home/index';?>">Restaurants</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation End -->
    <!-- image section start -->
    <div class="img-container">
        <img width="100%" height="250px" src="<?php echo base_url().'public/uploads/slide/bg.jpg';?>">
        <div class="centered-text"></div>
    </div>
    <!-- image section end -->

     <!-- login form section start -->

    <div class="wrapper mt-sm-5">
        <?php
        if (!empty($this->session->flashdata('success'))) {
          echo "<div class='alert alert-success m-3 mx-auto'>".$this->session->flashdata('success')."</div>";
        }
        ?>
        <?php
        if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger m-3 mx-auto'>".$this->session->flashdata('msg')."</div>";
        }
        ?>
        <center>    
            <h1><span class="fa fa-users"></span></h1>
        </center>
        
        <h4 class="pb-4 border-bottom text-center">Login Here </h4>
        <form action="<?php echo base_url().'home' ;?>" name="loginform" id="loginform" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control bg-light" name="username" id="username"
                    placeholder="Username">
                <span></span>
            </div>
            <?php echo form_error('username'); ?>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control bg-light" name="password" id="password"
                    placeholder="Password">
                <span></span>
            </div>
            <?php echo form_error('password'); ?>
            <div class="py-3 pb-4 border-bottom" style="text-align:right;">
                <button type="submit" class="btn btn-success mr-3">Login</button>
                <a href="<?php echo base_url().'singup/index' ?>" class="btn btn-danger">Register</a>
            </div>
        </form>
    </div>
    
    <!-- login form section end -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php $this->load->view('front/partials/footer'); ?>
</body>  
</html>  