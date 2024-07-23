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
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url().'uploads/services/'.$service->Image2;?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="breadcrumb-wrap text-left">
                                <div class="breadcrumb-title">
                                    <!--h2><?php //echo $service->maintitle;?></h2>    
                                    <p><?php //echo $service->description2;?></p-->

                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                    <h2><?php echo $service->maintitle;?></h2>    
                                    <p><?php echo $service->description2;?></p>
                                    <?php } else { ?>
                                        <h2><?php echo $service->maintitlear;?></h2>    
                                    <p><?php echo $service->descriptionar2;?></p>

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
                                        <li class="breadcrumb-item active" aria-current="page"><?php echo $resultrow2->title;//echo $service->maintitle;?></li>
                                        <?php } else { ?>
                                            <li class="breadcrumb-item active" aria-current="page"><?php  echo $resultrow2->title1ar//echo $service->maintitlear;?></li>
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
            
             <section>

            
                <div class="service-details-area">
                
                    <div class="container">
                    <?php if ($resultrowcount>0){?>
                        <div class="details-area">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="service-img">
                                        <img src="<?php echo base_url().'uploads/servicedetails/'.$resultrow->picture?>" alt="servicedetails" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="service-content">
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                        <h2 class="mb-25"><?php echo $resultrow2->title;?></h2>
                                        <?php } else { ?>
                                            <h2 class="mb-25"><?php echo $resultrow2->title1ar;?></h2>
                                            <?php } ?>
                                        <div class="content-area d-flex">
                                            <div class="icon-sec">
                                            <div class="icon-block">
                                                <img src="<?php echo base_url().'tech/img/icon/settings.png'?>" alt="servicedetails" />
                                            </div></div>
                                            <div class="icon-content">
                                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                                <p><?php 
                                                
                                               // print_r($resultrow);
                                                echo $resultrow->description;?></p>
                                                  <?php } else { ?> <p>
                                                    <?php 
                                                
                                                // print_r($resultrow);
                                                 echo $resultrow->descriptionar;?>

                                                    <?php } ?></p>
                                            </div>
                                        </div>
                                        <div class="content-area d-flex">
                                            <div class="icon-sec">
                                            <div class="icon-block">
                                                <img src="<?php echo base_url().'tech/img/icon/settings.png'?>" alt="icon" />
                                            </div>
                                            </div>
                                            <div class="icon-content">
                                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                                <p><?php echo $resultrow->description2;?></p>
                                                <?php } else { ?>
                                                    <p><?php echo $resultrow->descriptionar2;?></p>

                                                    <?php } ?>
                                            </div>
                                        </div>

                                        <div class="content-area d-flex">
                                            <div class="icon-sec">
                                            <div class="icon-block">
                                                <img src="<?php echo base_url().'tech/img/icon/settings.png'?>" alt="icon" />
                                            </div></div>
                                            <div class="icon-content">
                                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                                <p><?php echo $resultrow->description3;?></p>
                                                <?php } else { ?>

                                                    <p><?php echo $resultrow->descriptionar3;?></p>

                                                    <?php } ?>
                                            </div>
                                        </div>


                                       
                                       
                                       
                                    </div>

                                   
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="content-area-sec">
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>  
                                    <?php echo  $resultrow->description4;?>
                                    <?php } else { ?>
                                        <?php echo  $resultrow->descriptionar4;?>

                                        <?php } ?>


                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <?php } else {
                        echo "Sorry no service details added";
                        
                        
                         } ?>
                    </div>
                    
                </div>

            
               
             </section>
       
            
            
            
           
             
                    
       
             
            
              
           
			
         
        </main>
        <!-- main-area-end -->
        <!-- footer -->
        
       
        <?php include('footer.php');?>
    </body>
</html>