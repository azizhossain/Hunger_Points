<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hunger Points</title>
    <link rel="shortcut icon" href="<?= base_url('public/uploads/logo/hungerpoint.png'); ?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
    <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css'); ?>">
    <style>
    
</style>
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
                    
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'home';?>">Login</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo base_url().'singup/index'?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navigation End -->
    