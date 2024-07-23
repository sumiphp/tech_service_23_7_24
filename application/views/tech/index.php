<?php 
if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
echo $resulthome->metatag;
}
else{
    echo $resulthome->metatagar;
}
?>

<!--script async src="https://www.googletagmanager.com/gtag/js?id=G-6Q1GCL7WC8"></script-->
<?php $this->db->select('*');
    $this->db->from('googleanalyticscode');
    $query = $this->db->get();
    $gcdt=$query->row();?>


<?php echo htmlspecialchars_decode($gcdt->googleanalytics); ?>


        <link rel="icon" type="image/png" href="<?php echo base_url().'uploads/logo/'.$siteinf->faviconimg;?>"  alt="<?php echo $siteinf->alttagimg1;?>" />
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
            <section id="home" class="slider-area slider-four fix p-relative">
               
                <div class="slider-active">


               <?php foreach($result2 as $re){?>
				<div class="single-slider slider-bg d-flex align-items-center" >
                    <div class="image-layer" style="background: url(<?php echo base_url().'uploads/carousel/'.$re['picture'];?>)"></div>
                        <div class="container">
                           <div class="row justify-content-center align-items-center">
                                <div class="col-lg-8 col-md-8">
                                    <div class="slider-content s-slider-content mb-25">
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                        <h5 data-animation="fadeInDown" data-delay=".4s"><?php echo $re['title'];?></h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo $re['title2'];?></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s"><?php echo $re['title3'];?> </p>
                                        <?php } else { ?>
                                            
                                            <h5 data-animation="fadeInDown" data-delay=".4s"><?php echo $re['titlear'];?></h5>
                                         <h2 data-animation="fadeInUp" data-delay=".4s"><?php echo $re['title2ar'];?></h2>
                                        <p data-animation="fadeInUp" data-delay=".6s"><?php echo $re['title3ar'];?> </p>
                                        <?php } ?>
                                         <div class="slider-btn mt-30">                                          
                                            <a href="#" class="mr-15 call-btn "><i class="fa fa-angle-right"></i>
                                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                            
                                            <?php echo $re['title4'];?> <?php } else {?>
                                                <?php echo $re['title4ar'];?>
                                                <?php } ?>
                                            </a>
                                             
                                        </div>        
                                                              
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
<?php }?>

    
            </section>
         
            
             
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
                               <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                    <h4><a href="#"><?php echo $res['title'] ;?></a></h4> 
                                    <?php } else {?>
                                        <h4><a href="#"><?php echo $res['titlear'];?></a></h4>
                                                <?php } ?>  
                                   
                                </div>
                            </div>   
                             
                         
                        </div>
                        <?php }}?>
                     
                     
                    </div>
                </div>
            </section>
          
            
             <!-- about-area -->
            <section id="about" class="about-area about-p pt-120 pb-120 p-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative  wow fadeInLeft  animated"   data-animation="fadeInLeft" data-delay=".4s">
                                <img src="<?php echo base_url().'uploads/aboutus/'.$about->aboutuspic;?>" alt="img">    
                            </div>
                          
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content  wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                                <div class="about-title second-title pb-25"> 
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png'?>" alt="circle_right"></span> <?php echo $about->title;?></h5>
                                    <?php } else { ?>

                                        <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png'?>" alt="circle_right"></span> <?php echo $about->titlear;?></h5>


                                        <?php } ?>

                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 



                                    <h2>    <?php echo $about->title;?></h2>
                                    <?php } else { ?>

                                        <h2> <?php echo $about->titlear;?></h2>


                                        <?php } ?>
                                    
                                   
                                </div>
                                
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <p><?php echo $about->aboutusshortdesc;?></p>
                                <ul class="mt-30 mb-30">
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p><?php echo $about->title2;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p><?php echo $about->title3;?></p>
                                    </div>
                                </li>
                                      <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p><?php echo $about->title4;?></p>
                                    </div>
                                </li>
                               
                            </ul>
                            <?php } else { ?>


                                <p><?php echo $about->aboutusshortdescar;?></p>
                                <ul class="mt-30 mb-30">
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p><?php echo $about->title2ar;?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p><?php echo $about->title3ar;?></p>
                                    </div>
                                </li>
                                      <li>
                                    <div class="icon"><i class="fal fa-check"></i></div>
                                    <div class="text">
                                        <p><?php echo $about->title4ar;?></p>
                                    </div>
                                </li>
                               
                            </ul>




                                <?php } ?>
                              <div class="slider-btn"> 
                              <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>                                         
                                            <a href="<?php echo base_url().'about/en';?>" class="btn ss-btn"> More About</a>
                                            <?php } else { ?>
                                            
                                                <a href="<?php echo base_url().'about/ar';?>" class="btn ss-btn"> المزيد عن</a>
                                            <?php } ?>
                                        </div>
                      
                            </div>
                        </div>
                     
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
              <!-- services-area -->          
            <section id="services-area2" class="services-area2 pt-120 pb-90 fix" style="background:url(<?php echo base_url().'tech/img/bg/service-bg.png'?>) no-repeat;background-size: cover;">
                <div class="container">
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png'?>" alt="circle_right"></span> <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  Our Services  <?php } else { ?>
                                 خدماتنا  <?php } ?><span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png'?>" alt="circle_left"></span></h5>
                                <h2>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <?php 

echo $resulthome->title2;
?>
                            <?php } else { ?>

                                <?php 

echo $resulthome->title2ar;
?>
<?php } ?>
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
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                    <h3><a href="<?php echo base_url().$res['urlkey'].'/en';?>"><?php echo $res['title'];?></a></h3>   
                                    <p><?php echo $res['description1'];?></p>
                                    <?php } else {?>
                                        <h3><a href="<?php echo base_url().$res['urlkey'].'/ar'.$res['urlkey'];?>"><?php echo $res['title1ar'];?></a></h3>   
                                        <p><?php echo $res['description1ar'];?></p>

                                        <?php } ?>


                                       
                                    <div class="slider-btn mt-15">  
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>                                         
                                        <a href="<?php echo base_url().$res['urlkey'].'/en';?>" class="btn ss-btn">View More</a>
                                        <?php } else { ?>
                                            <a href="<?php echo base_url().$res['urlkey'].'/ar';?>" class="btn ss-btn">عرض المزيد</a>

                                            <?php } ?>
                                            					
                                    </div>
                                </div>
                                    
                              
                            </div>   

                           
                             
                         
                        </div>
                        <?php } ?>
                       
                         
                        
                      
                        
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
            
              <!-- booking-area -->
            <section id="booking" class="booking-area contact-bg pt-120 pb-120 p-relative fix" style="background: url(<?php echo base_url().'tech/img/bg/booking-bg.png'?>) no-repeat;background-size: cover;">
              
                <div class="container">
             
					<div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="booking-contact-box">
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <h3> <?php 

echo $resulthome->title4;
?></h3>
  <?php } else { ?> <h3> <?php 

echo $resulthome->title4ar;
?></h3>

<?php } ?>

                                <div class="tab-content">
                                  <div id="home3" class="tab-pane fade show active">
                                    <form method="post" class="contact-form mt-30" id="frmcontact"  action="<?php echo base_url().'Techservices/contactenquiryprocess';?>" >
                                            <div class="row">
                                            <div class="col-lg-12">
                                                <div class="contact-field p-relative c-name mb-30">
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
                                          $fn="First name";
                                            
                                            ?>       
                                                    <label class="formLabel">First Name</label> 
                                                    <?php } else {
                                                
                                                $fn=">الاسم الأول";
                                                
                                                ?>

                                                <label class="formLabel">الاسم الأول</label>
                                                <?php } ?>                               
                                                    <input type="text" id="first_name" name="first_name" class="form-control" required placeholder="<?php echo $fn;?>">


                                                   
                                                </div>                               
                                            </div>

                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-30">                                   
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
                                                $ln="Last Name";
                                            
                                            ?>   
                                            <label class="formLabel">Last Name</label>
                                            <?php } else {
                                                 $ln="اسم العائلة";
                                                
                                                ?> 
                                                <label class="formLabel"> اسم العائلة </label>
                                                
                                                <?php } ?>
                                                    <input type="text" id="last_name" name="last_name" placeholder="<?php echo $ln;?>"  class="form-control" required>
                                                </div>
                                            </div>	
                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-30">                                   
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
                                            
                                            $em="Email";
                                            ?>   
                                            <label class="formLabel">Email</label>
                                            <?php } else { ?> 
                                                <label class="formLabel"> بريد إلكتروني </label>
                                        
                                            
                                            <?php 
                                        $em="بريد إلكتروني ";
                                        
                                        } ?>                                  
                                                   <input type="text" id="email" name="email" placeholder="<?php echo $em;?>" required="">
                                              </div>
                                            </div>		
                                            <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-subject mb-30">                                   
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
                                            $ph="Phone Number";
                                            
                                            ?>     
                                            <label class="formLabel">Phone Number</label>
                                            <?php } else { 
                                                $ph="رقم التليفون";
                                                
                                                ?><label class="formLabel">  رقم التليفون </label> <?php } ?> 
                                                    <input type="text" id="phone" name="phone" placeholder="<?php echo $ph;?>" class="form-control" required >
                                                </div>
                                            </div>	
                                            <div class="col-lg-6">                               
                                                <div class="contact-field p-relative c-option mb-30">    
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                        <label class="formLabel">Type Service</label>
                                        <?php } else { ?>
                                            <label class="formLabel">اكتب الخدمة</label>
                                            
                                            <?php } ?>                                 
                                                    <select name="subject" placeholder="Type Service" id="sr" class="form-control">
                                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                                <option value="">Select</option>
                                        <?php } else { ?>
                                            <option value="">يختار</option>

                                            <?php } ?>
                                                    <?php 
                        
                        //$k=0;
                        foreach($resultdata as $res){ ?>
                                                      <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                                        <option value="<?php echo $res['title'];?>"><?php echo $res['title'];?></option>
                                                     
                                                        <?php } else { ?>
                                                            <option value="<?php echo $res['title1ar'];?>"><?php echo $res['title1ar'];?></option>
                                                            <?php } } ?>

                                                      <!--option value="sports-massage">Service 01</option>
                                                      <option value="hot-stone-message">Service 02</option>
                                                      <option value="facil-therophy">Service 03</option-->
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="col-lg-6">                               
                                                <div class="contact-field p-relative c-option mb-30">
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                            <label class="formLabel">Location</label>                                     
                                            <?php } else { ?>
                                            <label class="formLabel">موقع</label>
                                            
                                            <?php } ?>                                   
                                                    <select name="location" placeholder="Location" class="form-control">
                                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                                <option value="">Select</option>
                                        <?php } else { ?>
                                            <option value="">يختار</option>

                                            <?php } ?>
                                                    <?php 
                        
                        //$k=0;
                        foreach($resultdata2 as $res){ ?>
                                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                                        <option value="<?php echo $res['location'];?>"><?php echo $res['location'];?></option>
                                                        <?php } else { ?>
                                                            <option value="<?php echo $res['location'];?>"><?php echo $res['locationarabic'];?></option>
                                                            <?php } }?>
                                                    </select>
                                                </div>
                                            </div>
                                                 <div class="col-lg-12">                               
                                                <div class="contact-field p-relative c-option mb-30">  
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 

<?php $mg="Write Message"; } else {
    $mg="اكتب رسالة";
    
    ?>

    <?php } ?>                               
                                                    <textarea id="message" name="message" rows="4" cols="50" aria-labelledby="message" aria-labelledby="message">
                                                        </textarea>
                                                </div>
                                            </div>
                                               
                                            <div class="col-lg-12">
                                           	
                                                <div class="slider-btn"> 
                                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                                            <button name="but1" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submit Now</button>
                                                            <?php } else {?>
                                                                <button  name="but1" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">أرسل الآن</button>

                                                            <?php } ?>
                                                        </div> 
                                                        <div class="successmsg">
                                                        <label id="msg" style="font-color:green;font-weight:bold;text-align:center;padding-top:15px"></label>   
                        </div>
                                    
 
                                                        

                                            </div>
                                            </div>
                                           
                                    </form>  
                                    </div>
                                      <div id="menu1" class="tab-pane fade">
                                         <form action="#" method="post" class="contact-form mt-30" >
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
                                                        <textarea name="message1" id="message1" cols="30" rows="10" placeholder="Tracking Number"></textarea>
                                                    </div>
                                                    <div class="slider-btn">                                          
                                                                <button name="but2" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Submit Now</button>				
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
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_left_w.png'?>" alt="circle_right"></span> request A Quote</h5>
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>      
                                    
                                    <h2> <?php 

echo $resulthome->title3;
?> </h2>
<?php } else { ?>  <h2> <?php 

echo $resulthome->title3ar;
?> </h2>

<?php } ?>
                                    
                                   
                                </div>
                                <div class="our-contact-details-area">
                                    <div class="about-right-mail">
                                        <div class="mail-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content-area d-flex">
                                            <div class="icon-sec call-icon">
                                                <img src="<?php echo base_url().'tech/img/icon/call-icon.png';?>" alt="call" >
                                            </div>
                                            <div class="icon-content">
                                               <h6>+<?php echo $contactus->phoneno;?></h6>
                                               <h6>+<?php echo $contactus->phoneno2;?></h6>
                                            </div>
                                        </div>

                                        <div class="content-area d-flex">
                                            <div class="icon-sec call-icon">
                                                <img src="<?php echo base_url().'tech/img/icon/printer.png';?>" alt="print">
                                            </div>
                                            <div class="icon-content">
                                               <h6>+<?php echo $contactus->phoneno3;?></h6>
                                               <h6>+<?php echo $contactus->lanno;?></h6>
                                            </div>
                                        </div>

                                        <div class="content-area d-flex">
                                            <div class="icon-sec call-icon">
                                                <img src="<?php echo base_url().'tech/img/icon/email.png';?>" alt="email">
                                            </div>
                                            <div class="icon-content">
                                               <h6><?php echo $contactus->emailid;?></h6>
                                               <!--h6><?php //echo $contactus->emailid2;?></h6-->
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
                            <img src="<?php echo base_url().'tech/img/bg/left-img.png';?>"  alt="left"/>
                           </div>
                        </div>
                        
					<div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="skills-content s-about-content">
                                <div class="skills-title pb-20">            
                                    <h5><span class="line"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> 
                                    
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                    <?php 

echo $resulthome->title5;
?> 
<?php } else { ?> <?php //{

echo $resulthome->title5ar;
?> 
<?php } ?></h5> 



<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                    <h2><?php 

echo $resulthome->title6;
?> <?php } else { ?> <?php //{

    echo $resulthome->title6ar;
    ?> 
    <?php } ?></h2>                                  
                                </div>
                                <div class="circle-area">
                                    <div class="box-line">
                                        <div class="icon-area">
                                            <img src="<?php echo base_url().'tech/img/icon/left-icon.png';?>" alt="img">
                                        </div>
                                        <div class="icon-content">
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                        <?php 

echo $resulthome->description1;
                                        } else { echo $resulthome->descriptionar1;?>  
                                        
                                        
                                        
                                        
                                        <?php } ?>

                                        </div>
                                    </div>
                                    <div class="box-line">
                                        <div class="icon-area">
                                            <img src="<?php echo base_url().'tech/img/icon/left-icon.png';?>" alt="img">
                                        </div>
                                        <div class="icon-content">
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                        <?php 

echo $resulthome->description2;
?><?php } else { ?><?php 

    echo $resulthome->descriptionar2;
    ?>

<?php } ?>
                                        </div>
                                    </div>
                                    <div class="box-line">
                                        <div class="icon-area">
                                            <img src="<?php echo base_url().'tech/img/icon/left-icon.png';?>" alt="img">
                                        </div>
                                        <div class="icon-content">
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                        <?php 

echo $resulthome->description3;
?><?php } else { ?> <?php 

    echo $resulthome->descriptionar3;
    ?><?php } ?>
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
                                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                                <h2><?php 

echo $resulthome->title7;
?></h2><?php } else { ?> <h2><?php 

    echo $resulthome->title7ar;
    ?></h2><?php } ?>

<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>

                                                <P><?php 

echo $resulthome->description4;
?></P><?php } else { ?> <P><?php 

    echo $resulthome->descriptionar4;
    ?></P>
    <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                                        <div class="counter p-relative">
                                                            <span class="count"><?php 

echo $resulthome->count1;
?></span><small>+</small>                                     <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                                            <p>World Wide Branch</p>
                                                            <?php } else { ?>

                                                            فرع عالمي

                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                  </div>
                                                <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                                        <div class="counter p-relative">
                                                           <span class="count"><?php 

echo $resulthome->count2;
?></span><small>+</small>       <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                                              <p>Mordern Transport</p>
                                                              <?php } else { ?>

                                                              النقل الحديث
                                                              <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-lg-4 col-md-4 col-sm-12">
                                                    <div class="single-counter wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                                                        <div class="counter p-relative">
                                                            <span class="count"><?php 

echo $resulthome->count3;
?></span><small>+</small>       <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                                        <p>Awards Winning</p>
                                                        <?php } else { ?>

                                                        الفوز بالجوائز
                                                        <?php } ?>
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
                           <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span>
                                 <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                Project
                                <?php } else { ?>
                                    مشروع
                                    <?php } ?>
                                 
                                 <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                                <h2>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                Our Project
                                <?php } else { ?>
                                    مشروعنا
                                    <?php } ?>
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
                                <img src="<?php echo base_url().'uploads/projects/'.$res['picture']?>"  alt="project"/>
                            </div>
                        </div>
                        <?php } else {?>
                        <div class="col-lg-4 col-md-4 pad-right">
                            <div class="gallery-box">
                                <img src="<?php echo base_url().'uploads/projects/'.$res['picture']?>" alt="project"/>
                            </div>
                        </div>
                        <?php } 
                        
                        $k++;
                        ?>
                    
                    
                    
                    <?php } }?>
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
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> Feedback <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                                <?php } else { ?>
                                    <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span> تعليق <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                                    <?php } ?>
                                <h2>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                  Our Testimonials
                                  <?php } else { ?>
                                    شهاداتنا

                                    <?php } ?>

                                </h2>
                             
                            </div>
                           
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="testimonial-active">
                            <?php foreach($resulttest as $test){?>
                                <div class="single-testimonial">
                                    <div class="testi-author">
                                        <img src="<?php echo base_url().'uploads/testimonial/'.$test['image'];?>" alt="img">
                                        
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                        
                                        <div class="ta-info">
                                            <h6><?php echo $test['name'];?></h6>
                                            <span><?php echo $test['place'];?></span>
                                        </div>
                                        <?php } else { ?>

                                            <div class="ta-info">
                                            <h6><?php echo $test['namear'];?></h6>
                                            <span><?php echo $test['placear'];?></span>
                                        </div>

                                            <?php } ?>
                                    </div>

                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                    <p> <?php echo $test['testimonial'];?></p>
                                    <?php } else { ?>    <p> <?php echo $test['testimonialar'];?></p>
                                        <?php } ?>
                                    
                                    <div class="qt-img">
                                    <img src="<?php echo base_url().'tech/img/testimonial/qt-icon.png';?>" alt="img">
                                    </div>
                                </div>
                                <?php } ?>
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
            <?php $emailadd="Email Address";?>
            <?php } else { ?> 
                <?php $emailadd="عنوان البريد الإلكتروني";?>

                <?php } ?>
                                    
            
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
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <h2 class="mb-25">NEWSLETTER</h2>
                                <?php } else { ?> <h2 class="mb-25">النشرة الإخبارية</h2>

                                    <?php } ?>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <p><?php echo $newsletter->newsletterdescription;?></p>
                                <?php } else { ?>  <p><?php echo $newsletter->newsletterdescription1;?></p>
                                    <?php } ?>
                                <div class="newslater-area">
                                    <form name="ajax-form" id="contact-form4" action="<?php echo base_url().'Techservices/newslettersubscribe';?>" method="post"  class="contact-form newslater">
                                   <div class="form-group p-relative">
                                      <input class="form-control" id="email2" name="email"  style="color:black !important" type="email" placeholder="<?php echo $emailadd;?>..." value="" > 
                                      <button name="send" type="submit" class="btn btn-custom" aria-label="send2" id="send2"  onclick="go1();" ><i class="fal fa-angle-double-right"></i></button>
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

        <?php include('footer.php');?>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>

     
        <!-- main-area-end -->
        <!-- footer -->
      
        <!-- footer-end -->


		<!-- JS here -->
       
    </body>
</html>
<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
    $fmsg="First Name is required";
    $lmsg="Last Name is required";
    $pmsg="Enter a valid Phone";
    $smsg="Type Service is required";
    $emsg="Enter a valid Email";
    $locmsg="Location is required";
    $msg="Please enter Message";
    $submsg="Your emailid subscribed Successfully";
    $submsg1="Your enquiry send successfully";
    $e1msg="Please enter your emailid";
    
}else {
    $fmsg="الإسم الأول مطلوب";
    $lmsg="إسم العائلة مطلوب";
    $pmsg="أدخل هاتف صالح";
    $smsg="مطلوب نوع الخدمة";
    $emsg="أدخل بريد إلكتروني متاح";
    $locmsg="الموقع مطلوب";
    $msg="الرجاء إدخال الرسالة";
    $submsg=" تم الاشتراك في معرف البريد الإلكتروني الخاص بك بنجاح";
    $e1msg="الرجاء إدخال اسم المستخدم البريد الالكتروني";
    $submsg1="إرسال استفسارك بنجاح";
    

}
    
    
    
    ?>


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
      location:"required",  
      /*psword: {  
        required: true,  
        minlength: 8,  
      }*/  
    },  
    messages: {  
      first_name:"<?php echo $fmsg;?>", 
      last_name: "<?php echo $lmsg;?>",   
      subject: "<?php echo $smsg;?>", 
      phone: "<?php echo $pmsg;?>",   
      email: "<?php echo $emsg;?>",   
      location:"<?php echo $locmsg;?>",   
      /*psword: {  
        minlength: 'Password must be at least 8 characters long'  
      } */
      message:"<?php echo $msg;?>"
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
    
    $("#email").val('');
    $("#message").val('');
    $('select').val('');
    
		//$('#msg').html(response);
        $('#msg').html("<?php echo $submsg1;?>");
	}            
      });		
}





      //form.submit();  
   // }  
  });  
  </script>

<script>

function go1(){
    $('#newsmsg').html('');


}

$('form[id="contact-form4"]').validate({  
rules: {  
email: 'required',  
 
},  
messages: {  
//email: 'Please enter your emailid',  
email:"<?php echo $e1msg;?>",  

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

//$('#newsmsg').html(response);
$('#newsmsg').html("<?php echo $submsg;?>");
}            
});		
}





//form.submit();  
// }  
});  
</script>
