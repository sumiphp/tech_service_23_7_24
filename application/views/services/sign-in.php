
<!--<!doctype html> <html lang="zxx">
    <head>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/bootstrap.min.css';?>"> 
       
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/owl.theme.default.min.css';?>">
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/owl.carousel.min.css'?>">
       
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/magnific-popup.min.css'?>">
       
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/animate.min.css'?>">
        
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/boxicons.min.css'?>">
       
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/fonts/flaticon.css'?>">
       
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/meanmenu.min.css'?>">
        
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/style.css'?>">
        
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/responsive.css'?>">
        
        <link rel="stylesheet" href="<?php //echo base_url().'services/assets/css/theme-dark.css'?>">

       
        <title>Pocket Frindly </title>

       <link rel="icon" type="image/png" href="assets/img/favicon.png"> 
    </head>-->
    <?php include_once("header.php");?>  
    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->

      

      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6">
				<div class="contact-wrap-form log-in-width">
                    <h6><?php echo $this->session->flashdata('flash_msg');?></h6>
					<form method="post" action="<?php echo base_url().'index.php/welcome/loginprocess';?>">
                        <h2>Login</p>
						<div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <label for="register-form-name">Email Address</label>
							</div>

                            <div class="col-lg-6 col-sm-6">
								<a class="forget" href="#">SignUp</a>
							</div>
							<div class="col-12">
								<div class="form-group">
                                  
									<input class="form-control" type="text" name="username" placeholder="Username or Email">
								</div>
							</div>

                            <div class="col-lg-6 col-sm-6">
                                <label for="register-form-name">Password</label>
							</div>

                            <div class="col-lg-6 col-sm-6">
								<a class="forget" href="#">Forgot password?</a>
							</div>

                          
							<div class="col-12">
								<div class="form-group">
                                  
									<input class="form-control" type="password" name="password" placeholder="Password">
								</div>
							</div>

							<div class="col-lg-6 col-sm-6 form-condition">
								<div class="agree-label">
									<input type="checkbox" id="chb1">
									<label for="chb1">
										Remember Me
									</label>
								</div>
							</div>

						

							<div class="col-12 text-center">
								<button class="default-btn btn-two" type="submit">
									Login
								</button>
							</div>

							<!--<div class="col-12">
                                <div class="content">
                                    <p class="or">or Login</p>
                                  </div>
								 <p class="account-desc">
									Not a member?
									<a href="#">Sign Up</a>
								</p> 
							</div>

                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <button class="login-social-btn" type="submit">
                                    <i class='bx bxl-google'></i>
                                    <p>Google</p>  
                                </button>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <button class="login-social-btn" type="submit">
                                    <i class='bx bxl-facebook-circle'></i>
                                    <p>Facebook</p> 
                                </button>
                            </div>-->
						</div>
					</form>
				</div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="login-img">
                    <img src="<?php echo base_url().'services/assets/img/login-img.png';?>">
                </div>
            </div>

           
        </div>

			</div>
		</section>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
         <!-- Footer Area -->
         <?php include('footer.php');?>
       