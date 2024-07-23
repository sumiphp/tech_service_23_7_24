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
                                <h2>Edit Projects</h2>
                                <div class="row">
                                <span id="solmsg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edit" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/projects/'.$result->picture;?>" width="50" height="50" />
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
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result->imgid;?>" placeholder="Enter Menu Name" required>
                                                          </div>




                                                          <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Type:</label>   
                                                          <select class="form-control" placeholder="Select Type" name="type" id="type"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Type</option>
                                                                <option value="2" <?php if ($result->type=='2'){?> selected <?php }?>>Home Page Top images </option>
                                                                <option value="1" <?php if ($result->type=='1'){?> selected <?php }?>>Quality services </option>
                                                                <option value="0" <?php if ($result->type=='0'){?> selected <?php }?>>Projects </option>
</select> 
                                                          </div>


                                                         
                                                      </div>


                                                 


                                                       <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title:</label>
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" required maxlength="25" value="<?php echo $result->title;?>">
                                                          </div>
                                                         <div class="col-md-6">
                                                         <label for="contact-person" class="form-label text-primary">Title Arabic:</label>
                                                              <input type="text" class="form-control" id="titlear" name="titlear" placeholder="Enter Title Arabic" required maxlength="25" value="<?php echo $result->titlear;?>">
                                                          </div>
                                                      </div>


                                                     
                                                      <!--<div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required maxlength="170"></textarea>
                                                      </div>---->
                                                    
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listprojects';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
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
$('#edit').on('submit', function (e) {
    e.preventDefault();
    //alert("add");
       var file_data1 = $('#image1').prop('files')[0];
       
        var prd=$('#prd').val();
        var status=$("#status").val();
        var id=$('#id').val();
        var title=$('#title').val();
       var titlear=$('#titlear').val();
        //var title3=$('#title3').val();
        var type=$('#type').val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('prd',prd);
        form_data.append('title',title);
        form_data.append('titlear',titlear);
        form_data.append('type',type);
        form_data.append('id',id);
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
        //form_data.append('display',display);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editprojectsprocess';?>", // point to server-side controller method
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
    
                //$('#solmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listprojects';?>";

            },
            error: function (response) {
                //$('#solmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listprojects';?>";

            }
        });
    });






</script>

    </body>
    