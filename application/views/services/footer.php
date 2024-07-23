<!-- Footer Area -->
<style>
label.error.errpopupmsg {
    position: absolute;
    /*bottom: -35px;*/
    bottom: -28px;
    color: #f61c0d;
    font-style: italic;
    font-weight: 600;
}

</style>
<footer id="footer" class="footer-area-bg">
    <div class="footer-newletter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="subscribe-area">
                        <h2>News Letter</h2>
                        <p><?php echo $newsletter->newsletterdescription;?></p>
                    </div>
                    <div class="newsletter-area">
                    <span id="newsmsg" style='bottom:51px;color:red;font-weight:bold;'></span>
                         <form class="newsletter-form-email" name="frmemail" id="frmemail" action="<?php echo base_url().'Techservices/newslettersubscribe';?>" method="post">
                         <input type="email" class="form-control" placeholder="Enter Your Email" name="email"  id="emailidnews"  />
                         <label id="emailnews-error" class="error errpopupmsg" for="emailidnews" ></label>
                            <button class="subscribe-btn" type="submit" id="btn" onclick="go1();">
                                Subscribe
                            </button>
                           
                            <!--<div id="validator-newsletter" class="form-result"></div>-->
                        </form>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="feature-updates-sec">
                    <h2>Feature Update</h2>
                    <div class="footer-service-icon">
                        <div class="row">
                        <?php 
                        
                        $this->db->from('featureupdate');
    $query = $this->db->get();
    $featureupdate=$query->result_array();
                        
                        foreach($featureupdate as $res){?>
                                    <div class="col-md-3 col-lg-3 feature-updates">
                                        <img src="<?php echo base_url().'uploads/featureicon/'.$res['featureicon'];?>">
                                    </div>
                                    <?php } ?>
                            
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

                            <?php $this->db->select('*');
    $this->db->from('siteinformation');
    $query = $this->db->get();
    $favdt=$query->row();
   $logo=$favdt->logoimg;
    ?>


                                <img src="<?php echo base_url().'uploads/logo/'.$logo;?>" alt="Logo">
                            </a>
                            <?php $this->db->select('*');
    $this->db->from('socialmedialinks');
    $query = $this->db->get();
    $footerdt=$query->row();
    //print_r($footerdt);
    
    ?>
                            <div class="share-icon">
                                
                               <ul class="social-icon-part">
                                            <li><a href="<?php echo $footerdt->whatsuplink;?>" target="_blank"><img src="<?php echo base_url().'services/assets/img/whatsapp.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->linkldn;?>" target="_blank"><img src="<?php echo base_url().'services/assets/img/linked-in.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->youtube;?>" target="_blank"><img src="<?php echo base_url().'services/assets/img/youtube-icon.png';?>"></a></li>
                                        </ul>
                                        <ul class="social-icon-part">
                                            <li><a href="<?php echo $footerdt->facebook;?>" target="_blank"><img src="<?php  echo base_url().'services/assets/img/facebook-icon.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->instagram;?>" target="_blank"><img src="<?php echo base_url().'services/assets/img/insta-icon.png';?>"></a></li>
                                            <li><a href="<?php echo $footerdt->twitter;?>" target="_blank"><img src="<?php echo base_url().'services/assets/img/twitter.png';?>"></a></li>
                                        </ul>

                                
                            </div>
                           
                        </div>

                      
                    </div>
                </div>
                <?php $this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
    $aboutus=$query->row();
    
    
    ?>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-list ml-50">
                        <h3><?php echo $aboutus->title;?></h3>
                        <p><?php echo $aboutus->aboutusshortdesc;?></p>
                      <!--<p>POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>
                      <p class="pt-30 ">POCKET FRIENDLY delivers comprehensive, professional one-page websites for businesses of all sizes at an affordable cost.</p>--->

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
                                <?php echo $contactus->city;?>,<?php echo $contactus->country;?>
                            </li>
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel:+<?php echo $contactus->phoneno;?>">+<?php echo $contactus->phoneno;?></a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:<?php echo $contactus->emailid;?>"><?php echo $contactus->emailid;?></a>
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

    <!--div class="footer-bottom">
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
</footer-->
<!-- Footer Area End -->

<script src="<?php echo base_url().'services/assets/js/jquery.min.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/bootstrap.bundle.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/meanmenu.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/owl.carousel.min.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/jquery.magnific-popup.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/wow.min.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/form-validator.min.js';?>"></script>
        
        <script src="<?php echo base_url().'services/assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php echo base_url().'services/assets/js/custom.js';?>"></script>
        <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>
<script>
        $(".numericvalidate").keypress(function(event){
        var keycode = event.which;
        if (!(keycode >= 48 && keycode <= 57)) {
            event.preventDefault();
        }
    });


    $('#frmemail_old').on('submit', function (e) {
    e.preventDefault();
    alert("enter");
        var emailnews=$("#emailnews").val();
        
        var form_data = new FormData();
       
        form_data.append('emailidnews',emailnews);
       
       
        $.ajax({
            url: "<?php echo base_url().'Pocket/newslettersubscribe';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#date').val('');
                $('#emailnews').val('');
                $('input[type=email]').each(function() {
        $(this).val('');
    });   
      $("#newsmsg").html(response);  
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                $("#newsmsg").html(response);  
            }
        });
    });



    function clearValue(){

    }

    $('form[id="frmemail"]').validate({  
    rules: {  
        email: 'required',  
      /* companyname: 'required',
      phone:'required',  
      email: {  
        required: true,  
        email: true,  
      }, 
      business:"required", 
      message:"required",
      package:"required", 
     psword: {  
        required: true,  
        minlength: 8,  
      }*/  
    },  
    messages: {  
        email: 'Please enter your emailid',  
      /*companyname: 'Company Name is required',  
      phone: 'Enter a valid Phone',
      email: 'Enter a valid Email',
      business: 'Enter Your nature of business',
      package:"Please select package",   
      psword: {  
        minlength: 'Password must be at least 8 characters long'  
      } */
      //message:'Please enter Message' 
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
    
    
    
		$('#newsmsg').html(response);
        $('#emailidnews').val('');
	}            
      });		
}





      //form.submit();  
   // }  
  });  















  function go1(){
    $('#newsmsg').html('');


}















    </script>