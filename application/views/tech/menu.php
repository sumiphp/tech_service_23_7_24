 

<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
$lan="/en";

}else {
    $lan="/ar";
}
?>



 <?php $this->db->where('menutype',1);
                                $this->db->where('status',1);
                                $this->db->order_by('orderno');
                                $this->db->select('*');
                                $this->db->from('menus');
                                $query = $this->db->get();
                                $result = $query->result_array();?>
                               
 
 <ul>
                                           

                                            <?php foreach($result as $res){
                                                
                                                
                                                
                                                $this->db->where('parentmenuid',$res['menuid']);    
                                                $this->db->where('menutype',2);
                                                $this->db->where('status',1);
                                                $this->db->select('*');
                                                $this->db->from('menus');
                                                $query = $this->db->get();
                                                $rowcount = $query->num_rows();
                                                                                    
                                                
                                                if ($rowcount==0){
                                                ?>
                               <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                               <li><a href="<?php echo base_url().$res['url'].$lan;?>"><?php echo $res['menuname'];?></a></li>
                               <?php } else { ?>
                                <li><a href="<?php echo base_url().$res['url'].$lan;?>"><?php echo $res['menunamear'];?></a></li>

                                <?php } ?>

                               <?php
                                                }else{ 
                                                    
                                                    $this->db->order_by('orderno');
                                                    $this->db->where('parentmenuid',$res['menuid']);                                        
                                                    $this->db->where('menutype',2);
                                                    $this->db->where('status',1);
                                                    $this->db->select('*');
                                                    $this->db->from('menus');
                                                    $query = $this->db->get();
                                                    $submenulist=$query->result_array();   
                                                    
                                                    
                                                    
                                                    ?>



<li class="has-sub">  <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                              <a href="<?php echo base_url().$res['url'];?>"><?php echo $res['menuname'];?></a>
                                              <?php } else { ?>
                                                <a href="<?php echo base_url().$res['url'];?>"><?php echo $res['menunamear'];?></a>
                                                <?php } ?>
                                                <ul>
                                                <?php foreach($submenulist as $sm){?>

                                                    <?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>
                                                    <li><a href="<?php echo base_url().$sm['url'].$lan;?>"><?php echo $sm['menuname'];?></a></li>
                                                    <?php } else { ?>
                                                        <li><a href="<?php echo base_url().$sm['url'].$lan;?>"><?php echo $sm['menunamear'];?></a></li>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    <!--li><a href="service-details.html">Services Details</a></li-->
                                                </ul>
                                            </li>




<?php   }
                            
                            
                            
                            
                            } ?>


<?php 


if ($this->uri->segment(3)==''){
$serid="";
}
else{
    $serid=$this->uri->segment(3);
}


if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
    if ($this->uri->segment(1)==''){
        $currentseg='index';
    }else {
$currentseg=$this->uri->segment(1);
    }

    
    ?>
                               <li class="lang-btn">
                                                <a href="<?php echo base_url().$currentseg.'/ar/'.$serid;?>">عربي</a>
                                               
                                            </li>
                                            <?php } else {
                                                
                                                if ($this->uri->segment(1)==''){
                                                    $currentseg='index';
                                                }else {
                                            $currentseg=$this->uri->segment(1);
                                                }
                                                
                                                
                                                ?>
                                                 <li class="lang-btn">
                                                <a href="<?php echo base_url().$currentseg.'/en/'.$serid;?>">English</a>
                                                </li>

                                                <?php   }?>

                                                                                      
                                        </ul>