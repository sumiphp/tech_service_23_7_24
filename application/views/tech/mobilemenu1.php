
<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){
$lan="/en";

}else {
    $lan="/ar";
}
?>
<?php 
$this->db->where('menutype',1);
$this->db->where('status',1);
$this->db->order_by('orderno');
$this->db->select('*');
$this->db->from('menus');
$query = $this->db->get();
$result = $query->result_array();




foreach($result as $res){   ?>

<?php if (($this->uri->segment(1)=='') || ($this->uri->segment(2)=='en')){ ?>

<li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url().$res['url'].$lan;?>"><?php echo $res['menuname'];?></a></li>


<?php   } else { ?>
                            
    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="<?php echo base_url().$res['url'].$lan;?>"><?php echo $res['menunamear'];?></a></li>                     
                            
                            
    <?php } } ?>



                      