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
                              <div class="description-sec">
                                <h2>Edit Carousel</h2>
                                <div class="row">
                                <span id="msg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editcarousal" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Title1:</label>
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title1" required maxlength="300" value="<?php echo $result->title;?>" >
                                                              <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result->carouselid;?>" placeholder="Enter Menu Name" required>
                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="company-name" class="form-label text-primary">Title1 Arabic:</label>
                                                              <input type="text" class="form-control" id="titlear" name="titlear" placeholder="Enter Title1 Arabic" required maxlength="300" value="<?php echo $result->titlear;?>" >
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title2:</label>
                                                              <input type="text" class="form-control" id="title2" name="title2" placeholder="Enter Title2" required maxlength="300" value="<?php echo $result->title2;?>">
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Title2 Arabic:</label>
                                                              <input type="text" class="form-control" id="title2ar" name="title2ar" placeholder="Enter Title2 Arabic" required maxlength="300" value="<?php echo $result->title2ar;?>">



                                                             
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                    

                                                                                                                   <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title3:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" placeholder="Enter Title3"  maxlength="300" value="<?php echo $result->title3;?>">
                                                          </div>

                                                         

                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title3 Arabic:</label>
                                                              <input type="text" class="form-control" id="title3ar" name="title3ar" placeholder="Enter Title3 Arabic"  maxlength="300" value="<?php echo $result->title3ar;?>">
                                                          </div>


                                                


                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title4:</label>
                                                              <input type="text" class="form-control" id="title4" name="title4" placeholder="Enter Title4" maxlength="300" value="<?php echo $result->title4;?>">
                                                          </div>
                                                          
                                                          <div class="col-md-6">
                                                          <label for="contact-person" class="form-label text-primary">Title4 Arabic:</label>
                                                              <input type="text" class="form-control" id="title4ar" name="title4ar" placeholder="Enter Title4 Arabic"  maxlength="300"  value="<?php echo $result->title4ar;?>">
                                                          </div>
                                                       
                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="alttagimg1" class="form-label text-primary">Alt tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/carousel/'.$result->picture;?>" width="50" height="50" />
                                                          </div>
                                                      </div>







                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select> </div>

                                                                                                                   
                                                      </div>




                                                     
                                                      <!--<div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required maxlength="170"></textarea>
                                                      </div>
                                                    
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listcarousel';?>" data-bs-original-title="" title="">View/Edit  </a>---->
                                                      
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
		
        


            


        <?php include_once("footer.php");?>
        <script>
$('#editcarousal').on('submit', function (e) {
    e.preventDefault();
    //alert("add");
       var file_data1 = $('#image1').prop('files')[0];
       
        var title=$('#title').val();
        var status=$("#status").val();
        var id=$("#id").val();
        var title=$('#title').val();
        var title2=$('#title2').val();
        var title3=$('#title3').val();
        var title4=$('#title4').val();
        var titlear=$('#titlear').val();
        var title2ar=$('#title2ar').val();
        var title3ar=$('#title3ar').val();
        var title4ar=$('#title4ar').val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('title2',title2);
        form_data.append('title3',title3);
        form_data.append('title4',title4);
        form_data.append('maintitle',title);
        form_data.append('id',id);
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
        form_data.append('title2ar',title2ar);
        form_data.append('title3ar',title3ar);
        form_data.append('title4ar',title4ar);
        form_data.append('maintitlear',titlear);
       
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editcarousalprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
               
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    
                //$('#msg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listcarousel';?>";
            },
            error: function (response) {
                //$('#msg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listcarousel';?>";
            }
        });
    });






</script>

    </body>
    