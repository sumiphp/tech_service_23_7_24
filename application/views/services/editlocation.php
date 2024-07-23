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
                                <h2>Edit Location</h2>
                                <div class="row">
                                <span id="solmsg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="add" class="rounded-form" method="post" >
                                                      
                                                     


                                                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result->locationid;?>" placeholder="Enter Menu Name" required>    


                                                       <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Location:</label>
                                                              <input type="text" class="form-control" id="title" name="title" value="<?php echo $result->location;?>" placeholder="Enter Location" required maxlength="25">
                                                          </div>
                                                         <div class="col-md-6">
                                                         <label for="contact-person" class="form-label text-primary">Location Arabic:</label>
                                                              <input type="text" class="form-control" id="titlear" name="titlear" value="<?php echo $result->locationarabic;?>" placeholder="Enter Location Arabic" required maxlength="25">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select> 
                                                          </div>




                                                          <div class="col-md-6">
                                                          
                                                          </div>


                                                         
                                                      </div>


                                                     
                                                      <!--<div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required maxlength="170"></textarea>
                                                      </div>---->
                                                    
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listlocation';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
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
$('#add').on('submit', function (e) {
    e.preventDefault();
    //alert("add");
       //var file_data1 = $('#image1').prop('files')[0];
       
        //var prd=$('#prd').val();
        var status=$("#status").val();
        var id=$('#id').val();
        var title=$('#title').val();
       var titlear=$('#titlear').val();
        //var title3=$('#title3').val();
       
        var form_data = new FormData();
       
        form_data.append('title',title);
        form_data.append('titlear',titlear);
        form_data.append('id',id);
        form_data.append('status',status);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editlocationprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
               
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    
                //$('#solmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listlocation';?>";
            },
            error: function (response) {
                //$('#solmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listlocation';?>";

            }
        });
    });






</script>

    </body>
    