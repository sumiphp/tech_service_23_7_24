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
                                <h2>Edit Team Members</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edit" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result->socialmediaid;?>"    />
                                                              <label for="company-name" class="form-label text-primary">Facebook Link:</label>
                                                              <input type="text" class="form-control" id="testtitle" name="testtitle" placeholder="Facebook Link" value="<?php echo $result->facebook;?>"  required maxlength="25" >
                                          
                                                          </div>


                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Twitter Link:</label>
                                                              <input type="text" class="form-control" id="testtitlear" name="testtitlear" value="<?php echo $result->twitter;?>"  placeholder="Twitter Link" required maxlength="25" >
                                          
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Be Link:</label>
                                                              <input type="text" class="form-control" id="testtitle1" name="testtitle1"  value="<?php echo $result->instagram;?>"  placeholder="Be Link" required maxlength="25" >
                                          
                                                          </div>


                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">You tube Link:</label>
                                                              <input type="text" class="form-control" id="testtitlear1" name="testtitlear1" value="<?php echo $result->youtube;?>"  placeholder="You tube Link" required maxlength="25" >
                                          
                                                          </div>
                                                      </div>
                                                    
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Name:</label>
                                                              <input type="text" class="form-control" id="name" name="name" value="<?php echo $result->name;?>"  required placeholder="Enter Name">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Designation:</label>
                                                              <input type="text" class="form-control" id="place" name="place" value="<?php echo $result->designation;?>"  placeholder="Enter Designation"  required>
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Name Arabic:</label>
                                                              <input type="text" class="form-control" id="namear" name="namear" value="<?php echo $result->namear;?>"  required placeholder="Enter Name Arabic">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Designation Arabic:</label>
                                                              <input type="text" class="form-control" id="placear" name="placear" value="<?php echo $result->designationar;?>"  placeholder="Enter Designation Arabic"  required>
                                                          </div>
                                                          
                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required value="<?php echo $result->alttagimg1;?>"  placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                          
                                                          </div>

    
                                                          <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Status:</label>
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status1"  data-bs-original-title="" title="" required>
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
                                                         
                                                              <label for="company-logo" class="form-label text-primary">Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1"  >
                                                              <img src="<?php echo base_url().'uploads/teammembers/'.$result->picture;?>"  width="50" height="50" />
                                                       
                                                         </div> 
                                                          <!--div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div--->
                                                      </div>
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listteammembers';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
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
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var testtitle=$('#testtitle').val();
        var testtitlear=$('#testtitlear').val();
        var testtitle1=$('#testtitle1').val();
        var testtitlear1=$('#testtitlear1').val();
        /*var rating=$("#rating").val();
        var description=$("#description").val();
        var descriptionar=$("#descriptionar").val();
        var date=$("#date").val();*/
        var name=$("#name").val();
        var place=$("#place").val();
        var id=$('#id').val();
        
        var namear=$("#namear").val();
        var placear=$("#placear").val();

        
        var alttagimg1=$("#alttagimg1").val();
        var status=$("#status1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('alttag1',alttagimg1);
        form_data.append('testtitle',testtitle);
        form_data.append('testtitlear',testtitlear);
        form_data.append('testtitle1',testtitle1);
        form_data.append('testtitlear1',testtitlear1);
        form_data.append('name',name);
        form_data.append('place',place);
        form_data.append('id',id);
        form_data.append('namear',namear);
        form_data.append('placear',placear);
        //form_data.append('date',date);
        form_data.append('status',status);
        $.ajax({
            url: "<?php echo base_url().'Welcome/edittmprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
               // $('#date').val('');
               // $('#rating').val('');
               // $('#description').val('');
               // $('#descriptionar').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    window.location.href ="<?php echo base_url().'Welcome/listteammembers';?>";
            },
            error: function (response) {
                window.location.href ="<?php echo base_url().'Welcome/listteammembers';?>";
            }
        });
    });






</script>

    </body>
 