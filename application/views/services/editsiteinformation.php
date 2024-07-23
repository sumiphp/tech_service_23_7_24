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
                     
                 <!-- ======= Sidebar ======= -->
                 <?php include_once("sidebar.php");?>     

                <div class="dashboard-innerbox">
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit Site Information </h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <h5>Primary Information</h5>
                                                    <form  id="editsiteinf" class="rounded-form" method="post" action="<?php echo base_url().'Welcome/siteinfeditprocess';?>" enctype="multipart/form-data" >
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Name</label>
                                                                <input class="form-control" placeholder="Enter Site Name" name="sitename" type="text" data-bs-original-title="" title=""  value="<?php echo $result->sitename;?>"><span class="text-danger" ></span>
                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Name Arabic</label>
                                                                <input class="form-control" placeholder="Enter Site Name Arabic" name="sitenamear" type="text" data-bs-original-title="" title=""  value="<?php echo $result->sitenamear;?>"><span class="text-danger" ></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Description</label>
                                                                <input class="form-control" placeholder="Enter Site Description" name="sitedescription" type="text"  value="<?php echo $result->sitedescription;?>" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Description  Arabic</label>
                                                                <input class="form-control" placeholder="Enter Site Description  Arabic" name="sitedescriptionar" type="text"  value="<?php echo $result->sitedescriptionar;?>" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>



                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Title</label>
                                                                <input class="form-control" placeholder="Enter Site Title" name="sitetitle" type="text" data-bs-original-title="" title=""  value="<?php echo $result->sitetitle;?>"><span class="text-danger" ></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <!--<div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a><a class="btn btn-secondary" data-bs-original-title="" title="">Update</a></div>
                                                          </div>-->
                                                        </div>


                                                    




                                                      <!--</form>-->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <h5>Logo & Favicon</h5>
                                                    <form>
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Logo</label>
                                                                <input class="form-control" placeholder="Enter Logo" type="file" data-bs-original-title="" title="" id="image1" name="image1" ><span class="text-danger" ></span>
                                                                <img src="<?php echo base_url().'uploads/logo/'.$result->logoimg;?>" width="50" height="50" />

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Favicon</label>
                                                                <input class="form-control" placeholder="Enter Favicon" type="file" id="image2" name="image2"  data-bs-original-title="" title=""><span class="text-danger" ></span>
                                                                <img src="<?php echo base_url().'uploads/logo/'.$result->faviconimg;?>" width="50" height="50" />

                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Site Title Arabic</label>
                                                                <input class="form-control" placeholder="Enter Site Title" name="sitetitlear" type="text" data-bs-original-title="" title=""  value="<?php echo $result->sitetitlear;?>"><span class="text-danger" ></span>
                                                              </div>
                                                            </div>
                                                          </div>


                                                          <div class="row">
                                                            <div class="col-sm-12 text-end"><!--<a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a>-->  <button type="submit" class="btn btn-primary" id="uploadser" >Update</button></div>
                                                          </div>
                                                        </div>
                                                      </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                           
                                <div class="row bg-row">
                                    <div class="col-md-5 col-lg-5 pocket-help">
                                        <h2>Ask pocket Friendly for Help 24/7</h2>
                                        <h6>Get In Touch : </h6>
                                      
                                        <div class="number-block"> <a href="tel:+ +971 585893348"> +<?php echo $contactus->phoneno;?> </a>  
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
                                        <img src="assets/img/footer-1.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-2.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-3.png">
                                    </div>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="assets/img/footer-4.png">
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
                                        <img src="assets/img/footer-logo.png" alt="Logo">
                                    </a>
                                    <div class="share-icon">
                                        <img src="assets/img/share-icon.png">
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
            </div>-->

            <?php //include('footer1.php');?>
        <?php include('footer.php');?>