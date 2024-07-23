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
                            <span id="menumsg" style="color:green"></span><br>
                              <div class="description-sec">
                                <h2>Add Menu</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="menufrm" class="rounded-form" method="post"  action="<?php echo base_url().'Welcome/addmenuprocess';?>" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Menu Name:</label>
                                                              <input type="text" class="form-control" id="menuname" name="menuname" placeholder="Enter Menu Name" maxlength="50" required>
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                        
                                                                
                                                          <label for="company-name" class="form-label text-primary">Menu Name Arabic:</label>
                                                              <input type="text" class="form-control" id="menunamear" name="menunamear" placeholder="Enter Menu Name Arabic" maxlength="50" required>
                                                         
                                                                    

                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Menu Url:</label>
                                                              <input type="text" class="form-control" id="menuurl" name="menuurl" placeholder="Enter Menu Url">
                                                          </div>
                                                          <div class="col-md-6">
                                                          <label for="designation" class="form-label text-primary">Select Menu Type:</label>
                                                          <select class="form-control" placeholder="Product Category Name" name="menutype" id="menutype"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Menu Type</option>
                                                                <option value="1">Top Menu </option>
                                                                <option value="2">Sub Menu </option>
</select>

                                                          </div>
                                                      </div>

                                                      
                                                      
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Parent Menu:</label>
                                                          <select class="form-control"  name="pmenu" id="pmenu"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Parent Menu</option>
                                                                <option value='-1'>No Parent Menu</option>
                                                               <?php foreach($pmenus as $menu){?>
                                                                <option value="<?php echo $menu['menuid'];?>"><?php echo $menu['menuname'];?></option>
                                                            
                                                            <?php }?></select>
                                                             </div>
                                                             <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Menu Icon Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                          </div>   
                                                      </div>
                                                    
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Order No:</label>
                                                              <input type="text" class="form-control numericvalidate" id="orderno" name="orderno" placeholder="Enter Order No" required>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Menu Icon Image Alt attribute:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1"  placeholder="Enter Alt attribute" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>
                                                                    
                                                    

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Status:</label>
                                                              
                                                              <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1">Active </option>
                                                                <option value="0">Inactive </option>
</select>


                                                          </div>
                                                          <!--div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div---> </div></div>
                                                      
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listmenus';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadmenu" >Submit</button>
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
$('#menufrm').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var menuname=$('#menuname').val();
        var menuurl=$("#menuurl").val();
        var menutype=$("#menutype").val();
        var status=$("#status").val();
        var orderno=$("#orderno").val();
        var pmenu=$("#pmenu").val();
        var menunamear=$('#menunamear').val();
        var file_data1 = $('#image1').prop('files')[0];
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        form_data.append('menunamear',menunamear);
        form_data.append('menuname',menuname);
        form_data.append('menutype',menutype);
        form_data.append('menuurl',menuurl);
        form_data.append('status',status);
        form_data.append('pmenu',pmenu);
        form_data.append('image1', file_data1);
        form_data.append('alttag1',alttagimg1);
        form_data.append('orderno',orderno);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/addmenuprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $('#image1').val('');
    $("#description").val('');
    $('#pmenu').val('');
    $('#menutype').val('');
    $("#description").val('');
    $("#status").val('');
                $('#menumsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#menumsg').html(response); // display error response from the server
            }
        });
    });






</script>

   