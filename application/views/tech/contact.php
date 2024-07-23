<?php 
if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
echo $contactus->metatag;
}
else { 
    
    echo $contactus->metatagar;
    
   


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
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?php echo base_url().'uploads/contactus/'.$contactus->contactusimg;?>)">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12">
                            <div class="contact-form-area">
                            <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                <h3 class="txt-white"><?php echo $contactus->title1;?></h3>
                                <?php } else { ?>
                                    
                                    <h3 class="txt-white"><?php echo $contactus->title1ar;?></h3>
                                    
                                    
                                    

                                    <?php } ?>
                                <form  class="contact-form mt-30" method="post" id="frmcontact"  action="<?php echo base_url().'Techservices/contactenquiryprocess';?>">
                                    <div class="row">
                                    <div class="col-lg-6 col-md-6">
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
                                            
                                            
                                            <input type="text" id="first_name" name="first_name" placeholder="<?php echo $fn;?>" required="">
                                        </div>                               
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-email mb-20"> 
                                       
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
                                                $ln="Last Name";
                                            
                                            ?>   
                                            <label class="formLabel">Last Name</label>
                                            <?php } else {
                                                 $ln="اسم العائلة";
                                                
                                                ?> 
                                                <label class="formLabel"> اسم العائلة </label>
                                                
                                                <?php } ?>
                                            <input type="text" id="lastn" name="last_name" placeholder="<?php echo $ln;?>" required="">
                                        </div>                                
                                    </div>
                                    <div class="col-lg-6 col-md-6">                               
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
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-30">
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
                                            $ph="Phone Number";
                                            
                                            ?>     
                                            <label class="formLabel">Phone Number</label>
                                            <?php } else { 
                                                $ph="رقم التليفون";
                                                
                                                ?><label class="formLabel">  رقم التليفون </label> <?php } ?> 
                                            
                                          
                                            <input type="text" id="phone" name="phone" placeholder="<?php echo $ph;?>" required="">
                                        </div>
                                    </div>	
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-30"> 
                                       
                                            
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 
                                        <label class="formLabel">Type Service</label>
                                        <?php } else { ?>
                                            <label class="formLabel">اكتب الخدمة</label>
                                            
                                            <?php } ?>
                                          

                                            <select name="subject"  id="sr" class="form-control">
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
                                                      
                                                    </select>



                                        </div>
                                    </div>	
                                    <div class="col-lg-6 col-md-6">                               
                                        <div class="contact-field p-relative c-subject mb-30">
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
                                                            <option value="<?php echo $res['locationarabic'];?>"><?php echo $res['locationarabic'];?></option>
                                                            <?php } }?>
                                                    </select>
                                        </div>
                                    </div>	
                                    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="contact-field p-relative c-message mb-30">     
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?> 

                                            <?php $mg="Write Message"; } else {
                                                $mg="اكتب رسالة";
                                                
                                                ?>

                                                <?php } ?>  


                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="<?php echo $mg;?>" aria-labelledby="message"></textarea>
                                        </div>
                                        <div class="slider-btn"> 
                                        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){?>
                                            <button name="but1" type="submit" class="btn ss-btn active" data-animation="fadeInRight" data-delay=".8s">Contact Now</button>
                                            <?php } else { ?>
                                                <button type="submit" name="but1" class="btn ss-btn active" data-animation="fadeInRight" data-delay=".8s">اتصل الآن</button>

                                                <?php }?>
                                            


                                                  
                                                </div>   

                                                <div class="successmsg">
                                                
                                            <span id="msg" style="color:#fff !important"></span>
                        </div>        
                                    </div>
                                    </div>
                                
                            </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- slider-area-end -->
            
        </main>
        <!-- main-area-end -->
        <!-- footer -->
      
        <!-- footer-end -->


		<!-- JS here -->
        <?php include('footer.php');?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>


        <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
    $fmsg="First Name is required";
    $lmsg="Last Name is required";
    $pmsg="Enter a valid Phone";
    $smsg="Type Service is required";
    $emsg="Enter a valid Email";
    $locmsg="Location is required";
    $msg="Please enter Message";
    $submsg1="Your enquiry send successfully";
    
}else {
    $fmsg="الإسم الأول مطلوب";
    $lmsg="إسم العائلة مطلوب";
    $pmsg="أدخل هاتف صالح";
    $smsg="مطلوب نوع الخدمة";
    $emsg="أدخل بريد إلكتروني متاح";
    $locmsg="الموقع مطلوب";
    $msg="الرجاء إدخال الرسالة";
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
      subject:"required",  
      
    },  
    messages: {  
      /*first_name: 'First Name is required', 
      last_name: 'Last Name is required',   
      subject: 'Type Service is required',  
      phone: 'Enter a valid Phone',
      email: 'Enter a valid Email', 
      location: 'Location is required',   
      
      message:'Please enter Comments' */
    first_name:"<?php echo $fmsg;?>", 
      last_name: "<?php echo $lmsg;?>",   
      subject: "<?php echo $smsg;?>", 
      phone: "<?php echo $pmsg;?>",   
      email: "<?php echo $emsg;?>",   
      location:"<?php echo $locmsg;?>",   
      
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

















    </body>
</html>