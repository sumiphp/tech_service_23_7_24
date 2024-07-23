
<?php 
if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
echo $service->metatag;
}else {

    echo $service->metatagar;
}
?>

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
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url().'uploads/services/'.$service->Image1;?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                    <h2><?php echo $service->maintitle;?></h2>    
                                    <p><?php echo $service->description;?></p>
                                    <?php } else { ?>
                                        <h2><?php echo $service->maintitlear;?></h2>    
                                    <p><?php echo $service->descriptionar;?></p>

                                        <?php } ?>
                                    <div class="breadcrumb-wrap">
                              
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>

<li class="breadcrumb-item"><a href="<?php echo base_url().'index/en/';?>"> Home  </a></li>

<?php } else {?>
    <li class="breadcrumb-item"><a href="<?php echo base_url().'index/ar/';?>">  بيت </a></li>


    <?php } ?>
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $service->maintitle;?></li>
                                        <?php } else { ?>
                                            <li class="breadcrumb-item active" aria-current="page"><?php echo $service->maintitlear;?></li>
                                            <?php } ?>
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
           
            <!-- about-area-end -->
          
            
              <!-- booking-area -->
              <section id="services-area2" class="services-area2 pt-120 pb-90 fix" style="background: url(img/bg/service-bg.png) no-repeat;background-size: cover;">
                <div class="container">
                    <div class="row">   
                        <div class="col-lg-12">
                            <div class="section-title center-align mb-50 text-center">
                                 <h5><span class="line2"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_right"></span>
                                 <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                <?php echo $service->subtitle;?>
                                <?php } else { ?>
                                    <?php echo $service->subtitlear;?>

                                    <?php } ?>
                                 <span class="line3"> <img src="<?php echo base_url().'tech/img/bg/circle_right.png';?>" alt="circle_left"></span></h5>
                                <h2>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                <?php echo $service->title3;?>
                                <?php } else { ?>
                                    <?php echo $service->title3ar;?>

                                    <?php } ?>
                                </h2>
                             
                            </div>
                           
                        </div>
                         
                    </div>
                    <!-- <div class="row home-blog-active"> -->
                        <div class="row"> 
                        <?php 
                        
                        
                        foreach($resultdata as $res){?>
                       <div class="col-lg-4 col-md-12">
                             
                         
                          <div class="services-box2 mb-30">
                              <div class="services-img">
                                 <img src="<?php echo base_url().'uploads/tour/'.$res['picture']?>" alt="circle_right">
                                </div>
                                <div class="services-content2">
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                    <h3><a href="#"><?php echo $res['title'];?></a></h3>   
                                    <p><?php echo $res['description1'];?></p>

                                    <?php } else { ?>
                                        <h3><a href="#"><?php echo $res['title1ar'];?></a></h3>   
                                    <p><?php echo $res['description1ar'];?></p>

                                        <?php } ?>
                                    <div class="slider-btn mt-15">
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>                                          
                                        <a href="<?php echo base_url().$res['urlkey'].'/en';?>" class="btn ss-btn">   <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  View More <?php } else {?> عرض المزيد <?php } ?></a>	
                                        <?php } else {?>
                                            <a href="<?php echo base_url().$res['urlkey'].'/ar';?>" class="btn ss-btn">   <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  View More <?php } else {?> عرض المزيد <?php } ?></a>	
                                            <?php } ?>				
                                    </div>
                                </div>
                                    
                              
                            </div>   

                           
                             
                         
                        </div>
                        <?php } ?>
                     
                         
                        
                      
                        
                    </div>
                </div>
            </section>
            <!-- booking-area-end -->
            
            
         
        </main>
        <!-- main-area-end -->
        <!-- footer -->
       
        <?php include('footer.php');?>
    </body>
</html>