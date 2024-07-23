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
                                <h2>Edit Home Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edithomepage" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Main Title English:</label>
                                                              <input type="text" class="form-control" id="maintitle" name="maintitle" maxlength=50  required placeholder="Enter Main Title English" value="<?php echo $result->title1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Title2 English:</label>
                                                              <input type="text" class="form-control" id="subtitle" name="subtitle"  maxlength=50 placeholder="Enter Sub Title English" value="<?php echo $result->title2;?>">


                                                             
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Main Title Arabic:</label>
                                                              <input type="text" class="form-control" id="maintitle2" name="maintitle2" maxlength=50  required placeholder="Enter Main Title Arabic" value="<?php echo $result->title1ar;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Title2 Arabic:</label>
                                                              <input type="text" class="form-control" id="subtitle2" name="subtitle2"  maxlength=50 placeholder="Enter Sub Title Arabic" value="<?php echo $result->title2ar;?>">


                                                             
                                                          </div>
                                                      </div>





                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg1;?>" width="50" height="50" />


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg2;?>" width="50" height="50" />
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

                                                      
                                                      <!--<div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required><?php //echo $result->description;?></textarea>
                                                      </div>-->
                                                     <div class="row mb-3">

                                                     <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title3 English</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" maxlength=50 placeholder="Enter Title3" value="<?php echo $result->title3;?>">
                                                          </div>
                                                         
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Title4 English:</label>
                                                              <input type="text" class="form-control" id="title4" name="title4" maxlength=50 placeholder="Enter Title4" value="<?php echo $result->title4;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">

<div class="col-md-6">
         <label for="email" class="form-label text-primary">Title3 Arabic</label>
         <input type="text" class="form-control" id="title3ar" name="title3ar" maxlength=50 placeholder="Enter Title3 Arabic" value="<?php echo $result->title3ar;?>">
     </div>
    
     <div class="col-md-6">
         <label for="website" class="form-label text-primary">Title4 Arabic:</label>
         <input type="text" class="form-control" id="title4ar" name="title4ar" maxlength=50 placeholder="Enter Title4 Arabic" value="<?php echo $result->title4ar;?>">
     </div>
 </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title5 English</label>
                                                              <input type="text" class="form-control" id="title5" name="title5" maxlength=50 placeholder="Enter Title5" value="<?php echo $result->title5;?>">
                                                          </div>
                                                          
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Title6 English:</label>
                                                              <input type="text" class="form-control" id="title6" name="title6" maxlength=50 placeholder="Enter Title6" value="<?php echo $result->title6;?>">
                                                          </div>
                                                        
                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title5 Arabic</label>
                                                              <input type="text" class="form-control" id="title5ar" name="title5ar" maxlength=50 placeholder="Enter Title5" value="<?php echo $result->title5ar;?>">
                                                          </div>
                                                          
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Title6 Arabic:</label>
                                                              <input type="text" class="form-control" id="title6ar" name="title6ar" maxlength=50 placeholder="Enter Title6" value="<?php echo $result->title6ar;?>">
                                                          </div>
                                                        
                                                      </div>




                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title7 </label>
                                                              <input type="text" class="form-control" id="title7" name="title7" maxlength=50 placeholder="Enter Title7" value="<?php echo $result->title7;?>">
                                                          </div>
                                                          
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">World Wide Branch:</label>
                                                              <input type="text" class="form-control" id="count1" name="count1" maxlength=50 placeholder="Enter Count1" value="<?php echo $result->count1;?>">
                                                          </div>
                                                        
                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Mordern Transport </label>
                                                              <input type="text" class="form-control" id="count2" name="count2" maxlength=50 placeholder="Enter Count2" value="<?php echo $result->count2;?>">
                                                          </div>
                                                          
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Awards Winning:</label>
                                                              <input type="text" class="form-control" id="count3" name="count3" maxlength=50 placeholder="Enter Count3" value="<?php echo $result->count3;?>">
                                                          </div>
                                                        
                                                      </div>







                                                      <div class="row mb-3">


                                                      <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image3:</label>
                                                              <input type="text" class="form-control" id="alttagimg3" name="alttagimg3" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg3;?>">
                                          
                                                          </div>
                                                      
                                                         
                                                          <div class="col-md-6">
                                                          <label for="designation" class="form-label text-primary">Service Image:</label>
                                                              <input type="file" class="form-control" id="image3" name="image3">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->serviceimg;?>" width="50" height="50" />
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="company-name" class="form-label text-primary">Alt Tag Image4:</label>
                                                              <input type="text" class="form-control" id="alttagimg4" name="alttagimg4" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg4;?>">
                                                          </div>
                                                         
                                                          <div class="col-md-6">
                                                          <label for="designation" class="form-label text-primary">Image4:</label>
                                                              <input type="file" class="form-control" id="image4" name="image4">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg4;?>" width="50" height="50" />
                                                          </div>
                                                      </div>





                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title7 Arabic </label>
                                                              <input type="text" class="form-control" id="title7ar" name="title7ar" maxlength=50 placeholder="Enter Title7 Arabic" value="<?php echo $result->title7ar;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title8 English </label>
                                                              <input type="text" class="form-control" id="title8" name="title8" maxlength=50 placeholder="Enter Title8 English" value="<?php echo $result->title8;?>">
                                                          </div>
                                                          
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title8 Arabic </label>
                                                              <input type="text" class="form-control" id="title8ar" name="title8ar" maxlength=50 placeholder="Enter Title8 Arabic" value="<?php echo $result->title8ar;?>">
                                                          </div>
                                                         
                                                          
                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description1 English :</label>
                                                          <textarea class="form-control" id="description1" name="description1" rows="4" placeholder="Enter description1 English" required maxlength="1330"><?php echo $result->description1;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description1 Arabic:</label>
                                                          <textarea class="form-control" id="description1ar" name="description1ar" rows="4" placeholder="Enter description1 Arabic" required maxlength="1330"><?php echo $result->descriptionar1;?></textarea>
                                                          </div>



                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description2 English:</label>
                                                          <textarea class="form-control" id="description2" name="description2" rows="4" placeholder="Enter description2 English" required maxlength="1330"><?php echo $result->description2;?></textarea>
                                                      </div>
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description2 Arabic:</label>
                                                          <textarea class="form-control" id="description2ar" name="description2ar" rows="4" placeholder="Enter description2 Arabic" required maxlength="1330"><?php echo $result->descriptionar2;?></textarea>
                                                      </div>    </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description3 English:</label>
                                                          <textarea class="form-control" id="description3" name="description3" rows="4" placeholder="Enter description3 English" required maxlength="1330"><?php echo $result->description3;?></textarea>
                                                      </div>



                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description3 Arabic:</label>
                                                          <textarea class="form-control" id="description3ar" name="description3ar" rows="4" placeholder="Enter description3 Arabic" required maxlength="1330"><?php echo $result->descriptionar3;?></textarea>
                                                      </div>

                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description4 English:</label>
                                                          <textarea class="form-control" id="description4" name="description4" rows="4" placeholder="Enter description4 English" required maxlength="1330"><?php echo $result->description4;?></textarea>
                                                      </div>



                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Description4 Arabic:</label>
                                                          <textarea class="form-control" id="description4ar" name="description4ar" rows="4" placeholder="Enter description4 Arabic" required maxlength="1330"><?php echo $result->descriptionar4;?></textarea>
                                                      </div>


                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Footer English:</label>
                                                          <textarea class="form-control" id="description5" name="description5" rows="4" placeholder="Enter description5 English" required maxlength="1330"><?php echo $result->description5;?></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Footer Arabic:</label>
                                                          <textarea class="form-control" id="description5ar" name="description5ar" rows="4" placeholder="Enter description5 Arabic" required maxlength="1330"><?php echo $result->descriptionar5;?></textarea>
                                                      </div>



                                                      </div>

                                                     


                                                      </div>

                                                      

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag English:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tag English"><?php echo $result->metatag;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Arabic:</label>
                                                          <textarea class="form-control" id="metatagar" name="metatagar" rows="20" placeholder="Enter Meta Tag Arabic"><?php echo $result->metatagar;?></textarea>
                                                      </div>



                                                      
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
$('#edithomepage').on('submit', function (e) {
    e.preventDefault();
//alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var file_data3 = $('#image3').prop('files')[0];
        var file_data4 = $('#image4').prop('files')[0];
        var maintitle=$('#maintitle').val();
      var subtitle=$("#subtitle").val();
      var title3=$("#title3").val();
      var title4=$("#title4").val();
      var title5=$("#title5").val();
      var title6=$("#title6").val();
      var title7=$("#title7").val();
      var title8=$("#title8").val();

      var maintitle2=$('#maintitle2').val();
      var subtitle2=$("#subtitle2").val();
      var title3ar=$("#title3ar").val();
      var title4ar=$("#title4ar").val();
      var title5ar=$("#title5ar").val();
      var title6ar=$("#title6ar").val();
      var title7ar=$("#title7ar").val();
      var title8ar=$("#title8ar").val();


      var count1=$("#count1").val();
        var count2=$("#count2").val();
        var count3=$("#count3").val();
       
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var alttagimg3=$("#alttagimg3").val();
        var alttagimg4=$("#alttagimg4").val();
        var metatag=$("#metatag").val();
        var metatagar=$("#metatagar").val();
        var description1=$("#description1").val();
        var description2=$("#description2").val();
        var description3=$("#description3").val();
        var description4=$("#description4").val();
        var description5=$("#description5").val();
       // var description6=$("#description6").val();

        var description1ar=$("#description1ar").val();
        var description2ar=$("#description2ar").val();
        var description3ar=$("#description3ar").val();
        var description4ar=$("#description4ar").val();
        var description5ar=$("#description5ar").val();
        //var description6ar=$("#description6ar").val();

        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('image3', file_data3);
        form_data.append('image4', file_data4);

        form_data.append('maintitle',maintitle);
        form_data.append('subtitle',subtitle);
        form_data.append('title3',title3);
        form_data.append('title4',title4);
        form_data.append('title5',title5);
        form_data.append('title6',title6);
        form_data.append('title7',title7);
        form_data.append('title8',title8);
        
       
        form_data.append('maintitle2',maintitle2);
        form_data.append('subtitle2',subtitle2);
        form_data.append('title3ar',title3ar);
        form_data.append('title4ar',title4ar);
        form_data.append('title5ar',title5ar);
        form_data.append('title6ar',title6ar);
        form_data.append('title7ar',title7ar);
        form_data.append('title8ar',title8ar);


        
        
        form_data.append('description1',description1);
        form_data.append('description2',description2);
        form_data.append('description3',description3);
        form_data.append('description4',description4);
        form_data.append('description5',description5);
        //form_data.append('description6',description6);

        form_data.append('description1ar',description1ar);
        form_data.append('description2ar',description2ar);
        form_data.append('description3ar',description3ar);
        form_data.append('description4ar',description4ar);
        form_data.append('description5ar',description5ar);
       // form_data.append('description6ar',description6ar);


        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('alttag3',alttagimg3);
        form_data.append('alttag4',alttagimg4);
        form_data.append('metatag',metatag);
        form_data.append('metatagar',metatagar);
        form_data.append('count1',count1);
        form_data.append('count2',count2);
        form_data.append('count3',count3);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/edithomepageprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('#image3').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#sermsg').html(response); // display success response from the server
              window.location.href ="<?php echo base_url().'Welcome/listhomepage';?>";
            },
            error: function (response) {
               // $('#sermsg').html(response); // display error response from the server
               window.location.href ="<?php echo base_url().'Welcome/listhomepage';?>";
            }
        });
    });






</script>