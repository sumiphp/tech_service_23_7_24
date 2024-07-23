
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
              <div class="dashboard-bgarea">
                <div class="dashboard-innerbox">
                    <div class="row">
                        
  
                        <div class="col-lg-12">
                               <!-- ======= Sidebar ======= -->
   <div class="other-side">
    

    <div class="modal-menu">
        <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">
            <i class="flaticon-menu"></i>
        </a>
    </div>
</div>

 <!-- Start Sidebar Modal -->
 <div class="sidebar-modal">  
    <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <i class="bx bx-x"></i>
                        </span>
                    </button>
                    <h2 class="modal-title" id="myModalLabel2">
                        <a href="<?php echo base_url().'Welcome/dashboard';?>">
                            
                             <!--<img src="<?php //echo base_url().'Pocket/assets/img/logo.png';?>" class="modal-logo1" alt="Logo">-->

                             <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="modal-logo1" alt="<?php echo $siteinf->alttagimg1;?>">
                        </a>
                    </h2>
                </div>
                
                <div class="modal-body" id="navbarSupportedContent">
                    <nav class="sidebar card py-2 mb-4">

<?php include('sidebarmenu.php');?>



                        
                        </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Sidebar Modal -->

<?php date_default_timezone_set('Asia/Kolkata');?>

  <!-- End Sidebar-->
                            <div class="time-date-main">
                              
                           <p><span class="icon"><i class='bx bx-time-five'></i> <?php echo date('h:i A');?>

<!--10.41 pm--> </span> <span class="icon"><i class='bx bx-calendar'></i> <?php 
$dt=Date('Y-m-d');
$date=explode("-",$dt);
                            //echo $mon=$date[1];
                            $mon = date('F', strtotime($dt));
                            //$monfull=Date('M',$mon);
                            $dt=$date[2];
                            $year=$date[0];
                            echo $mon.' '.$dt.','.$year;
                            ?><!--November 16 ,2014--> </span>  </p>
                            </div>
                            <div class="profile-sec">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <div class="nav-author__info">
                                            <div class="author-img">
                                            <img src="<?php echo base_url().'assets/img/profile-img.jpg';?>" alt="" class="rounded-circle">
                                            </div>
                                            <div class="author-info">
                                            <h6>Welcome</h6>
                                            <span>Admin</span>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 text-right">
                                        
                                            <form action="<?php echo base_url().'index.php/Welcome/logout';?>"  method="get" >
                                            <button class="default-btn sign-btn" type="submit">
                                                Sign out
                                            </button>
</form>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row mt-2">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php echo base_url().'Welcome/listtourservices';?>" target="_blank">
                                                    <div class="card-body rounded gradient-1">
                                                        <div class="media  align-items-center">
                                                            <img class="mr-3 mt-2" src="<?php echo base_url().'/assets/img/dashborad-icon/1.png';?>" alt="">
                                                            <div class="media-body pl-3">
                                                                <h2>0<?php echo $rowcountservices;?></h2>
                                                                <h6 class="text-uppercase text-white">Services</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php echo base_url().'Welcome/listprojects';?>" target="_blank">
                                                    <div class="card-body rounded gradient-2">
                                                        <div class="media  align-items-center">
                                                            <img class="mr-3 mt-2" src="<?php echo base_url().'/assets/img/dashborad-icon/2.png';?>" alt="">
                                                            <div class="media-body pl-3">
                                                                <h2><?php echo $rowcountprojects;?></h2>
                                                                <h6 class="text-uppercase text-white">Projects</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php echo base_url().'Welcome/teammembers';?>" target="_blank">
                                                    <div class="card-body rounded gradient-3">
                                                        <div class="media  align-items-center">
                                                            <img class="mr-3 mt-2" src="<?php echo base_url().'/assets/img/dashborad-icon/3.png';?>" alt="">
                                                            <div class="media-body pl-3">
                                                                <h2><?php echo $rowteammembers;?></h2>
                                                                <h6 class="text-uppercase text-white">Active Teammembers</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php echo base_url().'Welcome/listcontactenquiries';?>" target="_blank">
                                                    <div class="card-body rounded gradient-4">
                                                        <div class="media  align-items-center">
                                                            <img class="mr-3 mt-2" src="<?php echo base_url().'/assets/img/dashborad-icon/3.png';?>" alt="">
                                                            <div class="media-body pl-3">
                                                                <h2><?php echo $rowcountcontactenquiries;?></h2>
                                                                <h6 class="text-uppercase text-white">Contact Enquiries</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php echo base_url().'Welcome/newslettersubscribers';?>" target="_blank">
                                                    <div class="card-body rounded gradient-5">
                                                        <div class="media  align-items-center">
                                                            <img class="mr-3 mt-2" src="<?php echo base_url().'/assets/img/dashborad-icon/3.png';?>" alt="">
                                                            <div class="media-body pl-3">
                                                                <h2><?php echo $rowcountnewslettersubscribe;?></h2>
                                                                <h6 class="text-uppercase text-white">No of Subscribers</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6" >
                                                <div class="card">
                                                    <a href="<?php echo base_url().'Welcome/listtestimonials';?>" target="_blank">
                                                    <div class="card-body rounded gradient-6">
                                                        <div class="media  align-items-center">
                                                            <img class="mr-3 mt-2" src="<?php echo base_url().'/assets/img/dashborad-icon/4.png';?>" alt="">
                                                            <div class="media-body pl-3">
                                                                <h2><?php echo  $rowcounttest;?></h2>
                                                                <h6 class="text-uppercase text-white">Testimonials</h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row bg-row">
                                    <div class="col-md-5 col-lg-5 pocket-help">
                                        <h2>Ask pocket Friendly for Help 24/7</h2>
                                        <h6>Get In Touch : </h6>
                                      
                                        <div class="number-block"> <a href="tel:+ +<?php echo $resultphone->phoneno;?>"> +<?php echo $resultphone->phoneno;?> </a>  
                                           </div>
                                        </div>
                                  
                                   

                                  
                                
                                </div>

                          </div>

                          
              </div>
                   </div>
              </div>
              </div>
			</div>
		</section>
		<!-- End Sign In Area -->

        <!-- Footer Area -->
        <!--<footer id="footer" class="footer-area-bg">
            <div class="footer-newletter-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="subscribe-area">
                                <h2>News Letter</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                            </div>
                            <div class="newsletter-area">
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL" required autocomplete="off">
                                    <button class="subscribe-btn" type="submit">
                                        Subscribe
                                    </button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="feature-updates-sec">
                            <h2>Feature Update</h2>
                            <div class="footer-service-icon">
                                <div class="row">
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-1.png';?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-2.png';?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-3.png';?>">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'assets/img/footer-4.png';?>">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-single">
                                <div class="footer-single-content">
                                    <a href="#">
                                        <img src="<?php echo base_url().'assets/img/footer-logo.png';?>" alt="Logo">
                                    </a>
                                    <div class="share-icon">
                                        <img src="<?php echo base_url().'assets/img/share-icon.png';?>">
                                    </div>
                                   
                                </div>

                              
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-list ml-50">
                                <h3>About Us</h3>
                              <p>POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>
                              <p class="pt-30 ">POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>

                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <div class="footer-list">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">SEO</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Contact Us</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Terms & Condition</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Privacy & Policy</a>
                                    </li>
                                    <li>
                                        <i class='bx bxs-chevron-right'></i>
                                        <a href="#">Careers</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="footer-list ml-20">
                                <h3>Contact Us</h3>
                                <ul>
                                    <li>
                                        <i class='bx bxs-map'></i>
                                          Dubai,UAE
                                    </li>
                                    <li>
                                        <i class='bx bxs-phone'></i>
                                        <a href="tel:+971 585893348">+971 585893348</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-envelope'></i>
                                        <a href="mailto:info@ifixcomapnyonline">info@ifixcomapnyonline</a>
                                    </li>
                                  
                                    
                                </ul>

                                
                            </div>
                        </div>
                        <div class="copyright-text">
                            <p>
                                Copyrightbypocketfriendlyweb | <script>document.write(new Date().getFullYear())</script>  
                             
                            </p>
                        </div>
                     
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                           <div class="location-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1861009.5379097238!2d53.9485752!3d24.3540069!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x844654cd217aedcf%3A0x3f8604d12a1923c0!2spocketfriendlyweb.com!5e0!3m2!1sen!2sin!4v1690610048272!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>-->
       
        <!--<script src="<?php //echo base_url().'assets/js/jquery.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/meanmenu.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/wow.min.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/form-validator.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/contact-form-script.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/custom.js';?>"></script>-->
        <?php //include('footer1.php');?>
        <?php include('footer.php');?>
    </body>
</html>