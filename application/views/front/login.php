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
    <?php $this->load->view('front/partials/header'); ?>
    <!-- image section start -->
     <div class="img-container">
    <img width="100%" height="250px" src="<?php echo base_url().'public/uploads/slide/front.jpg';?>">
    <div class="carousel-caption text-center">
        <h2>Login Your Account</h2>
    </div>
    <hr>
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
        <form action="<?php echo base_url().'login/authenticate' ;?>" name="loginform" id="loginform" method="POST">
            <div class="form-group">
                <label for="usersname">Username</label>
                <input type="text" class="form-control bg-light" name="usersname" id="usersname"
                    placeholder="Username">
                <span></span>
            </div>
            <?php echo form_error('usersname'); ?>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control bg-light" name="password" id="password"
                    placeholder="Password">
                <span></span>
            </div>
            <?php echo form_error('password'); ?>
            <div class="py-3 pb-4 border-bottom" style="text-align:right;">
                <button type="submit" class="btn btn-success mr-3">Login</button>
                <a href="<?php echo base_url().'singup/index' ?>" class="btn btn" style="background:#ff6600; color: white;">Register</a>
            </div>
        </form>
    </div>
    
    <!-- login form section end -->
    <script>
    const form = document.getElementById('loginform');
    const usersname = document.getElementById('usersname');
    const password = document.getElementById('password');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })

    const sendData = (sRate, count) => {
        if(sRate === count) {
            event.currentTarget.submit();
        }
    }

    const successMsg = (usernameVal) => {
        let formCon = document.getElementsByClassName('form-control');
        var count = formCon.length - 1; 
        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control bg-light success") {
                var sRate = 0 + i;
                sendData(sRate, count);
            } else {
                return false;
            }
        }
    }

    const validate = () => {
        const usernameVal = usersname.value.trim();
        const passwordVal = password.value.trim();

        if (usernameVal === "") {
            setErrorMsg(usersname, 'username can be blank');
        } else {
            setSuccessMsg(usersname);
        }

        if (passwordVal === "") {
            setErrorMsg(password, 'password can not be blank');
        } else {
            setSuccessMsg(password);
        }

        successMsg();
    }

    function setErrorMsg(ele, msg) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        const span = formCon.querySelector('span');
        span.innerText = msg;
        formInput.className = "form-control bg-light is-invalid";
        span.className = "invalid-feedback font-weight-bold";
    }

    function setSuccessMsg(ele) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        formInput.className = "form-control bg-light success";
    }
    </script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php $this->load->view('front/partials/footer'); ?>
</body>  
</html>  