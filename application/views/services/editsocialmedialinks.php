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
                                <h2>Edit Social Media Links </h2>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <h5>Social Media Links </h5>
                                                    <form  id="editsiteinf" class="rounded-form" method="post" action="<?php echo base_url().'Welcome/socialmedialinksprocess';?>" enctype="multipart/form-data" >
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Whatsuplink</label>
                                                                <input class="form-control" placeholder="Enter Whatsuplink Link" name="whatsuplink" type="text" data-bs-original-title="" title=""  value="<?php echo $result->whatsuplink;?>"><span class="text-danger" ></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Linkldn link</label>
                                                                <input class="form-control" placeholder="Enter Linkldn link" name="linkldn" type="text"  value="<?php echo $result->linkldn;?>" data-bs-original-title="" title=""><span class="text-danger"></span>
                                                              </div>
                                                            </div>
                                                          </div>
                                                          <!--<div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a><a class="btn btn-secondary" data-bs-original-title="" title="">Update</a></div>
                                                          </div>-->
                                                        </div>

                                                        <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Instagram Link</label>
                                                                <input class="form-control" placeholder="Enter Instagram Link" type="text" id="instagram" name="instagram"   value="<?php echo $result->instagram;?>" data-bs-original-title="" title=""><span class="text-danger" ></span>
                                                                <!--<img src="<?php //echo base_url().'uploads/logo/'.$result->facebook;?>" width="50" height="50" />-->

                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Right bottom Locationlink</label>
                                                                <input class="form-control" placeholder="Enter Right bottom Whatsuplink" type="text" id="loclink" name="loclink"   value="<?php echo $result->locationlink;?>" data-bs-original-title="" title=""><span class="text-danger" ></span>
                                                                <!--<img src="<?php //echo base_url().'uploads/logo/'.$result->facebook;?>" width="50" height="50" />-->

                                                              </div>
                                                            </div>
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
                                                    <h5>Social Media Links </h5>
                                                   
                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Youtube Link</label>
                                                                <input class="form-control" placeholder="Enter youtube Link" type="text" data-bs-original-title="" title="" id="youtube" name="youtube"  value="<?php echo $result->youtube;?>" ><span class="text-danger" ></span>
                                                                <!--<img src="<?php //echo base_url().'uploads/logo/'.$result->youtube;?>" width="50" height="50" />-->

                                                              </div>
                                                            </div>
                                                          </div>
                                                         
                                                          <!--<div class="row">
                                                            <div class="col-sm-12 text-end"><a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a>  <button type="submit" class="btn btn-primary" id="uploadser" >Update</button></div>
                                                          </div>
                                                        </div>-->

                                                        <div class="product-group">
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Twitter Link</label>
                                                                <input class="form-control" placeholder="Enter twitter Link" type="text" data-bs-original-title="" title="" id="twitter" name="twitter"  value="<?php echo $result->twitter;?>" ><span class="text-danger" ></span>
                                                                <!--<img src="<?php //echo base_url().'uploads/logo/'.$result->youtube;?>" width="50" height="50" />-->

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Facebook Link</label>
                                                                <input class="form-control" placeholder="Enter Facebook Link" type="text" id="facebook" name="facebook"   value="<?php echo $result->facebook;?>" data-bs-original-title="" title=""><span class="text-danger" ></span>
                                                                <!--<img src="<?php //echo base_url().'uploads/logo/'.$result->facebook;?>" width="50" height="50" />-->

                                                              </div>
                                                            </div>
                                                          </div>
                                                          <div class="row"> 
                                                            <div class="col-sm-12">
                                                              <div class="mb-3">
                                                                <label class="form-label">Right bottom Whatsuplink</label>
                                                                <input class="form-control" placeholder="Enter Right bottom Whatsuplink" type="text" id="wplink" name="wplink"   value="<?php echo $result->calllnk;?>" data-bs-original-title="" title=""><span class="text-danger" ></span>
                                                                <!--<img src="<?php //echo base_url().'uploads/logo/'.$result->facebook;?>" width="50" height="50" />-->

                                                              </div>
                                                            </div>
                                                          </div>
                                                          

                                                        


                                                      

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                              
                                










                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                            <div class="mb-3">
                                                          
                                                          <label for="address" class="form-label text-primary">Meta Tag Product Page:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tag"><?php echo $result->metatag;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Product Inner Page:</label>
                                                          <textarea class="form-control" id="metatag1" name="metatag1" rows="20" placeholder="Enter Meta Tag1"><?php echo $result->metatag1;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag 404:</label>
                                                          <textarea class="form-control" id="metatag2" name="metatag2" rows="20" placeholder="Enter Meta Tag2"><?php echo $result->metatag2;?></textarea>
                                                      </div>

                                                      <div class="col-sm-12 text-end"><!--<a class="btn btn-primary me-3" href="#" data-bs-original-title="" title="">ADD </a>-->  <button type="submit" class="btn btn-primary" id="uploadser" >Update</button></div>
                                                          </div>


                                            </div>
                                        </div>
                                    </div>
                    
                                    </form>
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