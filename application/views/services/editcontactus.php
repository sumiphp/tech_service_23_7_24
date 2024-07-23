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


                     
            <?php include_once("sidebar.php");?>     

 

                <div class="dashboard-innerbox">
                
                            <div class="inner-page-sec">
                            <span id="blogmsg"></span><br>
                              <div class="description-sec">
                                <h2>Edit Contact Us</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editcontactus" class="rounded-form" method="post" enctype="multipart/form-data" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Contact us Phoneno1:</label>
                                                              <input type="text" class="form-control" id="phoneno" name="phoneno" placeholder="Phone No" required value="<?php echo $result->phoneno;?>" >
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="image1" class="form-label text-primary">Contact Us Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/contactus/'.$result->contactusimg;?>"  width="50" height="50" />
                                                          </div>
                                                      </div>
                                               
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Emailid:</label>
                                                              <input type="text" class="form-control" id="emailid" name="emailid" required value="<?php echo $result->emailid;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Place:</label>
                                                              <input type="text" class="form-control" id="place" name="place" placeholder="Enter Place" required value="<?php echo $result->city;?>">
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Country:</label>
                                                              <input type="text" class="form-control" id="country" name="country" placeholder="Country" required value="<?php echo $result->country;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Contact Us Image Alt Tag Attribute:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                          
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Contact us Phoneno2:</label>
                                                              <input type="text" class="form-control" id="phoneno2" name="phoneno2" placeholder="Phone No2" required value="<?php echo $result->phoneno2;?>" >
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">Contact us Phoneno3:</label>
                                                              <input type="text" class="form-control" id="phoneno3" name="phoneno3" placeholder="Phone No3" required value="<?php echo $result->phoneno3;?>" >
                                                          </div>
                                                      </div>



                                                      <div class="row mb-3"> <div class="col-md-6">
 
                                                      <label for="company-name" class="form-label text-primary">Contact us Phoneno4:</label>
                                                              <input type="text" class="form-control" id="lanno" name="lanno" placeholder="Lanno" required value="<?php echo $result->lanno;?>" >
                                                      </div>


                                                       <div class="col-md-6">
                                                      <label for="company-name" class="form-label text-primary">To email1:</label>
                                                              <input type="text" class="form-control" id="email1" name="email1" placeholder="email1" required value="<?php echo $result->toemail1;?>" >
                                                      </div>



                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">To email2:</label>
                                                              <input type="text" class="form-control" id="email2" name="email2" placeholder="email1" required value="<?php echo $result->toemail2;?>" >
                                                      </div>
                                                         
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">To email3:</label>
                                                              <input type="text" class="form-control" id="email3" name="email3" placeholder="email1" required value="<?php echo $result->toemail3;?>" >
                                                      </div>
                                          
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">Contact us Emailid2:</label>
                                                              <input type="text" class="form-control" id="emailid2" name="emailid2" placeholder="Emailid2" required value="<?php echo $result->emailid2;?>" >
                                                          <!--label for="company-name" class="form-label text-primary">Street Address:</label>
                                                             
                                                              <textarea class="form-control" id="street" name="street" rows="3" maxlength="610"  placeholder="Street Address" required><?php //echo $result->street;?></textarea-->
                                                      </div>
                                                         
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">To email4:</label>
                                                              <input type="text" class="form-control" id="email3" name="email3" placeholder="email1" required value="<?php echo $result->toemail3;?>" >
                                                      </div>
                                          
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">Title1:</label>
                                                              <input type="text" class="form-control" id="title1" name="title1" placeholder="Title1" required value="<?php echo $result->title1;?>" >
                                                      </div>
                                                         
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">Title2:</label>
                                                              <input type="text" class="form-control" id="title2" name="title2" placeholder="Title2" required value="<?php echo $result->title2;?>" >
                                                      </div>
                                          
                                                        
                                                      </div>




                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Title1 Arabic:</label>
                                                          <input type="text" class="form-control" id="title1ar" name="title1ar" placeholder="Title1 Arabic" required value="<?php echo $result->title1ar;?>" >
                                                      </div>

                                                      <div class="col-md-6">
                                                      <label for="company-name" class="form-label text-primary">Title2  Arabic:</label>
                                                      <input type="text" class="form-control" id="title2ar" name="title2ar" placeholder="Title2 Arabic" required value="<?php echo $result->title2ar;?>" >
                                                      </div>
                                                      </div>




                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Place Arabic:</label>
                                                          <input type="text" class="form-control" id="placear" name="placear" placeholder="Place Arabic" required value="<?php echo $result->cityarabic;?>" >
                                                      </div>

                                                      <div class="col-md-6">
                                                      <label for="company-name" class="form-label text-primary">Country  Arabic:</label>
                                                      <input type="text" class="form-control" id="countryar" name="countryar" placeholder="Country Arabic" required value="<?php echo $result->countryarabic;?>" >
                                                      </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Company Name English:</label>
                                                          <input type="text" class="form-control" id="compen" name="compen" placeholder="Company Name English" required value="<?php echo $result->companyname;?>" >
                                                      </div>

                                                      <div class="col-md-6">
                                                      <label for="company-name" class="form-label text-primary">Company Name  Arabic:</label>
                                                      <input type="text" class="form-control" id="compar" name="compar" placeholder="Company Name  Arabic" required value="<?php echo $result->companynamear;?>" >
                                                      </div>
                                                      </div>





                                 
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage"><?php echo $result->metatag;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Arabic:</label>
                                                          <textarea class="form-control" id="metatagar" name="metatagar" rows="20" placeholder="Enter Meta Tag Arabic"><?php echo $result->metatagar;?></textarea>
                                                      </div>
                                                      
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listblogcontents';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub" >Submit</button>
                                                  </form>

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
              </div>
			</div>
		</section>
		
        


            


           
        <!---<script src="<?php //echo base_url().'assets/js/jquery.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/meanmenu.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
     
        <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/wow.min.js';?>"></script>
    
        <script src="<?php //echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/form-validator.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/custom.js';?>"></script>-->
        </body>
    <?php include_once("footer.php");?>
        <script>
$('#editcontactus').on('submit', function (e) {
    e.preventDefault();
    
       // var file_data1 = $('#image1').prop('files')[0];
        var file_data1 = $('#image1').prop('files')[0];
        //alert("enter"+file_data1);
        //var file_data2 = $('#image2').prop('files')[0];
        var phoneno=$('#phoneno').val();
        var phoneno2=$('#phoneno2').val();
        var phoneno3=$('#phoneno3').val();
        var emailid=$("#emailid").val();
        var emailid2=$("#emailid2").val();
        var place=$("#place").val();
        var country=$("#country").val();
        var placear=$("#placear").val();
        var countryar=$("#countryar").val();
        var compar=$("#compar").val();
        var comp=$("#compen").val();
        var lanno=$("#lanno").val();
        var email1=$("#email1").val();
        var email2=$("#email2").val();
        var email3=$("#email3").val();
        var street=$("#street").val();
        var title1=$("#title1").val();
        var title2=$("#title2").val();
        var title1ar=$("#title1ar").val();
        var title2ar=$("#title2ar").val();
       var metatag=$("#metatag").val();
       var metatagar=$("#metatagar").val();
       var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('lanno', lanno);
        form_data.append('phoneno',phoneno);
        form_data.append('emailid',emailid);
        form_data.append('emailid2',emailid2);
        form_data.append('place',place);
        form_data.append('country',country);
        form_data.append('placear',placear);
        form_data.append('countryar',countryar);
        form_data.append('comp',comp);
        form_data.append('compar',compar);
        form_data.append('phoneno2',phoneno2);
        form_data.append('phoneno3',phoneno3);
        form_data.append('street',street);
        form_data.append('metatag',metatag);
        form_data.append('metatagar',metatagar);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('email1',email1);
        form_data.append('email2',email2);
        form_data.append('email3',email3);
        form_data.append('title1',title1);
        form_data.append('title2',title2);
        form_data.append('title1ar',title1ar);
        form_data.append('title2ar',title2ar);
       // alert("enter");
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/contactusprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                /*$('#image1').val('');
                $('#image2').val('');
                $('#blogtitle').val('');
                $('#toparticle').val('');
                $('#date').val('');
                $('#name').val('');
                $('#place').val('');*/
                $('#description').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    //alert("hello");
                //$('#blogmsg').html(response); // display success response from the server
                
                window.location.href ="<?php echo base_url().'Welcome/listcontactus';?>";
            },
            error: function (response) {
                //$('#blogmsg').html(response); // display error response from the server
                
                window.location.href ="<?php echo base_url().'Welcome/listcontactus';?>";
            }
        });
    });






</script>

    