<link rel="stylesheet" href="<?php echo base_url('assets/css/profile.css');?>">
<div class="row">
    <div class="col-md-6">
        <div class="wrapper mt-sm-5">
            <form action="" method="POST">
                 <center>    
                         <h1><i class="fas fa-cog"></i></h1>
                </center>
                <h4 class="pb-4 border-bottom" style="text-align:center;">Account settings</h4>
                <div class="py-2">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username"
                            class="bg-light form-control <?php echo (form_error('username') != "") ? 'is-invalid' : '';?>"
                            value="<?php echo set_value('usersname', $user['usersname']);?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">First Name</label>
                            <input type="text"
                                class="bg-light form-control <?php echo (form_error('firstname') != "") ? 'is-invalid' : '';?>"
                                name="firstname" value="<?php echo set_value('firstname', $user['f_name'])?>">
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Last Name</label>
                            <input type="text"
                                class="bg-light form-control <?php echo (form_error('lastname') != "") ? 'is-invalid' : '';?>"
                                name="lastname" value="<?php echo set_value('lastname', $user['l_name'])?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="email">Email Address</label>
                            <input type="text"
                                class="bg-light form-control <?php echo (form_error('email') != "") ? 'is-invalid' : '';?>"
                                name="email" value="<?php echo set_value('email', $user['email'])?>">
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Contact Number</label>
                            <input type="tel"
                                class="bg-light form-control <?php echo (form_error('phone') != "") ? 'is-invalid' : '';?>"
                                name="phone" value="<?php echo set_value('phone', $user['phone'])?>">
                        </div>
                    </div>
                    <div>
                        <label for="address">Address</label>
                        <textarea name="address" type="text" style="height:70px;"
                            class="bg-light form-control <?php echo (form_error('address') != "") ? 'is-invalid' : '';?>"><?php echo set_value('address', $user['address']);?></textarea>
                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <button type="submit" class="btn btn-success mr-3">Save Changes</button>
                        <a href="<?php echo base_url().'home' ?>" class="btn border button">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
