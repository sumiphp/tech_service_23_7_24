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
                <span id="sermsg"></span><br>
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit About Us</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editaboutus" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                         <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">About Us Title:</label>
                                                              <input type="text" class="form-control" id="maintitle" name="maintitle" required placeholder="Enter About Us Title" value="<?php echo $result->title;?>" maxlength="25">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">About Us Banner :</label>
                                                          <input type="file" class="form-control" id="aboutusbanner" name="aboutusbanner">
                                                              <img src="<?php echo base_url().'uploads/aboutus/'.$result->aboutusbanner;?>" width="50" height="50" />                                                             
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Mission Logo:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/aboutus/'.$result->missionlogo;?>" width="50" height="50" />


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Vission Logo:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                              <img src="<?php echo base_url().'uploads/aboutus/'.$result->visionlogo;?>" width="50" height="50" />
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Alt Tag Image2:</label>
                                                              <input type="text" class="form-control" id="alttagimg2" name="alttagimg2" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg2;?>">


                                                             
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                         <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">About Us Title Arabic:</label>
                                                              <input type="text" class="form-control" id="maintitle2" name="maintitle2" required placeholder="Enter About Us Title Arabic" value="<?php echo $result->titlear;?>" maxlength="25">
                                          
                                                          </div>
                                                          <!--div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">About Us Banner :</label>
                                                          <input type="file" class="form-control" id="aboutusbanner" name="aboutusbanner">
                                                              <img src="<?php //echo base_url().'uploads/aboutus/'.$result->aboutusbanner;?>" width="50" height="50" />                                                             
                                                          </div-->
                                                      </div>                
                                                     
                                                      
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description1 English:</label>
                                                          <textarea class="form-control" id="aboutcompany" name="aboutcompany" rows="5" placeholder="About Us Description1" required maxlength="400"><?php echo $result->aboutcompany;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description Arabic1:</label>
                                                          <textarea class="form-control" id="aboutcompanyar" name="aboutcompanyar" rows="5" placeholder="About Us Description1 Arabic" required maxlength="400"><?php echo $result->aboutcompanyarabic;?></textarea>
                                                          </div>



                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description2 English:</label>
                                                          <textarea class="form-control" id="aboutcompany2" name="aboutcompany2" rows="5" placeholder="About Us Description2" required maxlength="400"><?php echo $result->aboutusshortdesc;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description2 Arabic:</label>
                                                          <textarea class="form-control" id="aboutcompanyar2" name="aboutcompanyar2" rows="5" placeholder="About Us Description2 Arabic" required maxlength="400"><?php echo $result->aboutusshortdescar;?></textarea>
                                                          </div>



                                                      </div>



                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description3 English:</label>
                                                          <textarea class="form-control" id="aboutcompany3" name="aboutcompany3" rows="5" placeholder="About Us Description2" required maxlength="400"><?php echo $result->title2;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description3 Arabic:</label>
                                                          <textarea class="form-control" id="aboutcompanyar3" name="aboutcompanyar3" rows="5" placeholder="About Us Description2 Arabic" required maxlength="400"><?php echo $result->title2ar;?></textarea>
                                                          </div>



                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description4 English:</label>
                                                          <textarea class="form-control" id="aboutcompany4" name="aboutcompany4" rows="5" placeholder="About Us Description4" required maxlength="400"><?php echo $result->title3;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description4 Arabic:</label>
                                                          <textarea class="form-control" id="aboutcompanyar4" name="aboutcompanyar4" rows="5" placeholder="About Us Description4 Arabic" required maxlength="400"><?php echo $result->title3ar;?></textarea>
                                                          </div>



                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description5 English:</label>
                                                          <textarea class="form-control" id="aboutcompany5" name="aboutcompany5" rows="5" placeholder="About Us Description5" required maxlength="400"><?php echo $result->title4;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">About Us Description5 Arabic:</label>
                                                          <textarea class="form-control" id="aboutcompanyar5" name="aboutcompanyar5" rows="5" placeholder="About Us Description5 Arabic" required maxlength="400"><?php echo $result->title4ar;?></textarea>
                                                          </div>



                                                      </div>





                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Mission:</label>
                                                          <textarea class="form-control" id="mission" name="mission" rows="5" placeholder="About Mission English" required maxlength="700"><?php echo $result->mission;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Mission Arabic:</label>
                                                          <textarea class="form-control" id="missionar" name="missionar" rows="5" placeholder="About Mission Arabic" required maxlength="700"><?php echo $result->missionar;?></textarea>
                                                          </div>




                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Vision English:</label>
                                                          <textarea class="form-control" id="vision" name="vision" rows="5" placeholder="About Vision English" required maxlength="700"><?php echo $result->vision;?></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Vision Arabic :</label>
                                                          <textarea class="form-control" id="visionar" name="visionar" rows="5" placeholder="About Vision Arabic" required maxlength="700"><?php echo $result->visionar;?></textarea>
                                                      </div>  </div>



                                                      <!--div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Our Travel :</label>
                                                             

                                                              <input type="text" class="form-control" id="travel" name="travel" placeholder="Enter Travel" value="<?php echo $result->notravels;?>" >
                                                            

                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Enter Happy Clients :</label>
                                                             

                                                              <input type="text" class="form-control" id="happyclients" name="happyclients" placeholder="Enter Happy Clients"  value="<?php echo $result->happyclients;?>">
                                                            
                                                          </div>
                                                      </div>


                                                      

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary"> 	Our Hotels :</label>
                                                             

                                                              <input type="text" class="form-control" id="hotels" name="hotels" placeholder="Enter Our Hotels"  value="<?php echo $result->nohotels;?>">
                                                           

                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary"> 	Award Winning :</label>
                                                             

                                                              <input type="text" class="form-control" id="nowinning" name="nowinning" placeholder="Enter Award Winning" value="<?php echo $result->nowinning;?>">
                                                            


                                                          </div>
                                                      </div-->
                                                     
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage"><?php echo $result->metatag;?></textarea>
                                                      </div>


                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Arabic:</label>
                                                          <textarea class="form-control" id="metatagar" name="metatagar" rows="20" placeholder="Enter Meta Tag Arabic"><?php echo $result->metatagar;?></textarea>
                                                      </div>


                                                      </div>

                                                      <!---<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Email:</label>
                                                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div>
                                                      </div>--->
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadser" >Update</button>
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
$('#editaboutus').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var file_data3 = $('#aboutusbanner').prop('files')[0];
        var maintitle=$('#maintitle').val();
        var maintitle2=$('#maintitle2').val();
       var aboutcompany=$("#aboutcompany").val();
        var mission=$("#mission").val();
        var vision=$("#vision").val();
        var aboutcompanyar=$("#aboutcompanyar").val();
        var aboutcompany2=$("#aboutcompany2").val();
        var aboutcompanyar2=$("#aboutcompanyar2").val();
        var aboutcompany3=$("#aboutcompany3").val();
        var aboutcompanyar3=$("#aboutcompanyar3").val();
        var aboutcompany4=$("#aboutcompany4").val();
        var aboutcompanyar4=$("#aboutcompanyar4").val();
        var aboutcompany5=$("#aboutcompany5").val();
        var aboutcompanyar5=$("#aboutcompanyar5").val();
        var missionar=$("#missionar").val();
        var visionar=$("#visionar").val();
        var aboutusshortdesc=$("#shortdesc").val();
        var aboutusshortdescar=$("#shortdescar").val();
        //alert(aboutusshortdesc);
        var metatag=$("#metatag").val();
        var metatagar=$("#metatagar").val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        //var hotel=$("#hotels").val();
        //var travel=$("#travel").val();
        
        var form_data = new FormData();
      form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('maintitle',maintitle);
        form_data.append('maintitle2',maintitle2);
        form_data.append('aboutcompany',aboutcompany);
        form_data.append('mission',mission);
        form_data.append('vision', vision);
        form_data.append('aboutcompanyar',aboutcompanyar);
        form_data.append('missionar',missionar);
        form_data.append('visionar', visionar);
       form_data.append('aboutusshortdesc',aboutusshortdesc);
        form_data.append('aboutusshortdescar',aboutusshortdescar);
        form_data.append('aboutcompany2',aboutcompany2);
        form_data.append('aboutcompanyar2',aboutcompanyar2);
        form_data.append('aboutcompany3',aboutcompany3);
        form_data.append('aboutcompanyar3',aboutcompanyar3);
        form_data.append('aboutcompany4',aboutcompany4);
        form_data.append('aboutcompanyar4',aboutcompanyar4);
        form_data.append('aboutcompany5',aboutcompany5);
        form_data.append('aboutcompanyar5',aboutcompanyar5);
        form_data.append('image3',file_data3);
        form_data.append('metatag',metatag);
        form_data.append('metatagar',metatagar);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        //form_data.append('hotel',hotel);
        //form_data.append('travel',travel);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editaboutusprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#sermsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listaboutus';?>";
            },
            error: function (response) {
               // $('#sermsg').html(response); // display error response from the server
              window.location.href ="<?php echo base_url().'Welcome/listaboutus';?>";
            }
        });
    });






</script>

    