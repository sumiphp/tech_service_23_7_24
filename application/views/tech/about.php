<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>

<?php 

echo $about->metatag;
?>
<?php } else { 
    
    echo $about->metatagar;
    
   


     } ?>
<!--script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q1GCL7WC8"></script-->
<?php $this->db->select('*');
    $this->db->from('googleanalyticscode');
    $query = $this->db->get();
    $gcdt=$query->row();?>



<?php echo htmlspecialchars_decode($gcdt->googleanalytics); ?>




<link rel="icon" type="image/png" href="<?php echo base_url().'uploads/logo/'.$siteinf->faviconimg;?>" alt="<?php echo $siteinf->alttagimg1;?>" />
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
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <a href="<?php echo base_url().'index/en/';?>"><img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="<?php echo $siteinf->alttagimg1;?>"></a>
                                <?php } else { ?>
                                    <a href="<?php echo base_url().'index/ar/';?>"><img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="<?php echo $siteinf->alttagimg1;?>"></a>
                                    <?php } ?>
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
                                <a href="#" class="btn ss-btn mr-15" tabindex="0">Read More</a>
                                
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
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url().'uploads/aboutus/'.$about->aboutusbanner;?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <h2><?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?><?php 

echo $about->title;
?> <?php } else { ?> <?php 

    echo $about->titlear;
    ?> <?php } ?></h2>    
                                  

<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> <p><?php 

echo $about->aboutcompany;
?></p> <?php } else { ?><p> <?php 

    echo $about->aboutcompanyarabic;
    ?> </p><?php } ?>



                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?><a href="<?php echo base_url().'index/en';?>"> Home <?php } else {?><a href="<?php echo base_url().'index/ar';?>"> بيت <?php } ?></a></li>
                                        <li class="breadcrumb-item active" aria-current="page"> <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?><?php 

echo $about->title;
?> <?php } else { ?> <?php 

    echo $about->titlear;
    ?> <?php } ?></li>
                                    </ol>
                                </nav>
                            </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            
             
         

             
            
             <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
                <div class="container">
                    <div class="row bg-area-sec">
                        <div class="col-lg-6 col-md-6 col-sm-6 pleft-0">
                            <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                <img src="<?php echo base_url().'tech/img/about/about.png';?>" alt="img">    
                            </div>
                        </div>
                        
					       <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25">  
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span>   <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                    <?php 

echo $about->title;
?>
                                    <?php  } else { 
                                        
                                        echo $about->titlear;
                                        
                                        ?>


                                        <?php } ?></h5>
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                    <h2><?php 

echo $about->title;
?></h2>
                                    <?php  } else { 
                                        
                                        echo "<h2>".$about->titlear."</h2>";
                                        
                                        ?>


                                        <?php } ?>
                                   
                                </div>

                                <p>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>    
                                    
                                    <?php 

echo $about->aboutusshortdesc;
?>

<?php } else { ?>


    <?php 

echo $about->aboutusshortdescar;
?>


    <?php } ?>


</p>
                                <ul class="mt-30 mb-30">
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">

                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                        <p><?php 

echo $about->title2;
?></p>
  <?php } else {?>
    <?php 

echo $about->title2ar;
?>

    <?php } ?>




                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">

                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 

                                        <p><?php 

echo $about->title3;
?></p>

<?php } else {?>
    <p>
    <?php 

echo $about->title3ar;
?></p>

    <?php } ?>

                                    </div>
                                </li>
                                      <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">

                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                        <p><?php 

echo $about->title4;
?></p>


<?php } else {?>
    <p>
    <?php 

echo $about->title4ar;
?></p>

    <?php } ?>
                                    </div>
                                </li>
                               
                                   </ul>

                                   <div class="welcome-one__btn-call-box">
                                
                                    <li>
                                        <div class="icon"><img src="<?php echo base_url().'tech/img/about/call-icon.png';?>" alt="call" /> </div>
                                        <div class="text mr-15">
                                            <p> <?php echo $contactus->phoneno;?> </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="<?php echo base_url().'tech/img/about/email-icon.png';?>" alt="email" /> </div>
                                        <div class="text">
                                            <p> <?php echo $contactus->emailid;?></p>
                                        </div>
                                    </li>
                                </div>
                             
                      
                            </div>
                        </div>
                     
                    </div>

                    <div class="row pt-70">
                        <div class="col-lg-6  col-md-6">
                            <div class="vision-msg d-flex w-100">
                                <img src="<?php echo base_url().'uploads/aboutus/'.$about->visionlogo;?>"/>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                <h4 class="title-sec">Our Vision</h4>
                                <?php } else { ?>
                                رؤيتنا
                                <?php } ?>
                            </div>
                            <div class="vision-content">
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>    
                                <p><?php echo $about->vision;?> </p>

                                <?php } else { ?>

                                    <p><?php echo $about->visionar;?> </p>
                                    <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-6  col-md-6">
                            <div class="vision-msg d-flex w-100">
                                <img src="<?php echo base_url().'uploads/aboutus/'.$about->missionlogo;?>"/>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>    
                                <h4 class="title-sec">Our Mission</h4>
                                <?php } else { ?>

                                    <p>مهمتنا</p>
                            
                                <?php } ?>
                            </div>
                            <div class="vision-content">
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>    
                                <p><?php echo $about->mission;?></p>
                                <?php } else { ?>

                                    <p><?php echo $about->missionar;?> </p>
                                    <?php } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- about-area-end -->
          
            
              <!-- booking-area -->
            <!--section id="booking" class="booking-area our-booking pt-120 pb-120 p-relative fix" style="background: url(<?php echo base_url().'tech/img/bg/booking-bg.png';?>) no-repeat;background-size: cover;">
              
                <div class="container">
                    <div class="section-title second-title pb-25">
                    <?php //if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>      
                        <h2>Our Team Members </h2>  <?php //} else { ?>

                        <h2> أعضاء فريقنا </h2>
                        <?php //} ?>
                        
                       
                    </div>
					<div class="row">
                    <?php 
                        
                        
                       // foreach($resultdata as $res){?>
                        <div class="col-lg-3 col-md-3">
                              <div class="flip-card mb-30">
                              <div class="flip-card-inner">
                                <div class="flip-card-front">
                                   <img src="<?php //echo base_url().'uploads/teammembers/'.$res['picture']?>" alt="img">
                                </div>
                                <div class="flip-card-back">
                                  <div class="mt-80">
                                  <?php //if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>    
                                        <h4><a href="#"><?php echo $res['name'];?></a></h4>
                                        <span><?php echo $res['designation'];?></span>
                                        <?php //} else { ?>
                                            <h4><a href="#"><?php echo $res['namear'];?></a></h4>
                                        <span><?php //echo $res['designationar'];?></span>


                                            <?php //} ?>
                                      <div class="social">
                                     <a href="<?php //echo $res['facebook'];?>"><i class="fab fa-facebook-f"></i></a>
                                            <a href="<?php //echo $res['twitter'];?>"><i class="fab fa-twitter"></i></a>
                                            <a href="<?php //echo $res['instagram'];?>"><i class="fab fa-behance"></i></a>
                                            <a href="<?php //echo $res['youtube'];?>"><i class="fab fa-youtube"></i></a>                            
                                      </div>
                                    </div>
                                </div>
                              </div>
                            </div> 
                        </div>
                        <?php //} ?>

                       
                        </div>
                       
                        
                 					
               
                     
                        
                    </div>
                    
                </div>
               
            </section-->
         
        </main>
      

        <?php include('footer.php');?>
       
    </body>
</html>