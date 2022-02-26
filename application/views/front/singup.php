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
    <?php $this->load->view('front/partials/header'); ?>
    <!-- image section start -->
     <div class="img-container">
    <img width="100%" height="250px" src="<?php echo base_url().'public/uploads/slide/front.jpg';?>">
    <div class="carousel-caption text-center">
        <h2>Create An Account</h2>
    </div>
    <hr>
</div>
    <!-- image section end -->

    <!-- registation form section start -->

    <div class="wrapper container" style="background: white; width: 50%;">
        <center>    
            <h1><span class="fa fa-users"></span></h1>
        </center>
        <div style="width: 600px;background-color: rgb(0,0,0,0.3);margin: auto;color: #FFFFFF;padding: 5px 0px 5px 0px;text-align: center;border-radius: 5px 5px 5px 5px;margin-bottom: 15px; "><h2>Registration Form</h2></div>
        <form action="<?php echo base_url().'singup/create_user'; ?>" method="POST" name="myForm" id="myForm"
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
            </div>
            <div class="status text-center text-danger font-weight-bold my-2"></div>
            <button type="submit" class="btn btn-primary btn-block">Create Account</button><br>
            <h6 style="text-align: center; color: red;">Already registered?</h6>
            <div class="status text-center text-danger font-weight-bold my-2"></div>
            <a href="<?php echo base_url().'login/index';?>" class="btn waves-effect" style="background: black;width: 100%;margin-top: 10px;box-shadow: none;text-transform: capitalize;color:white;">Log In</a>
        </form>
    </div>

    <!-- registation form section end -->

    <!-- jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <?php $this->load->view('front/partials/footer'); ?>
<script>
    const form = document.getElementById('myForm');
    const userName = document.getElementById('userName');
    const firstName = document.getElementById('firstName');
    const lastName = document.getElementById('lastName');
    const email = document.getElementById('email');
    const pass = document.getElementById('pass');
    const phone = document.getElementById('phone');
    const address = document.getElementById('address');

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        validate();
    })

    const isEmail = (emailVal) => {
        var re =
            /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(emailVal)) {
            return "fail";
        }
    }

    const sendData = (sRate, count) => {
        if(sRate === count) {
            event.currentTarget.submit();        
        }
    }

    const successMsg = () => {
        let formCon = document.getElementsByClassName('form-control');
        var count = formCon.length - 1;
        for (var i = 0; i < formCon.length; i++) {
            if (formCon[i].className === "form-control success") {
                var sRate = 0 + i;
                sendData(sRate, count);
            } else {
                return false;
            }
        }
    }

    const validate = () => {
        const userNameVal = userName.value.trim();
        const firstNameVal = firstName.value.trim();
        const lastNameVal = lastName.value.trim();
        const emailVal = email.value.trim();
        const passVal = pass.value.trim();
        const phoneVal = phone.value.trim();
        const addressVal = address.value.trim();

        //username validation
        if (userNameVal === "") {
            setErrorMsg(userName, 'username cannot be blank');
        } else if (userNameVal.length <= 4 || userNameVal.length >= 16) {
            setErrorMsg(userName, 'username length should be between 5 and 15"');
        } else if (!isNaN(userNameVal)) {
            setErrorMsg(userName, 'only characters are allowed');
        } else {
            setSuccessMsg(userName);
        }

        //firstname validation
        if (firstNameVal === "") {
            setErrorMsg(firstName, 'firstname cannot be blank');
        } else if (!isNaN(firstNameVal)) {
            setErrorMsg(firstName, 'only characters are allowed');
        } else {
            setSuccessMsg(firstName);
        }

        //lastname validation
        if (lastNameVal === "") {
            setErrorMsg(lastName, 'lastname cannot be blank');
        } else {
            setSuccessMsg(lastName)
        }

        //email validation
        if (emailVal === "") {
            setErrorMsg(email, 'email cannot be blank');
        } else if (isEmail(emailVal) === "fail") {
            setErrorMsg(email, 'enter valid email only');
        } else {
            setSuccessMsg(email);
        }

        //password validation
        if (passVal === "") {
            setErrorMsg(pass, 'password can not be blank');
        } else if (passVal.length <= 7 || passVal.length >= 16) {
            setErrorMsg(pass, 'password length should be between 8 and 15');
        } else {
            setSuccessMsg(pass);
        }

        //phone validation
        if (phoneVal === "") {
            setErrorMsg(phone, 'phone cannot be blank');
        } else if (phoneVal.length != 11) {
            setErrorMsg(phone, 'enter valid phone number only');
        } else {
            setSuccessMsg(phone);
        }

        //address validation
        if (addressVal === "") {
            setErrorMsg(address, 'address cannot be blank');
        } else if (addressVal.length < 5) {
            setErrorMsg(address, "Enter valid address only");
        } else {
            setSuccessMsg(address);
        }

        successMsg();
    }

    function setErrorMsg(ele, msg) {

        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        const span = formCon.querySelector('span');
        span.innerText = msg;
        formInput.className = "form-control is-invalid";
        span.className = "invalid-feedback font-weight-bold"
    }

    function setSuccessMsg(ele) {
        const formCon = ele.parentElement;
        const formInput = formCon.querySelector('.form-control');
        formInput.className = "form-control success";
    }

    </script>
</body>
</html>