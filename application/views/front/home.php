<!-- image slider start -->
<div id="slides" class="carousel slide carousel-cus" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo base_url().'public/uploads/slide/Biriyani.jpeg';?>">
            <div class="carousel-caption text-left">
                <h1 class="display-2">Are You Hungry?!</h1>
                <h3>Don't worry, we are here to serve you</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-success btn-lg">Order Now</a>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-lg" style="background: #ff6600;">View Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url().'public/uploads/slide/Burger.jpg';?>">
            <div class="carousel-caption text-right">
                <h1 class="display-2">Are You Hungry?!</h1>
                <h3>Don't worry, we are here to serve you</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-success btn-lg">Order Now</a>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-lg"  style="background: #ff6600;">View Menu</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?php echo base_url().'public/uploads/slide/Pizza.jpg';?>">
            <div class="carousel-caption text-left">
                <h1 class="display-2">Are You Hungry?!</h1>
                <h3>Don't worry, we are here to serve you</h3>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-success btn-lg">Order Now</a>
                <a href="<?php echo base_url().'restaurant/index'?>" class="btn btn-lg" style="background: #ff6600;">View Menu</a>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4">
    
</div>
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="bike-image" style="padding-bottom: 20px;">
                <img width="300" height="146" src="<?php echo base_url().'public/uploads/img/b.png';?>">
            </div>
            <h3>Fastest <br>Delivery</h3>
            <p>Get your food delivered in less than an hour! That’s as fast as it can get.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="bike-image" style="padding-bottom: 20px;">
                <img width="300" height="146" src="<?php echo base_url().'public/uploads/img/a.png';?>">
            </div>
            <h3>So Much to <br>Choose From</h3>
            <p>Find your favourite among the thousands of restaurants in our website.</p>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="bike-image" style="padding-bottom: 20px;">
                <img width="300" height="146" src="<?php echo base_url().'public/uploads/img/c.png';?>">
            </div>
            <h3>Best Offers <br>In Town!</h3>
            <p>Get the best offers and combos at the best price only at Hunger Point!</p>
        </div>
    </div>
    <hr class="my-4">
</div>
<div class="container padding">
    <div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="bike-image" style="padding-bottom: 20px;">
            <img width="600" height="246" class="img-fluid" src="<?php echo base_url().'public/uploads/img/1.jpg';?>">
            </div>
        </div>
         <div class="col-xs-12 col-sm-6 col-md-4">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4" style="padding-top: 100px; padding-right: 80px;">
            <h4>Select and set your food</h4>
            <p>Select the food you want from thousands of restaurants.</p>
        </div>
</div>
<div class="row text-center p-3">
         <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 100px; margin-right: 90px; ">
            <h4>Confirm your order and wait</h4>
            <p>Just confirm your order and enjoy our fastest delivery. Fresh and delicious food will be delivered to your doorstep.</p>
        </div>
       
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="bike-image" style="margin-bottom: 20px;">
            <img width="400" height="246"  class="img-fluid" style="margin-left: 200px; margin-top: 50px;" src="<?php echo base_url().'public/uploads/img/3.jpg';?>">
            </div>
        </div>
</div>
<div class="row text-center padding">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="bike-image" style="padding-bottom: 20px;">
            <img width="600" height="246"  class="img-fluid" src="<?php echo base_url().'public/uploads/img/cash2.jpg';?>">
            </div>
        </div>
         <div class="col-xs-12 col-sm-6 col-md-4">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4" style="padding-top: 100px; padding-right: 80px;">
            <h4>Pay Bill Using Cash On Delivery</h4>
            <p>Have No Bkash, No Rocket, No Nogad ?? Dont't Worry! Pay bill using cash on delivery for your food.</p>
        </div>
</div>
</div>


<div class="container-fluid padding">
    <div class="row welcome text-center welcome">
        <div class="col-12">
            <h1 class="display-4">Popular Dishes</h1>
        </div>
        <hr>
    </div>
</div>
<div class="container-fluid padding dish-card">
    <div class="row">
        <?php if(!empty($dishesh)) { ?>
        <?php foreach($dishesh as $dish) { ?>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch">
            <div class="card mb-4 shadow-sm">
                <?php $image = $dish['img'];?>
                <img class="card-img-top" src="<?php echo base_url().'public/uploads/dishesh/thumb/'.$image; ?>">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?php echo $dish['name']; ?></h4>
                        <h4 class="text-muted"><b>৳ <?php echo $dish['price']; ?></b></h4>
                    </div>
                    <p class="card-text"><?php echo $dish['about']; ?></p>
                    <a href="<?php echo base_url().'Dish/addToCart/'.$dish['d_id']; ?>" class="btn btn-success"><i
                            class="fas fa-cart-plus"></i> Add to
                        Cart</a>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php } else { ?>
        <div class="jumbotron">
            <h1>No records found</h1>
        </div>
        <?php } ?>
    </div>
    <hr class="my-4">
</div>
<!-- image slider end -->

<!-- social media section start -->
<div class="container-fluid padding">
    <div class="row text-center padding">
        <div class="col-12">
            <h2>Connect With Us</h2>
        </div>
        <div class="col-12 social padding">
            <a href="https://www.facebook.com/Hungerspoint" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.twitter.com/Hungerspoint" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.google.com/Hungerspoint" target="_blank"><i class="fab fa-google-plus-g"></i></a>
            <a href="https://www.instagram.com/Hungerspoint" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/Hungerspoint" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<!-- social media section end -->
<!-- why choose us section start -->
<div  style="background:  #00001a; color: white;">
<div class="container">
    <div class="row text-center">
        <div class="col-12">
            <h1 class="display-5">Why Choose Us</h1>
        </div>
        <hr>
    </div>
    <div class="row text-right p-2">
    <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 style="">Healthy Food</h4>
            <p>Building a society & community with sound mind, mentality and health by developing healthy food habit</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-1 text-left"><img src="<?php echo base_url().'public/uploads/img/h.png';?>"></div>
        <div class="col-xs-12 col-sm-6 col-md-3"><img src="<?php echo base_url().'public/uploads/img/honey.png';?>"></div>
        <div class="col-xs-12 col-sm-6 col-md-4 text-left">
            <h4>Honesty & Integrity</h4>
            <p>Our aim is to earn halal income for our stakeholders through doing business with integrity & honestly in a fair manner.</p>
        </div>
    </div>
    <div class="row text-right p-2">
    <div class="col-xs-12 col-sm-6 col-md-4">
            <h4 style="">Quickest Delivery</h4>
            <p>We would love to make our consumers feel like shop next to their door by ensuring quickest delivery service.</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-1 text-left"><img src="<?php echo base_url().'public/uploads/img/dlevery.png';?>"></div>
        <div class="col-xs-12 col-sm-6 col-md-3 text-right"><img src="<?php echo base_url().'public/uploads/img/en.png';?>"></div>
        <div class="col-xs-12 col-sm-6 col-md-4 text-left">
            <h4 style="">Environmental safety</h4>
            <p>We always work on keeping a healthy environment for our employees. We dump and recycle our wastes in proper manner.</p>
        </div>
    </div>
</div>
</div>

<!-- why choose us section end -->