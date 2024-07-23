
<?php $this->db->select('*');
    $this->db->from('socialmedialinks');
    $query = $this->db->get();
    $footerdt=$query->row();
    
    
    $this->db->select('*');
    $this->db->from('contactus');
    $query = $this->db->get();
    $cdt=$query->row();
    
   
      
    $this->db->select('*');
    $this->db->from(' siteinformation
    ');
    $query = $this->db->get();
    $sdt=$query->row();
    
    ?>


<footer class="footer-bg footer-p" style="background:#282828;">
             <div class="footer-top pt-70 pb-40">
                <div class="container">
                    <div class="row justify-content-between">
                        
                          <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-15">
                                <div class="footer-logo">
                                    <div class="f-widget-title mb-30">
                                        <!--img src="<?php //echo base_url().'tech/img/logo/f_logo.png';?>" alt="img"-->

                                      
                                        
                                        <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="<?php echo $siteinf->alttagimg1;?>" width="98" height="62" >
                                     </div>
                                     <div class="footer-social  mt-30">                                    
                                         <a href="<?php echo $footerdt->facebook;?>" aria-label="facebook"><i class="fab fa-facebook-f"></i></a>
                                         <a href="<?php echo $footerdt->twitter;?>" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                                         <a href="<?php echo $footerdt->instagram;?>" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                                         <a href="<?php echo $footerdt->linkldn;?>" aria-label="linkldn"><i class="fab fa-linkedin-in"></i></a>
                                     </div>
                                </div>

                                <?php $this->db->select('*');
                                $this->db->from('homepage');
                                $query = $this->db->get();
                                $hp = $query->row();?>
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                 <p> <?php echo $hp->description5;?></p>
                                 <?php } else {  ?> 
                                    <p> <?php echo $hp->descriptionar5;?></p>
                                    <?php } ?> 
                               
                            </div>
                            
                        </div>
						<div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                    <h2>Quick link</h2>
                                    <?php } else { ?> 
                                    رابط سريع
                                    <?php } ?> 
                                </div>
                                <div class="footer-link">

                                <?php $this->db->where('menutype',1);
                                $this->db->where('status',1);
                                $this->db->order_by('orderno');
                                $this->db->select('*');
                                $this->db->from('menus');
                                $query = $this->db->get();
                                $result = $query->result_array();?>


                                    <ul>  <?php foreach($result as $res){ ?>
                                        
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                            <li><a href="<?php echo base_url().$res['url'].$lan;?>"><?php echo $res['menuname'];?></a></li>
                                        <?php }else { ?> 
                                            <li><a href="<?php echo base_url().$res['url'].$lan;?>"><?php echo $res['menunamear'];?></a></li>
                                            <?php } ?> 
                                        <?php } ?> 
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                        <li><a href="<?php echo base_url().'sitemap/index';?>"> Sitemap</a></li>
                                        <?php }else { ?> 


                                            <li><a href="<?php echo base_url().'sitemap/index';?>"> خريطة الموقع
                                            </a></li>
                                        <?php } ?> 
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                        <li><a href="#"> Privacy Policy </a></li>
                                        <?php }else { ?> 
                                            <li><a href="#">سياسة الخصوصية
                                        </a></li>
                                        <?php } ?> 
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                        <li><a href="#">Terms and Conditions </a></li>
                                        <?php }else { ?> 
                                        <li><a href="#"> 

                                        الأحكام والشروط
                                        </a></li>
                                        <?php } ?> 
                                        <!--li><a href="#"> Contact Us</a></li-->
                                      
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                    <h2>Our Service</h2>
                                    <?php } else { ?> 
                                    خدمتنا
                                    <?php } ?> 
                                </div>


                                <?php //$this->db->where('menutype',1);
                                $searchterm=0;
                                $this->db->where('active',1);
                                //$this->db->where("FIND_IN_SET('0',displayattr)");

                                     



//$where = "FIND_IN_SET('".$searchterm."',displayattr)";  

//$this->db->where($where); 
                                $this->db->select('*');
                                $this->db->from('tourservices');
                                $query = $this->db->get();
                               // echo $this->db->lastquery();
                               // echo $this->db->lastquery();
                                $resultser = $query->result_array();
                                //echo $this->db->lastquery();

                                $sql="Select * from tourservices where FIND_IN_SET('0',displayattr) and active=1";    
    $query = $this->db->query($sql);
    $resultser = $query->result_array();
    //return $query->result_array();

                                $arr=array();
                                foreach($resultser as $res){
                                   if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ 
                                    $arr[]=$res['title'];
                                    $url[]=base_url().$res['urlkey'].'/en';
                                   }else{
                                    $arr[]=$res['title1ar'];
                                    $url[]=base_url().$res['urlkey'].'/ar';
                                   }
                                }
                                
                                
                                
                                ?>




                                <div class="footer-link">
                                    <ul>  
                                    <?php 
                                    //print_r($arr);
                                    error_reporting(0);
                                    for($i=0;$i<5;$i++){?>                                      
                                        <li><a href="<?php echo $url[$i];?>"><?php echo $arr[$i];?></a></li>
                                        <?php } ?>
                                        <!--li><a href="#"> Thermal insulation</a></li>
                                        <li><a href="#"> Water insulation </a></li>
                                        <li><a href="#"> Washing Board </a></li>
                                        <li><a href="#"> Marble Polishing</a></li-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                    <h2>Our Service</h2>
                                    <?php } else { ?> 
                                        خدمتنا
                                    <?php } ?> 
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                    <?php for($i=5;$i<10;$i++){?>                                      
                                        <li><a href="<?php echo $url[$i];?>"><?php echo $arr[$i];?></a></li>
                                        <?php } ?>
                                        <!--li><a href="#">Electricity</a></li>
                                        <li><a href="#">Plumbing </a></li>
                                        <li><a href="#">Cisterns </a></li>
                                        <li><a href="#">Sewage clearing</a></li-->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!--div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                <?php //if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                    <h2>Our Service</h2>
                                    <?php //} else { ?> 
                                        خدمتنا
                                    <?php //} ?> 
                                </div>
                                <div class="footer-link">
                                    <ul>                                        
                                    <?php //for($i=10;$i<15;$i++){
                                        
                                        //if ($arr[$i]!=''){
                                        
                                        ?>                                      
                                        <li><a href="<?php //echo $url[$i];?>"><?php //echo $arr[$i];?></a></li>
                                        <?php //} } ?>
                                     
                                    </ul>
                                </div>
                            </div>
                        </div-->
                       



                        <div class="col-xl-2 col-lg-2 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                    <h2>Address</h2>
                                    <?php } else { ?> 
                                        عنوان
                                    <?php }
                                    
                                    
                                    
                                    
                                    ?> 
                                </div>
                                <div class="footer-link">
                                    <ul>
                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                    <li style="color:#c6c6c6">                                      
                                    <?php 
                                    
                                    echo $cdt->companyname;
                                    
                                  
                                        ?>
                                        </li>   
                                    


                                        <li style="color:#c6c6c6">                                      
                                    <?php 
                                    
                                    echo $cdt->city;
                                    
                                    
                                        ?>
                                        </li> 
                                        
                                        
                                        <li style="color:#c6c6c6">                                      
                                    <?php 
                                    
                                    echo $cdt->country;
                                    
                                        ?>
                                        </li> 
                                        <?php } else { ?>


                                            <li style="color:#c6c6c6">                                      
                                    <?php 
                                    
                                    echo $cdt->companynamear;
                                    
                                  
                                        ?>
                                        </li>   
                                    


                                        <li style="color:#c6c6c6">                                      
                                    <?php 
                                    
                                    echo $cdt->cityarabic;
                                    
                                    
                                        ?>
                                        </li> 
                                        
                                        
                                        <li style="color:#c6c6c6">                                      
                                    <?php 
                                    
                                    echo $cdt->countryarabic;
                                    
                                        ?>
                                        </li> 






                                            
                                            
                                            <?php }
                                    
                                    
                                    
                                    
                                    ?> 
                                  
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>










                         
                      
                        
                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">  
                            <div class="copyright">
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                © Copyright <strong><span>Technical Services</span></strong>. All right reserved. 
                                <?php } else { ?> 
                                    © حقوق النشر <strong><span>خدمات تقنية</span></strong>. جميع الحقوق محفوظة. 
                                    <?php } ?>
                            </div>                       
                        </div>
                        <div class="col-lg-6 text-right text-xl-right">                       
                            <div class="credits">
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                Created with <img src="<?php echo base_url().'tech/img/heart.png';?>" alt="heart" > by <a href="https://pocketfriendlyweb.com/" target="_blank">PocketFriendlyWeb</a>
                                <?php } else { ?> 
                                    تم إنشاؤها باستخدام <img src="<?php echo base_url().'tech/img/heart.png';?>" alt="heart" > بواسطة <a href="https://pocketfriendlyweb.com/" target="_blank">ويب ودية الجيب</a>
                                    <?php } ?>
                                </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </footer>
       
        



        <script src="<?php echo base_url().'tech/js/vendor/modernizr-3.5.0.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/vendor/jquery-3.6.0.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/popper.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/bootstrap.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/slick.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/ajax-form.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/paroller.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/wow.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/js_isotope.pkgd.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/imagesloaded.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/parallax.min.js';?>"></script>
         <script src="<?php echo base_url().'tech/js/jquery.waypoints.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/jquery.counterup.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/jquery.scrollUp.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/jquery.meanmenu.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/parallax-scroll.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/jquery.magnific-popup.min.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/element-in-view.js';?>"></script>
        <script src="<?php echo base_url().'tech/js/main.js';?>"></script>