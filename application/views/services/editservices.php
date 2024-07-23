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
                                <h2>Edit Services</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="addservices" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Main Title:</label>
                                                              <input type="text" class="form-control" id="maintitle" name="maintitle" required placeholder="Enter Main Title"  maxlength=450 value="<?php echo $result->maintitle;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Subtitle:</label>
                                                              <input type="text" class="form-control" id="subtitle" name="subtitle" required placeholder="Enter Sub Title " maxlength=700 value="<?php echo $result->subtitle;?>">


                                                             
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Main Title Arabic:</label>
                                                              <input type="text" class="form-control" id="maintitle2" name="maintitle2" required placeholder="Enter Main Title Arabic"  maxlength=450 value="<?php echo $result->maintitlear;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Subtitle Arabic :</label>
                                                              <input type="text" class="form-control" id="subtitle2" name="subtitle2" required placeholder="Enter Sub Title Arabic" maxlength=700 value="<?php echo $result->subtitlear;?>">


                                                             
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Title3 Arabic:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" required placeholder="Enter Title3"  maxlength=450 value="<?php echo $result->title3;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Title3 Arabic :</label>
                                                              <input type="text" class="form-control" id="title3ar" name="title3ar" required placeholder="Enter Title3 Arabic" maxlength=700 value="<?php echo $result->title3ar;?>">


                                                             
                                                          </div>
                                                      </div>



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/services/'.$result->Image1;?>" width="50" height="50" />


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                              <img src="<?php echo base_url().'uploads/services/'.$result->Image2;?>" width="50" height="50" />
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



                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Services Description English:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="20" placeholder="Enter Description" required maxlength=1030><?php echo $result->description;?></textarea>
                                                      </div>

                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Services Description Arabic:</label>
                                                          <textarea class="form-control" id="descriptionar" name="descriptionar" rows="20" placeholder="Enter Description" required maxlength=1030><?php echo $result->descriptionar;?></textarea>
                                                      </div>


                                                      </div>

                                                      <div class="row mb-3">
                                                         <div class="col-md-6">

                                                          <label for="address" class="form-label text-primary">Services Details Description1 English:</label>
                                                          <textarea class="form-control" id="description2" name="description2" rows="20" placeholder="Enter Description2 English" required maxlength=1030><?php echo $result->description2;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">

<label for="address" class="form-label text-primary">Services Details Description1 Arabic:</label>
<textarea class="form-control" id="descriptionar2" name="descriptionar2" rows="20" placeholder="Enter Description1 Arabic" required maxlength=1030><?php echo $result->descriptionar2;?></textarea>
</div>



                                                      </div>

                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Services Details Description2 English:</label>
                                                          <textarea class="form-control" id="description3" name="description3" rows="20" placeholder="Enter Description2 English" required maxlength=1030><?php echo $result->description3;?></textarea>
                                                          </div>

                                                          <div class="col-md-6">
                                                          <label for="address" class="form-label text-primary">Services Details Description2 Arabic:</label>
                                                          <textarea class="form-control" id="descriptionar3" name="descriptionar3" rows="20" placeholder="Enter Description2 Arabic" required maxlength=1030><?php echo $result->descriptionar3;?></textarea>
                                                          </div>


                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage" required><?php echo $result->metatag;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Arabic:</label>
                                                          <textarea class="form-control" id="metatagar" name="metatagar" rows="20" placeholder="Enter Meta Tag Arabic"><?php echo $result->metatagar;?></textarea>
                                                      </div>
                                                      <!---<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Email:</label>
                                                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div>
                                                      </div>--->
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="button" class="btn btn-primary" id="uploadser" >Update</button>
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

    

    <!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script-->


        <script>
$(document).ready(function(){
  /*$("#save").click(function(){
    var description = CKEDITOR.instances['description'].getData();
    alert(description);
  });*/
CKEDITOR.replace('description');
CKEDITOR.replace('descriptionar');
CKEDITOR.replace('description2');
CKEDITOR.replace('descriptionar2');
CKEDITOR.replace('description3');
CKEDITOR.replace('descriptionar3');
//CKEDITOR.replace('description4');
//CKEDITOR.replace('descriptionar4');

});
</script>

     
        <script>
$('#uploadser').on('click', function (e) {
    e.preventDefault();
    //alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var maintitle=$('#maintitle').val();
        var subtitle=$("#subtitle").val();
        var maintitle2=$('#maintitle2').val();
        var subtitle2=$("#subtitle2").val();
        var title3=$("#title3").val();
        var title3ar=$("#title3ar").val();
        var description = CKEDITOR.instances['description'].getData();
        var description2 = CKEDITOR.instances['description2'].getData();
        var description3 = CKEDITOR.instances['description3'].getData();
        //var description4 = CKEDITOR.instances['description4'].getData();



        var descriptionar = CKEDITOR.instances['descriptionar'].getData();
        var descriptionar2 = CKEDITOR.instances['descriptionar2'].getData();
        var descriptionar3 = CKEDITOR.instances['descriptionar3'].getData();
        //var descriptionar4 = CKEDITOR.instances['descriptionar4'].getData();
        //var description3=$("#description3").val();
        var metatag=$("#metatag").val();
        var metatagar=$("#metatagar").val();
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('maintitle',maintitle);
        form_data.append('subtitle',subtitle);
        form_data.append('maintitle2',maintitle2);
        form_data.append('subtitle2',subtitle2);
        form_data.append('title3',title3);
        form_data.append('title3ar',title3ar);
        form_data.append('description',description);
        form_data.append('description2',description2);
        form_data.append('description3',description3);
        //form_data.append('description4',description4);


        form_data.append('descriptionar',descriptionar);
        form_data.append('descriptionar2',descriptionar2);
        form_data.append('descriptionar3',descriptionar3);
        //form_data.append('descriptionar4',descriptionar4);



        form_data.append('metatag',metatag);
        form_data.append('metatagar',metatagar);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editservicesprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#sermsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listservices';?>";
            },
            error: function (response) {
               // $('#sermsg').html(response); // display error response from the server
               window.location.href ="<?php echo base_url().'Welcome/listservices';?>";
            }
        });
    });






</script>

    