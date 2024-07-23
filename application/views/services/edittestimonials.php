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
                            <span id="testmsg"></span><br>
                              <div class="description-sec">
                                <h2>Edit Testimonials</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edittestimonial" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Testimonial Title English:</label>
                                                              <input type="text" class="form-control" id="testtitle" name="testtitle" placeholder="Testimonial Title" maxlength="25" value="<?php echo $result->title;?>" required>
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">Testimonial Title Arabic:</label>
                                                              <input type="text" class="form-control" id="testtitlear" name="testtitlear" placeholder="Testimonial Title Arabic" maxlength="25" value="<?php echo $result->titlear;?>" required>
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <!--<label for="contact-person" class="form-label text-primary">Rating:</label>
                                                              <input type="text" class="form-control numericvalidate" id="rating" name="rating" placeholder="Enter Rating" value="<?php //echo $result->rating;?>" required>-->
                                                              <label for="status" class="form-label text-primary">Rating:</label>
                                                          <select class="form-control" placeholder="Select Status" id="rating" name="rating"  data-bs-original-title="" title="" required>
                                                              <option value=''>Select Rating</option>
                                                                <option value="1" <?php if ($result->rating=='1'){?> selected <?php }?>>1 </option>
                                                                <option value="2" <?php if ($result->rating=='2'){?> selected <?php }?>>2</option>
                                                                <option value="3" <?php if ($result->rating=='3'){?> selected <?php }?>>3 </option>
                                                                <option value="4" <?php if ($result->rating=='4'){?> selected <?php }?>>4</option>
                                                                <option value="5" <?php if ($result->rating=='5'){?> selected <?php }?>>5</option>
</select>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Date Posted:</label>
                                                              <input type="date" class="form-control" id="date" name="date" value="<?php echo $result->date;?>" required>
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Name:</label>
                                                              <input type="text" class="form-control" id="name" name="name" value="<?php echo $result->name;?>" required>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Place:</label>
                                                              <input type="text" class="form-control" id="place" name="place" required placeholder="Enter Place" value="<?php echo $result->place;?>" required>
                                                          </div>
                                                          
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Name Arabic:</label>
                                                              <input type="text" class="form-control" id="namear" name="namear" value="<?php echo $result->namear;?>" required>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Designation Arabic:</label>
                                                              <input type="text" class="form-control" id="placear" name="placear" required placeholder="Enter Designation Arabic" value="<?php echo $result->placear;?>" required>
                                                          </div>
                                                          
                                                      </div>
                                                      





                                                      
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>" required>
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Status:</label>
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select>


                                                             
</div>
                                                      </div>
                                                      <!--<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-number-1" class="form-label text-primary">Contact Number 1:</label>
                                                              <div class="input-group">
                                                                  <input type="tel" class="form-control" id="contact-number-1" name="contact-number-1" placeholder="Enter contact number 1">
                                                                  <div class="input-group-append">
                                                                      <div class="form-check mx-3">
                                                                          <input class="form-check-input" type="checkbox" id="whatsapp-1" name="whatsapp-1">
                                                                          <label class="form-check-label" for="whatsapp-1">WhatsApp</label>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-number-2" class="form-label text-primary">Contact Number 2:</label>
                                                              <div class="input-group">
                                                                  <input type="tel" class="form-control" id="contact-number-2" name="contact-number-2" placeholder="Enter contact number 2">
                                                                  <div class="input-group-append">
                                                                      <div class="form-check mx-3">
                                                                          <input class="form-check-input" type="checkbox" id="whatsapp-2" name="whatsapp-2">
                                                                          <label class="form-check-label" for="whatsapp-2">WhatsApp</label>
                                                                      </div>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                      </div>-->
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Testimonial:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" required placeholder="Enter Testimonial Description" maxlength="250"><?php echo $result->testimonial;?></textarea>
                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Testimonial Arabic:</label>
                                                          <textarea class="form-control" id="descriptionar" name="descriptionar" rows="3" required placeholder="Enter Testimonial Description Arabic" maxlength="250"><?php echo $result->testimonialar;?></textarea>

                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <!--div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Email:</label>
                                                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div-->

                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" >
                                                              <img src="<?php echo base_url().'uploads/testimonial/'.$result->image;?>"  width="50" height="50" />
                                                          </div>
                                                          <!--div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div-->
                                                      </div>
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listtestimonials';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
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
$('#edittestimonial').on('submit', function (e) {
    e.preventDefault();
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var testtitle=$('#testtitle').val();
        var testtitlear=$('#testtitlear').val();
        var rating=$("#rating").val();
        var description=$("#description").val();
        var descriptionar=$("#descriptionar").val();
        var name=$("#name").val();
        var place=$("#place").val();

        var namear=$("#namear").val();
        var placear=$("#placear").val();
        var date=$("#date").val();
        var alttagimg1=$("#alttagimg1").val();
        var status=$("#status").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('status',status);
        form_data.append('testtitle',testtitle);
        form_data.append('testtitlear',testtitlear);
        form_data.append('rating',rating);
        form_data.append('description',description);
        form_data.append('name',name);
        form_data.append('place',place);
        form_data.append('descriptionar',descriptionar);
        form_data.append('namear',namear);
        form_data.append('placear',placear);


        form_data.append('date',date);
        form_data.append('alttag1',alttagimg1);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/edittestimonialsprocess/'.$this->uri->segment(3);?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#date').val('');
                $('#description').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#testmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listtestimonials';?>";
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listtestimonials';?>";
            }
        });
    });






</script>

   