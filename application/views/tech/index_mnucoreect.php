<?php 

echo $resulthome->metatag;
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q1GCL7WC8"></script>
<?php $this->db->select('*');
    $this->db->from('googleanalyticscode');
    $query = $this->db->get();
    $gcdt=$query->row();?>


<script>
  
  <?php echo $gcdt->googleanalytics;?>
</script>

       

        <link rel="icon" type="image/png" href="<?php echo base_url().'uploads/logo/'.$siteinf->faviconimg;?>" />
    </head>
    <body>
        <!-- header -->
        <header class="header-area header-three">  
          	
			  <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3">
                                <div class="logo">
                                    <a href="<?php echo base_url().'Techservices/index';?>"><img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="<?php echo $siteinf->alttagimg1;?>"></a>
                                </div>
                            </div>
                           <div class="col-xl-9 col-lg-9">
                              
                                <div class="main-menu ">
                                    <nav id="mobile-menu">
                                        
                                         <?php include('menu.php');?>                                             
                                      
                                    </nav>
                                </div>
                            </div>   
                            <!-- <div class="col-xl-1 col-lg-1 text-right d-none d-lg-block mt-30 mb-30 text-right text-xl-right">
                               
                                
                            </div> -->
                            
                            <div class="col-12">
                                <div class="mobile-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
          <!-- offcanvas-area -->
          <div class="offcanvas-menu">
            <span class="menu-close"><i class="fas fa-times"></i></span>
          <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                            <input type="text" name="s" id="search" value="" placeholder="Search"  />
                            <button><i class="fa fa-search"></i></button>
                        </form>

                
                <div id="cssmenu3" class="menu-one-page-menu-container">
                    <ul id="menu-one-page-menu-2" class="menu">
                    <?php include('mobilemenu.php');?>   
                    </ul>
                </div>  
                
                <div id="cssmenu2" class="menu-one-page-menu-container">
                    <ul id="menu-one-page-menu-1" class="menu">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span><?php echo $contactus->phoneno;?></span></a></li>
                        <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span><?php echo $contactus->emailid;?></span></a></li>
                    </ul>
                </div>                
        </div>
        <div class="offcanvas-overly"></div>
             <!-- offcanvas-end -->
      
        <!-- main-area -->
        <main>
            
            <!-- search-popup -->
		<div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content search-popup">
					<div class="text-center">
						<a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
					</div>
					<div class="row search-outer">
						<div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
						<div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
					</div>
				</div>
			</div>
		</div>
		<!-- /search-popup -->
            <!-- slider-area -->
            <section id="home" class="slider-area slider-four fix p-relative">
               
                <div class="slider-active">
                <?php 
                
                //print_r($result);
                //die;
                
                foreach($result2 as $re){?>
				<div class="single-slider slider-bg d-flex align-items-center" >
                    <div class="image-layer" style="background: url(<?php echo base_url().'uploads/carousel/'.$re['picture'];?>)"></div>
                        <div class="container">
                           <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider-content s-slider-content mb-25">
                                        <h5 data-animation="fadeInDown" data-delay=".4s"><?php echo $re['title'];?></h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo $re['title2'];?></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s"><?php echo $re['title3'];?> </p>
                                        
                                         <div class="slider-btn mt-30">                                          
                                            <a href="#" class="mr-15 call-btn "><i class="fa fa-angle-right"></i> <?php echo $re['title4'];?></a>
                                             
                                        </div>        
                                                              
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
<?php }?>
                    <!--div class="single-slider slider-bg d-flex align-items-center" >
                    <div class="image-layer" style="background: url(<?php echo base_url().'tech/img/slider/home-slier-2.png';?>)"></div>
                        <div class="container">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider-content s-slider-content mb-25">
                                        <h5 data-animation="fadeInDown" data-delay=".4s">Professional</h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s">Technical Service Company</h2>
                                        <p data-animation="fadeInUp" data-delay=".6s">Fusce sollicitudin orci malesuada ligula condimentum, nec interdum orci pharetra. Aliquam scelerisque quam sed augue malesuada tincidunt. </p>
                                        
                                         <div class="slider-btn mt-30">                                          
                                            <a href="#" class="mr-15 call-btn "><i class="fa fa-angle-right"></i> 0987654321</a>
                                             
                                        </div>        
                                                              
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                  
                                </div>
                            </div>
                    </div>
                </div>

                    <div class="single-slider slider-bg d-flex align-items-center" >
                        <div class="image-layer" style="background: url(<?php echo base_url().'tech/img/slider/home-slier-3.png';?>)"></div>
                            <div class="container">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-lg-8 col-md-8">
                                        <div class="slider-content s-slider-content mb-25">
                                            <h5 data-animation="fadeInDown" data-delay=".4s">Professional</h5>
                                             <h2 data-animation="fadeInUp" data-delay=".4s">Technical Service Company</h2>
                                            <p data-animation="fadeInUp" data-delay=".6s">Fusce sollicitudin orci malesuada ligula condimentum, nec interdum orci pharetra. Aliquam scelerisque quam sed augue malesuada tincidunt. </p>
                                            
                                             <div class="slider-btn mt-30">                                          
                                                <a href="#" class="mr-15 call-btn "><i class="fa fa-angle-right"></i> 0987654321</a>
                                                 
                                            </div>        
                                                                  
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                      
                                    </div>
                                </div>
                        </div>
               
                    
                    </div-->
                </div>
               
            </section>
            <!-- slider-area-end -->
            
             
             <!-- features-area -->
            <section id="features-services" class="features-services-area about-p p-relative">
                <div class="container">
                    <div class="row">
                    <?php 
                        
                        
                        foreach($resultdata1 as $res){
                            
                            
                            if ($res['type']==2){
                            
                            ?>
                         <div class="col-lg-3 col-md-12">
                             
                          <div class="features-box mb-30">
                              <div class="features-icon">
                                   <img src="<?php echo base_url().'uploads/projects/'.$res['picture']?>" alt="img">    
                                </div>
                               <div class="features-content">
                                    <h4><a href="#"><?php echo $res['title'] ;?></a></h4>   
                                    <!-- <p>Nam ac vulputate leo. Proin vitae hendrerit mi, quis consequat metu snec quam tincidunt ullam odio.</p> -->
                                </div>
                            </div>   
                             
                         
                        </div>
                        <?php }}?>
                       <!--div class="col-lg-3 col-md-12">
                             
                          <div class="features-box mb-30">
                              <div class="features-icon">
                                   <img src="<?php //echo base_url().'tech/img/icon/se-icon2.png';?>" alt="img">    
                                </div>
                               <div class="features-content">
                                      <h4><a href="#">Spare Part</a></h4>   
                                   
                                </div>
                            </div>   
                             
                         
                        </div>
                        <div class="col-lg-3 col-md-12">
                             
                          <div class="features-box mb-30">
                              <div class="features-icon">
                                   <img src="<?php //echo base_url().'tech/img/icon/se-icon3.png';?>" alt="img">    
                                </div>
                               <div class="features-content">
                                      <h4><a href="#">Maintenance</a></h4>   
                                   
                                </div>
                            </div>   
                             
                         
                        </div>
                       <div class="col-lg-3 col-md-12">
                             
                          <div class="features-box mb-30">
                              <div class="features-icon">
                                   <img src="<?php //echo base_url().'tech/img/icon/se-icon4.png';?>" alt="img">    
                                </div>
                               <div class="features-content">
                                     <h4><a href="#">Insulation</a></h4>   
                                  
                                </div>
                            </div>   
                             
                         
                        </div-->
                        
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

              <!-- brand-area -->
              <div class="brand-area pt-60 pb-60" style="background: url(<?php echo base_url().'tech/img/bg/service-bg.png';?>) no-repeat;background-size: cover;">
                <div class="container">
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span>  PARTNER <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                              
                                <h2>
                                    We assure you quality services 
                                </h2>
                             
                            </div>
                          
                           
                        </div>
                         
                    </div>
                    <div class="row brand-active">
                    <?php 
                        
                        
                        foreach($resultdata1 as $res){
                            
                            
                            if ($res['type']==1){
                            
                            ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="<?php echo base_url().'uploads/projects/'.$res['picture']?>" alt="img">
                            </div>
                        </div>
                        <?php } } ?>
                       <!--div class="col-xl-2">
                            <div class="single-brand">
                                     <img src="<?php //echo base_url().'tech/img/brand/b-logo2.png';?>" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="<?php //echo base_url().'tech/img/brand/b-logo3.png';?>" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                  <img src="<?php //echo base_url().'tech/img/brand/b-logo4.png';?>" alt="img">
                            </div>
                        </div>
                         <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="<?php //echo base_url().'tech/img/brand/b-logo2.png';?>" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                 <img src="<?php //echo base_url().'tech/img/brand/b-logo1.png';?>" alt="img">
                            </div>
                        </div-->
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->
            
             <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg1;?>"   alt="<?php echo $resulthome->alttagimg1;?>">    
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> ABOUT US</h5>
                                    <h2>ABOUT US</h2>
                                    
                                   
                                </div>
                                
                                <p>Vestibulum tristique ante sit amet fringilla pulvinar. Maecenas vitae placerat augue. Donec turpis nunc, pulvinar vel sodales eget, convallis nec odio. Donec nec quam tincidunt, gravida sem ac, malesuada libero.</p>
                                <ul class="mt-30 mb-30">
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p>Praesent erat mauris, euismod vel accumsan at, porta nec neque.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p>Praesent erat mauris, euismod vel accumsan at, porta nec neque.</p>
                                    </div>
                                </li>
                                      <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p>Praesent erat mauris, euismod vel accumsan at, porta nec neque.</p>
                                    </div>
                                </li>
                               
                            </ul>
                              <div class="slider-btn">                                          
                                            <a href="<?php echo base_url().'Techservices/about';?>" class="btn ss-btn"> More About</a>					
                                        </div>
                      
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
              <!-- services-area -->          
            <section id="services-area2" class="services-area2 pt-120 pb-90 fix" style="background: url(<?php echo base_url().'tech/img/bg/service-bg.png';?>) no-repeat;background-size: cover;">
                <div class="container">
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> Our Services <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                                <h2>
                                 Our Trusted Services
                                </h2>
                             
                            </div>
                           
                        </div>
                         
                    </div>
                    <!-- <div class="row home-blog-active"> -->
                        <div class="row"> 


                        <?php 
                        
                        
                        foreach($resultdata as $res){?>
                       <div class="col-lg-4 col-md-6">
                             
                         
                          <div class="services-box2 mb-30">
                              <div class="services-img">
                                 <img src="<?php echo base_url().'uploads/tour/'.$res['picture']?>" alt="circle_right">
                                </div>
                                <div class="services-content2">
                                    <h3><a href="<?php echo base_url().'Techservices/servicedetails';?>"><?php echo $res['title'];?></a></h3>   
                                    <p><?php echo $res['description1'];?></p>
                                    <div class="slider-btn mt-15">                                          
                                        <a href=<?php echo base_url().'Techservices/servicedetails';?>" class="btn ss-btn">View More</a>					
                                    </div>
                                </div>
                                    
                              
                            </div>   

                           
                             
                         
                        </div>
                        <?php } ?>



                        <!--div class="col-lg-4 col-md-6">
                             
                         
                          <div class="services-box2 mb-30">
                              <div class="services-img">
                                 <img src="<?php echo base_url().'tech/img/services/services-img2.png';?>" alt="circle_right">
                                </div>
                                <div class="services-content2">
                                    <h3><a href="service.html">Marble Polishing</a></h3>   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="slider-btn mt-15">                                          
                                        <a href="service.html" class="btn ss-btn">View More</a>					
                                    </div>
                                </div>
                            </div>   
                                
                             
                         
                        </div>
                         
                          <div class="col-lg-4 col-md-6">
                             
                         
                          <div class="services-box2 mb-30">
                              <div class="services-img">
                                 <img src="<?php echo base_url().'tech/img/services/services-img3.png';?>" alt="circle_right">
                                </div>
                                <div class="services-content2">
                                    <h3><a href="service.html">Marble Polishing</a></h3>   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="slider-btn mt-15">                                          
                                        <a href="service.html" class="btn ss-btn">View More</a>					
                                    </div>
                                </div>
                            </div>   
                                
                             
                         
                        </div>
                          <div class="col-lg-4 col-md-6">
                             
                         
                          <div class="services-box2 mb-30">
                              <div class="services-img">
                                 <img src="<?php echo base_url().'tech/img/services/services-img2.png';?>" alt="circle_right">
                                </div>
                                <div class="services-content2">
                                    <h3><a href="service.html">Marble Polishing</a></h3>   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="slider-btn mt-15">                                          
                                        <a href="service.html" class="btn ss-btn">View More</a>					
                                    </div>
                                </div>
                            </div>   
                                
                             
                         
                        </div>

                        <div class="col-lg-4 col-md-6">
                             
                         
                            <div class="services-box2 mb-30">
                                <div class="services-img">
                                   <img src="<?php echo base_url().'tech/img/services/services-img2.png';?>" alt="circle_right">
                                  </div>
                                  <div class="services-content2">
                                    <h3><a href="service.html">Marble Polishing</a></h3>   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="slider-btn mt-15">                                          
                                        <a href="service.html" class="btn ss-btn">View More</a>					
                                    </div>
                                </div>
                              </div>   
                                   
                                  
                               
                           
                          </div>

                          <div class="col-lg-4 col-md-6">
                             
                         
                            <div class="services-box2 mb-30">
                                <div class="services-img">
                                   <img src="<?php echo base_url().'tech/img/services/services-img2.png';?>" alt="circle_right">
                                  </div>
                                  <div class="services-content2">
                                    <h3><a href="service.html">Marble Polishing</a></h3>   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    <div class="slider-btn mt-15">                                          
                                        <a href="service.html" class="btn ss-btn">View More</a>					
                                    </div>
                                </div>
                              </div>   
                                  
                               
                           
                          </div-->
                         
                        
                      
                        
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
            
              <!-- booking-area -->
            <section id="booking" class="booking-area contact-bg pt-120 pb-120 p-relative fix" style="background: url(<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg2;?>) no-repeat;background-size: cover;">
              
                <div class="container">
             
					<div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="booking-contact-box">
                                
                                <h3>Schedule Discussion</h3>

                                <div class="tab-content">
                                  <div id="home3" class="tab-pane fade show active">
                                    <form action="mail.php" method="post" class="contact-form mt-30">
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-field p-relative c-name mb-30">    
                                                    <label class="formLabel">First Name</label>                                
                                                    <input type="text" id="firstn" name="firstn" class="form-control" required>
                                                </div>                               
                                            </div>

                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-30">                                   
                                                    <label class="formLabel">Last Name</label>    
                                                    <input type="text" id="email" name="email" placeholder="Eamil" class="form-control" required>
                                                </div>
                                            </div>		
                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-30">                                   
                                                    <label class="formLabel">Phone Number</label>    
                                                    <input type="text" id="phone" name="phone" placeholder="Phone No." class="form-control" required >
                                                </div>
                                            </div>	
                                            <div class="col-lg-6">                               
                                                <div class="contact-field p-relative c-option mb-30">    
                                                    <label class="formLabel">Type Service</label>                                  
                                                    <select name="services" id="sr" class="form-control">
                                                        <option value="sports-massage">Service</option>
                                                      <option value="sports-massage">Service 01</option>
                                                      <option value="hot-stone-message">Service 02</option>
                                                      <option value="facil-therophy">Service 03</option>
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="col-lg-6">                               
                                                <div class="contact-field p-relative c-option mb-30">
                                                    <label class="formLabel">Location</label>                                     
                                                    <select name="services" id="dr" class="form-control">
                                                         <option value="sports-massage">Location</option>
                                                      <option value="sports-massage">Location 01</option>
                                                      <option value="hot-stone-message">Location 02</option>
                                                      <option value="facil-therophy">Location 03</option>
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-option mb-30">  
                                                    <label class="formLabel">Message</label>                                     
                                                    <textarea id="w3review" name="w3review" rows="4" cols="50">
                                                        </textarea>
                                                </div>
                                            </div>
                                               
                                            <div class="col-lg-12">
                                              
                                                <div class="slider-btn">                                          
                                                            <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submit Now</button>				
                                                        </div>                             
                                            </div>
                                            </div>

                                    </form>  
                                    </div>
                                      <div id="menu1" class="tab-pane fade">
                                         <form action="#" method="post" class="contact-form mt-30">
                                                <div class="row">
                                                <div class="col-lg-12">                               
                                                    <div class="contact-field p-relative c-option mb-15">                                   
                                                        <select name="services" id="pr" class="form-control">
                                                             <option value="sports-massage">Prsonal Data</option>
                                                          <option value="sports-massage">Sports Massage</option>
                                                          <option value="hot-stone-message">Hot Stone Message</option>
                                                          <option value="facil-therophy">Facil & Therophy</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="contact-field p-relative c-message mb-30">                                  
                                                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Tracking Number"></textarea>
                                                    </div>
                                                    <div class="slider-btn">                                          
                                                                <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submit Now</button>				
                                                            </div>                             
                                                </div>
                                                </div>

                                        </form>  
                                      </div>

                                    </div>
                            
                            </div>
                        
						</div>
                        <div class="col-lg-6 col-md-12">
                             <div class="booking-content-box">
                            <div class="section-title second-title pb-25">  
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_left_w.png';?>" alt="circle_right"></span> request A Quote</h5>
                                    <h2>Talk to us about your project </h2>
                                    
                                   
                                </div>
                                <div class="our-contact-details-area">
                                    <div class="about-right-mail">
                                        <div class="mail-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content-area d-flex">
                                            <div class="icon-sec call-icon">
                                                <img src="<?php echo base_url().'tech/img/icon/call-icon.png';?>">
                                            </div>
                                            <div class="icon-content">
                                               <h6><?php echo $contactus->phoneno;?></h6>
                                               <h6><?php echo $contactus->phoneno;?></h6>
                                            </div>
                                        </div>

                                        <div class="content-area d-flex">
                                            <div class="icon-sec call-icon">
                                                <img src="<?php echo base_url().'tech/img/icon/printer.png';?>">
                                            </div>
                                            <div class="icon-content">
                                               <h6><?php echo $contactus->lanno;?></h6>
                                               <h6><?php echo $contactus->lanno;?></h6>
                                            </div>
                                        </div>

                                        <div class="content-area d-flex">
                                            <div class="icon-sec call-icon">
                                                <img src="<?php echo base_url().'tech/img/icon/email.png';?>">
                                            </div>
                                            <div class="icon-content">
                                               <h6><?php echo $contactus->emailid;?></h6>
                                               <h6><?php echo $contactus->emailid;?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                       
                        
					</div>
                    
                </div>
               
            </section>
            <!-- booking-area-end -->
            
            
            <!-- skill-area -->
            <section id="skill" class="skill-area p-relative" style="background: url(<?php echo base_url().'tech/img/bg/service-bg.png';?>) no-repeat;background-size: cover;">
                <div class="container">
                    <div class="row">
                         <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                           <div class="left-img-area">
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->serviceimg;?>"   alt="<?php echo $resulthome->alttagimg1;?>" />
                           </div>
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="skills-content s-about-content">
                                <div class="skills-title pb-20">            
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> WHY CHOOSE US </h5>                      
                                    <h2>We offer the perfect Solution </h2>                                  
                                </div>
                                <div class="circle-area">
                                    <div class="box-line">
                                        <div class="icon-area">
                                            <img src="<?php echo base_url().'tech/img/icon/left-icon.png';?>" alt="img">
                                        </div>
                                        <div class="icon-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                        </div>
                                    </div>
                                    <div class="box-line">
                                        <div class="icon-area">
                                            <img src="<?php echo base_url().'tech/img/icon/left-icon.png';?>" alt="img">
                                        </div>
                                        <div class="icon-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                        </div>
                                    </div>
                                    <div class="box-line">
                                        <div class="icon-area">
                                            <img src="<?php echo base_url().'tech/img/icon/left-icon.png';?>" alt="img">
                                        </div>
                                        <div class="icon-content">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                     
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="get-us-more">
                                <div class="counter-area">
                                    <div class="row p-relative">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <div class="counter-heading">
                                                <h2>Get to know Us More</h2>
                                                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit</P>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                                        <div class="counter p-relative">
                                                            <span class="count">8</span><small>+</small>                                   
                                                            <p>World Wide Branch</p>
                                                        </div>
                                                    </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                                        <div class="counter p-relative">
                                                           <span class="count">150</span><small>+</small>     
                                                              <p>Mordern Transport</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                                        <div class="counter p-relative">
                                                            <span class="count">250</span><small>+</small>     
                                                        <p>Awards Winning</p>
                                                        </div>
                                                    </div>
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
            <!-- skill-area-end -->
            
             
            <!-- team-area -->
            <section id="team" class="team-area2 pt-120 pb-90" >            
                <div class="container">  
                    <div class="row">   
                        <div class="col-lg-12 p-relative">
                           <div class="section-title center-align mb-50 text-center">
                                 <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> Project <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                                <h2>
                                Our Project
                                </h2>
                             
                            </div>
                        </div>                        
                         
                    </div>

                    <div class="row">
                    <?php 
                        
                        $k=0;
                        foreach($resultdata1 as $res){
                            if ($res['type']==0){
                            if ($k==0){
                            ?>
                        <div class="col-lg-8 col-md-8 pad-right">
                            <div class="gallery-box">
                                <img src="<?php echo base_url().'uploads/projects/'.$res['picture']?>"/>
                            </div>
                        </div>
                        <?php } else {?>
                        <div class="col-lg-4 col-md-4 pad-right">
                            <div class="gallery-box">
                                <img src="<?php echo base_url().'uploads/projects/'.$res['picture']?>"/>
                            </div>
                        </div>
                        <?php } 
                        
                        $k++;
                        ?>
                    
                    
                    
                    <?php } }?>
                        <!--div class="col-lg-4 col-md-4 pad-right">
                            <div class="gallery-box">
                                <img src="<?php //echo base_url().'tech//img/gallery/protfolio-img03.png';?>"/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pad-right">
                            <div class="gallery-box">
                                <img src="<?php //echo base_url().'tech//img/gallery/protfolio-img04.png';?>"/>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 pad-right">
                            <div class="gallery-box">
                                <img src="<?php //echo base_url().'tech/img/gallery/protfolio-img05.png';?>"/>
                            </div>
                        </div-->
                    </div>
                   
                        
                   
                    </div>
                        
                   
                </div>
            </section>
            <!-- team-area-end -->              
       
             
              <!-- testimonial-area -->
            <section class="testimonial-area pt-120 pb-90" style="background: url(<?php echo base_url().'tech/img/bg/service-bg.png';?>) no-repeat;background-size: cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> Feedback <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                              
                                <h2>
                                  Our Testimonials
                                </h2>
                             
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                            <?php foreach($resulttest as $test){?>
                                <div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="<?php echo base_url().'uploads/testimonial/'.$test['image'];?>" alt="img">
                                        <div class="ta-info">
                                            <h6><?php echo $test['name'];?></h6>
                                            <span><?php echo $test['place'];?></span>
                                        </div>
                                    </div>
                                    <p> <?php echo $test['testimonial'];?></p>
                                    
                                    <div class="qt-img">
                                    <img src="<?php echo base_url().'tech/img/testimonial/qt-icon.png';?>" alt="img">
                                    </div>
                                </div>
                                <?php } ?>
                                <!--div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="<?php echo base_url().'tech/img/testimonial/testi_avatar.png';?>" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                   
                                     <div class="qt-img">
                                    <img src="<?php echo base_url().'tech/img/testimonial/qt-icon.png';?>" alt="img">
                                    </div>
                                </div>
                               <div class="single-testimonial">
                                <div class="testi-author">
                                    <img src="<?php echo base_url().'tech/img/testimonial/testi_avatar.png';?>" alt="img">
                                    <div class="ta-info">
                                        <h6>Oliver Dummer</h6>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                                   <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                 
                                     <div class="qt-img">
                                    <img src="<?php echo base_url().'tech/img/testimonial/qt-icon.png';?>" alt="img">
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="<?php echo base_url().'tech/img/testimonial/testi_avatar.png';?>" alt="img">
                                        <div class="ta-info">
                                            <h6>Margie R. Robinson</h6>
                                            <span>Web Developer</span>
                                        </div>
                                    </div>
                                  <p>Praesent nec elit imperdiet, tincidunt ex at, malesuada lectus. Praesent cursus diam risus, non accumsan neque fermentum eget. Maecenas vel aliquam enim aliquam aliquet finibus nisl.</p>
                                    
                                     <div class="qt-img">
                                    <img src="<?php echo base_url().'tech/img/testimonial/qt-icon.png';?>" alt="img">
                                    </div>
                                </div-->
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            
                 <!-- team-area -->
            <section id="team" class="team-area2 pt-120 pb-90" >            
                <div class="container">  
                    <div class="row">   
                        <div class="col-lg-6 col-md-6 p-relative">
                          <div class="left-img">
                            <img src="<?php echo base_url().'uploads/homepage/'.$resulthome->homepageimg4;?>"   alt="<?php echo $resulthome->alttagimg4;?>" />
                          </div>
                        </div>  
                        <div class="col-lg-6 col-md-6">
                            <div class="left-newsletter mb-30">
                                <h2 class="mb-25">NEWSLETTER</h2>
                                <p><?php echo $newsletter->newsletterdescription;?></p>
                                <div class="newslater-area">
                                    <form name="ajax-form" id="contact-form4" action="<?php echo base_url().'Techservices/newslettersubscribe';?>" method="post"  class="contact-form newslater">
                                   <div class="form-group p-relative">
                                      <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" > 
                                      <button type="submit" class="btn btn-custom" id="send2"><i class="fal fa-angle-double-right"></i></button>
                                   </div>
                                   <span id="newsmsg" style='bottom:51px;color:green;font-weight:bold;'></span>
                                   <!-- /Form-email -->	
                                </form>
                                 </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            </section>
            <!-- team-area-end -->   
           
			
         
        </main>
        <!-- main-area-end -->
        <!-- footer -->
       <?php include('footer.php');?>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

       <script>

$('form[id="contact-form4"]').validate({  
rules: {  
email: 'required',  
 
},  
messages: {  
email: 'Please enter your emailid',  

},  
submitHandler: function(form) { 


    $.ajax({
url: form.action,
type: form.method,
data: $(form).serialize(),
success: function(response) {
$('input[type=text]').each(function() {
$(this).val('');
});

$('#email2').val('');

$('#newsmsg').html(response);
}            
});		
}





//form.submit();  
// }  
});  
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>


<script>

$('form[id="frmcontact"]').validate({  
rules: {  
first_name: 'required',
last_name: 'required',    
subject: 'required',
phone:'required',  
email: {  
required: true,  
email: true,  
}, 
message:"required",
subject:"required",  
/*psword: {  
required: true,  
minlength: 8,  
}*/  
},  
messages: {  
first_name: 'First Name is required', 
last_name: 'Last Name is required',   
subject: 'Type Service is required',  
phone: 'Enter a valid Phone',
email: 'Enter a valid Email', 
location: 'Location is required',   
/*psword: {  
minlength: 'Password must be at least 8 characters long'  
} */
message:'Please enter Comments' 
},  
submitHandler: function(form) { 
// form.preventDefault();
/* $.ajax({
        url: contactForm1.attr('action'),
        type: 'post',
        data: contactForm1.serialize(),
        success: function(response){
            
            
            $('input[type=text]').each(function() {
$(this).val('');
});

$("#email").val('');
            $("#msg").html(response);
           

        }
    });*/

    $.ajax({
url: form.action,
type: form.method,
data: $(form).serialize(),
success: function(response) {
$('input[type=text]').each(function() {
$(this).val('');
});

$("#email").val('');
$("#message").val('');

$('#msg').html(response);
}            
});		
}





//form.submit();  
// }  
});  
</script>















    </body>
</html>