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
                                <h2>Add Service Details</h2>
                                <div class="row">
                                <span id="msg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="add" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Place:</label>
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Place" required maxlength="25">
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Travel Details Picture:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" required>
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Country:</label>
                                                              <input type="text" class="form-control" id="title2" name="title2" placeholder="Enter Country" required maxlength="25">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Travel Details Picture:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt tag Product Picture" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1">Active </option>
                                                                <option value="0">Inactive </option>
</select> </div>

                                                                                                                   <div class="col-md-6">
                                                              <!--label for="contact-person" class="form-label text-primary">Title3:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" placeholder="Enter Title3" required maxlength="25">-->
                                                          

                                                              <label for="Rating" class="form-label text-primary">Rating:</label>
                                                          <select class="form-control" placeholder="Select Status" id="rating" name="rating"  data-bs-original-title="" title="" required>
                                                              <option value=''>Select Rating</option>
                                                                <option value="1" >1 </option>
                                                                <option value="2" >2</option>
                                                                <option value="3">3 </option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
</select></div>
                                                               





                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <!--label for="contact-person" class="form-label text-primary">Title4:</label>
                                                              <input type="text" class="form-control" id="title4" name="title4" placeholder="Enter Title4" required maxlength="25">--->
                                                          </div>
                                                          <!--<div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>--->
                                                      </div>


                                                     
                                                      <div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Travel Details Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required maxlength="170"></textarea>
                                                      </div>
                                                    
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listtraveldetails';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
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
       var file_data1 = $('#image1').prop('files')[0];
       
        var title=$('#title').val();
        var status=$("#status").val();
        
        var title=$('#title').val();
        var title2=$('#title2').val();
        var rating=$('#rating').val();
       var description=$('#description').val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('country',title2);
        form_data.append('description',description);
        form_data.append('rating',rating);
        form_data.append('place',title);
       
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/addtraveldetailsprocess';?>", // point to server-side controller method
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
    $('textarea').each(function() {
        $(this).val('');
    });

    $('select').each(function() {
        $(this).val('');
    });
    
                $('#msg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#msg').html(response); // display error response from the server
            }
        });
    });






</script>

    </body>
    