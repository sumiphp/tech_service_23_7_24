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
                                <h2>Edit Service Details</h2>
                                <div class="row">
                                <span id="msg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="add" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <!--label for="company-name" class="form-label text-primary">Enter Title1:</label>
                                                              <input type="text" class="form-control" id="title1" name="title1" placeholder="Enter Title1" required maxlength="25"-->
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Service Details Picture:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt tag Package Picture" value="<?php echo $result1->alttagimg1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Service Details Picture:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" >
                                                              <img src="<?php echo base_url().'uploads/servicedetails/'.$result1->picture;?>" width="50" height="50" />
                                                          </div>
                                                      </div>
                                                      <!--div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Title2:</label>
                                                              <input type="text" class="form-control" id="title2" name="title2" placeholder="Enter Title2" required maxlength="25">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Service Details Picture:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt tag Package Picture" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div-->


              

                                                                                                                   <!--div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title3:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" placeholder="Enter Title3" required maxlength="25">
                                                          

                                                              <label for="Rating" class="form-label text-primary">Rating:</label>
                                                          <select class="form-control" placeholder="Select Status" id="rating" name="rating"  data-bs-original-title="" title="" required>
                                                              <option value=''>Select Rating</option>
                                                                <option value="1" >1 </option>
                                                                <option value="2" >2</option>
                                                                <option value="3">3 </option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
</select></div--->
                                                               





                                                    



                                                      <!--div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Title3:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" placeholder="Enter Title3" required maxlength="25">
                                                          </div>
                                                          <div class="col-md-6">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Title4:</label>
                                                              <input type="text" class="form-control" id="title4" name="title4" placeholder="Enter Enter Title4" required maxlength="25">
                                                          </div>
                                                          </div>
                                                      </div-->

                                                      <!--div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Duration:</label>
                                                              <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter Duration" required maxlength="25">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Package Rate:</label>
                                                              <input type="text" class="form-control" id="packagerate" name="packagerate" required placeholder="Enter Package Rate" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Package Type:</label>
                                                              <select class="form-control" placeholder="Enter Package Type" id="packagetype" name="packagetype"  data-bs-original-title="" title="" required>
                                                              <option value=''>Select Package Type</option>
                                                                <option value="1">Package </option>
                                                                <option value="2">Couple's Retreat</option>
                                                                <option value="3">Premium Packages</option>
                                                              </select>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Package Title:</label>
                                                              <input type="text" class="form-control" id="packagetitle" name="packagetitle" required placeholder="Enter Package Title" value="<?php //echo $result->alttagimg1;?>">
</div>
                                                      </div-->


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Service Details:</label>
                                                              <select class="form-control" placeholder="Enter Packages" id="service" name="service"   data-bs-original-title="" title="" required>
                                                              <option value=''>Select Services</option>
                                                              <?php 
                                                    
                                                    
                                                    
                                                    foreach($result as $res){?>
                                                     <option value="<?php echo $res['contentid'];?>" <?php if ($res['contentid']==$result1->serviceid){?>selected <?php } ?>><?php echo $res['title'];?></option>

                                                    <?php }?>
                                                                <!--option value="1">Package </option>
                                                                <option value="2">Couple's Retreat</option>
                                                                <option value="3">Premium Packages</option-->
                                                              </select>
                                                          </div>


                                                          <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result1->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result1->active=='0'){?> selected <?php }?>>Inactive </option>
</select> </div>
                                                        
                                                      </div>

                                                     
                                                     

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description English1:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description English1" required maxlength="200" minlength="170"><?php echo $result1->description;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description Arabic1:</label>
                                                          <textarea class="form-control" id="descriptionar" name="descriptionar" rows="3" placeholder="Enter Description Arabic1" required maxlength="200" ><?php echo $result1->descriptionar;?></textarea>
                                                          </div>


                                                      </div>
                                                    

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description English2:</label>
                                                          <textarea class="form-control" id="description2" name="description2" rows="3" placeholder="Enter Description English2" required maxlength="200" minlength="170"><?php echo $result1->description2;?></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description Arabic2:</label>
                                                          <textarea class="form-control" id="descriptionar2" name="descriptionar2" rows="3" placeholder="Enter Description Arabic2" required maxlength="200" ><?php echo $result1->descriptionar2;?></textarea>
                                                      </div>




                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description English3:</label>
                                                          <textarea class="form-control" id="description3" name="description3" rows="3" placeholder="Enter Description English3" required maxlength="200" minlength="170"><?php echo $result1->description3;?></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description Arabic3:</label>
                                                          <textarea class="form-control" id="descriptionar3" name="descriptionar3" rows="3" placeholder="Enter Description Arabic3" required maxlength="200" ><?php echo $result1->descriptionar3;?></textarea>
                                                      </div>



                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description English4:</label>
                                                          <textarea class="form-control" id="description4" name="description4" rows="3" placeholder="Enter Description English4" required maxlength="200" minlength="170"><?php echo $result1->description4;?></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Enter Description Arabic4:</label>
                                                          <textarea class="form-control" id="descriptionar4" name="descriptionar4" rows="3" placeholder="Enter Description Arabic4" required maxlength="200" ><?php echo $result1->descriptionar4;?></textarea>
                                                      </div>
                                                      <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result1->contentid;?>" placeholder="Enter Menu Name" required>


                                                      </div>
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listservicedetails';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
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
       
        
       var status=$("#status").val();
       var service=$("#service").val();
       
        
       var description=$('#description').val();
       var description2=$('#description2').val();
       var description3=$('#description3').val();
       var description4=$('#description4').val();
        var alttagimg1=$("#alttagimg1").val();
        var descriptionar=$('#descriptionar').val();
       var descriptionar2=$('#descriptionar2').val();
       var descriptionar3=$('#descriptionar3').val();
       var descriptionar4=$('#descriptionar4').val();
       var id=$('#id').val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        
         form_data.append('description',description);
        form_data.append('description2',description2);
        form_data.append('description3',description3);
        form_data.append('description4',description4);
       form_data.append('descriptionar',descriptionar);
        form_data.append('descriptionar2',descriptionar2);
        form_data.append('descriptionar3',descriptionar3);
        form_data.append('descriptionar4',descriptionar4);
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
        form_data.append('id',id);
        form_data.append('alttagimg1',alttagimg1);
        
        //form_data.append('packagetitle',packagetitle);
        form_data.append('service',service);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editservicesdetailsprocess';?>", // point to server-side controller method
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
    
    window.location.href ="<?php echo base_url().'Welcome/listservicedetails';?>";
            },
            error: function (response) {
                window.location.href ="<?php echo base_url().'Welcome/listservicedetails';?>";
            }
        });
    });






</script>

    </body>
    