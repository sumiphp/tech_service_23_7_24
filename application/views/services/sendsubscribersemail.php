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
                                <h2>Send Email</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edit" class="rounded-form" method="post" action="<?php echo base_url().'Welcome/editemail';?>">
 
                                                    <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Subject:</label>
                                                          <input type="text" class="form-control" id="subject" name="subject" required placeholder="Enter Subject" value="<?php //echo $result->alttagimg1;?>">
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Message:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" maxlength="380" placeholder="Enter Message"><?php //echo $result->newsletterdescription;?></textarea>
                                                      </div>
                                                     
                                                      
                                                      
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub1" >Submit</button>
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
		
        
        </body>
    <?php include_once("footer.php");?>

            


     
        <script>
$('#uploadsub').on('click', function (e) {
    e.preventDefault();
    //alert("enter");
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        //var testtitle=$('#testtitle').val();
        //var rating=$("#rating").val();
        var description=$("#description").val();
        var subject=$("#subject").val();
        //var place=$("#place").val();
        //var date=$("#date").val();
        
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        //form_data.append('testtitle',testtitle);
        form_data.append('subject',subject);
        form_data.append('description',description);
        //form_data.append('name',name);
        //form_data.append('place',place);
        //form_data.append('date',date);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editemail';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#date').val('');
                $('#description').val('');
                /*$('input[type=text]').each(function() {
        $(this).val('');
    });*/
                //$('#testmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/newslettersubscribers';?>";
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/newslettersubscribers';?>";
            }
        });
    });






</script>

  