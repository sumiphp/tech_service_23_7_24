<?php class Servicesmodel extends CI_Model {

        /*public $title;
        public $content;
        public $date;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }*/

public function get_user($username,$password){


    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $this->db->select('*');
    $this->db->from('login');

    //$this->db->order_by('donor_id','desc');

    $query=$this->db->get();
    


//echo $this->db->last_query();
    if ($query->num_rows() > 0){
        return 1;
    }
    else{
        return 0;
    }
}


function get_count(){

    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}

function get_categories($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result_array();
}


function get_categoriesall(){
    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result_array();
}


function get_subcategoriesall(){
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $query->result_array();
}


function get_servicesall(){
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $query->row();

}

function get_aboutus(){
    $this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
    return $query->row();
}

function get_subcategories($limit,$start){
$this->db->limit($limit,$start);
$this->db->select('*');
$this->db->from('subcategory');
$query = $this->db->get();
return $query->result_array(); 
}

function get_countsub(){
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}


function get_enquiries($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('enquiries');
    $query = $this->db->get();
    return $query->result_array(); 
}

function get_countenquiries(){
    $this->db->select('*');
    $this->db->from('enquiries');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}


function get_contactenquiries($limit,$start){
$this->db->limit($limit,$start);
$this->db->select('*');
$this->db->from('contactenquiries');
$query = $this->db->get();
return $query->result_array(); 
}

function get_countcontactenquiries(){
    $this->db->select('*');
    $this->db->from('contactenquiries');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}



function get_bookenquiries($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('bookingenquiries');
    $query = $this->db->get();
    return $query->result_array(); 
    }
    
    function get_countbookenquiries(){
        $this->db->select('*');
        $this->db->from('bookingenquiries');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();
    }

function get_services($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $query->result_array();


}

function get_countservices(){
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}

function get_aboutusadmin(){
    //$this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
    return $query->result_array();


}

function get_blog(){
    $this->db->select('*');
    $this->db->from('blog');
    $query = $this->db->get();
    return $query->row();
    
}

function get_blogcontents(){
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->result_array();

}

function get_blogcontentstop(){

    $this->db->where('toparticle','Yes');
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->row();


}


function get_blogcontentstopcount(){

    $this->db->where('toparticle','Yes');
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->num_rows();


}




function get_faq(){
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $query->result_array();


}
function get_faqactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $query->result_array();


}

function get_testimonial(){
    $this->db->select('*');
    $this->db->from('testimonials');
    $query = $this->db->get();
    return $query->result_array();
}


function get_contactus(){
    
    $this->db->select('*');
    $this->db->from('contactus');
    $query = $this->db->get();
    return $query->row();


}

function get_newsletter(){
    $this->db->select('*');
    $this->db->from('newsletter');
    $query = $this->db->get();
    return $query->row();

}
function get_contactusrow(){
    $this->db->select('*');
    $this->db->from('contactus');
    $query = $this->db->get();
    return $query->row();
}

function get_countfaq(){
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}


function get_faqadmin($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $query->result_array(); 
    }

    function get_countmenu(){
        $this->db->select('*');
        $this->db->from('menus');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();
    
    }
    
    
    function get_menuadmin($limit,$start){
        $this->db->limit($limit,$start);
        $this->db->select('*');
        $this->db->from('menus');
        $query = $this->db->get();
        return $query->result_array(); 
        }






    function get_countblog(){
        $this->db->select('*');
        $this->db->from('blogcontents');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();


    }
    function get_counttestimonials(){
        $this->db->select('*');
        $this->db->from('testimonials');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();


    }

    function get_testimonialsadmin($limit,$start){
        $this->db->limit($limit,$start);
        $this->db->select('*');
        $this->db->from('testimonials');
        $query = $this->db->get();
        return $query->result_array(); 
        }
    function get_blogadmin($limit,$start){
        $this->db->limit($limit,$start);
        $this->db->select('*');
        $this->db->from('blogcontents');
        $query = $this->db->get();
        return $query->result_array(); 
        }

function get_servicedetals($serid){
    //$this->db->limit($limit,$start);
    $this->db->where('categoryid',$serid);
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    //echo $this->db->last_query();
    return $query->result_array(); 


}

function get_featureupdate(){
    //$this->db->where('categoryid',$serid);
    $this->db->select('*');
    $this->db->from('featureupdate');
    $query = $this->db->get();
    //echo $this->db->last_query();
    return $query->result_array();

}


function get_blogpagedetails(){
    $this->db->select('*');
    $this->db->from('blog');
    $query = $this->db->get();
    return $query->result_array();


}

function get_newsletterall(){
    $this->db->select('*');
    $this->db->from('newsletter');
    $query = $this->db->get();
    return $query->result_array();


}


function get_countnewslettersubscribers(){
    $this->db->select('*');
    $this->db->from('newslettersubscribe');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();


}

function get_newslettersubscribersall($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('newslettersubscribe');
    $query = $this->db->get();
    return $query->result_array();

}


function get_lowestpackage($serid){
    $this->db->where('active',1);
    $this->db->where('categoryid',$serid);
    $this->db->select('*');                
    $this->db->order_by('price');
    $this->db->limit(1);
    $query = $this->db->get('subcategory');
   
 return $query->row();

}


function get_lowestpackagecount($serid){
    $this->db->where('active',1);
    $this->db->where('categoryid',$serid);
    $this->db->select('*');                
    $this->db->order_by('price');
    $this->db->limit(1);
    $query = $this->db->get('subcategory');
   
 return $query->num_rows();

}
function get_problems(){
    $this->db->select('*');
    $this->db->from('problems');
    $query = $this->db->get();
    return $query->result_array();

}

function get_homepage(){
    $this->db->select('*');
    $this->db->from('homepage');
    $query = $this->db->get();
    return $query->row();


}
function get_homepageadmin(){
    $this->db->select('*');
    $this->db->from('homepage');
    $query = $this->db->get();
    return $query->result_array();


}

function get_countsolutions(){
    $this->db->select('*');
    $this->db->from('problems');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}

function get_solutions($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('problems');
    $query = $this->db->get();
    return $query->result_array();
    
}

function get_countquality(){
    $this->db->select('*');
    $this->db->from('quality');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();


}

function get_qualityadmin($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('quality');
    $query = $this->db->get();
    return $query->result_array();
    
}

function get_qualities(){
    //$this->db->limit($limit,$start);
    $this->db->order_by('orderno');
    $this->db->select('*');
    $this->db->from('quality');
    $query = $this->db->get();
    return $query->result_array();

}

function get_menus(){
    $this->db->where('menutype',1);
    $this->db->where('status',1);
    $this->db->order_by("orderno", "asc");
    $this->db->select('*');
    $this->db->from('menus');
    $query = $this->db->get();
    return $query->result_array();

}


function get_siteinf(){

    $this->db->select('*');
    $this->db->from('siteinformation');
    $query = $this->db->get();
    return $query->row();

}
function get_socialmedialinks(){
    $this->db->select('*');
    $this->db->from('socialmedialinks');
    $query = $this->db->get();
    return $query->row();

}

function get_subcategoriesrand(){
    $this->db->order_by('id','RANDOM');
    $this->db->limit(8);
    //$this->db->where('status',1);
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $query->result_array();


}

function get_quality($id){
    $this->db->where('qualityid',$id);
    $this->db->select('*');
    $this->db->from('quality');
    $query = $this->db->get();
    return $query->row();



}


function get_servicesdetails(){
    $this->db->select('*');
    $this->db->from('servicedetails');
    $query = $this->db->get();
    return $query->row();


}
function get_parentmenus(){
    $this->db->where('status',1);
    $this->db->where('menutype',1);
    $this->db->select('*');
    $this->db->from('menus');
    $query = $this->db->get();
    return $query->result_array();
}

function upgoogleanalytics(){



    
}

/*function get_countservicessteps(){


}*/

function get_countservicessteps(){
    $this->db->select('*');
    $this->db->from('solutionsteps');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}

function get_servicessteps($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('solutionsteps');
    $query = $this->db->get();
    return $query->result_array();
    
}


function get_steps(){
    $this->db->select('*');
    $this->db->from('solutionsteps');
    $query = $this->db->get();
    return $query->result_array();
}

public function getData($rowno,$rowperpage) {
 
    $this->db->select('*');
    $this->db->from('posts');
    $this->db->limit($rowperpage, $rowno);  
    $query = $this->db->get();
 
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount() {

    $this->db->select('count(*) as allcount');
    $this->db->from('posts');
    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }

  
  function get_categoriesallactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result_array();
}

function get_stepsactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('solutionsteps');
    $query = $this->db->get();
    return $query->result_array();
}

function get_problemsactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('problems');
    $query = $this->db->get();
    return $query->result_array();

}

function get_subcategoriesallactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $query->result_array();
}


function get_servicedetalsactive($serid){
    //$this->db->limit($limit,$start);
    $this->db->where('active',1);
    $this->db->where('categoryid',$serid);
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    //echo $this->db->last_query();
    return $query->result_array(); 


}

function get_blogcontentsactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->result_array();

}



function get_testimonialactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('testimonials');
    $query = $this->db->get();
    return $query->result_array();
}


function get_featureupdateactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('featureupdate');
    $query = $this->db->get();
    //echo $this->db->last_query();
    return $query->result_array();

}


function get_qualitiesactive(){
    $this->db->where('active',1);
    $this->db->order_by('orderno');
    $this->db->select('*');
    $this->db->from('quality');
    $query = $this->db->get();
    return $query->result_array();

}

function getrecordCountsubcategory(){
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $query->num_rows();
}


function getDatasubcategory($rowno,$rowperpage){
    $this->db->limit($rowperpage,$rowno);
$this->db->select('*');
$this->db->from('subcategory');
$query = $this->db->get();
return $query->result_array();
}

function get_blogdt($blogid){
    $this->db->where('contentid',$blogid);
    //$this->db->order_by('orderno');
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->row();

}
function get_downloads(){
    $this->db->select('*');
    $this->db->from('downloads');
    $query = $this->db->get();
    return $query->result_array();

}
function get_downloadsdt(){
    $this->db->select('*');
    $this->db->from('downloads');
    $query = $this->db->get();
    return $query->row();

}
function get_bookings(){
    $this->db->select('*');
    $this->db->from('booking');
    $query = $this->db->get();
    return $query->result_array();

}




function get_prdspec(){

$this->db->select('*');
    $this->db->from('productspecifications');
    $query = $this->db->get();
    return $query->result_array();


}

function get_carousalactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('carousel');
    $query = $this->db->get();
    return $query->result_array();


}
function get_countcarousel(){
$this->db->select('*');
    $this->db->from('carousel');
    $query = $this->db->get();
    return $query->num_rows();


}

public function get_carousel($limit,$start){
    $this->db->limit($limit,$start);
    //$this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('carousel');
    $query = $this->db->get();
    return $query->result_array();



}
function get_productactive(){
    $this->db->where('active',1);
    $this->db->select('*');
    $this->db->from('item');
    $query = $this->db->get();
    return $query->result_array();


}

function get_countitems(){
    $this->db->select('*');
    $this->db->from('item');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}

function get_items($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('item');
    $query = $this->db->get();
    return $query->result_array(); 
    }


function get_countproducttype(){
    $this->db->select('*');
    $this->db->from('producttype');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}


function get_producttypeadmin($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('producttype');
    $query = $this->db->get();
    return $query->result_array(); 
    }



    function get_countproductimages(){
        $this->db->select('*');
        $this->db->from('productimages');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();

    }
    function get_productimages($limit,$start){
        $this->db->limit($limit,$start);
        $this->db->select('*');
        $this->db->from('productimages');
        $query = $this->db->get();
        return $query->result_array(); 
        }


        function get_countfeatureupdate(){
            $this->db->select('*');
            $this->db->from('featureupdate');
            $query = $this->db->get();
            return $rowcount = $query->num_rows();
    
        }
        function get_productsactive($producttype){

        /*function get_featureupdate($limit,$start){
            $this->db->limit($limit,$start);
            $this->db->select('*');
            $this->db->from('featureupdate');
            $query = $this->db->get();
            return $query->result_array(); 
            }*/
            $this->db->where('type',$producttype);
            $this->db->where('active',1);
            $this->db->select('*');
            $this->db->from('item');
            $query = $this->db->get();
            return $query->result_array();
        }


        function get_productslistactive($limit,$start,$producttype){

            /*function get_featureupdate($limit,$start){
                $this->db->limit($limit,$start);
                $this->db->select('*');
                $this->db->from('featureupdate');
                $query = $this->db->get();
                return $query->result_array(); 
                }*/
                $this->db->limit($limit,$start);
                $this->db->where('type',$producttype);
                $this->db->where('active',1);
                $this->db->select('*');
                $this->db->from('item');
                $query = $this->db->get();
                return $query->result_array();
            }

            function get_countproductslistactive($producttype){
            $this->db->where('type',$producttype);
                $this->db->where('active',1);
                $this->db->select('*');
                $this->db->from('item');
                $query = $this->db->get();
                return $query->num_rows();
            }

        function get_prdspecactive($productid){
            $this->db->where('productid',$productid);
            $this->db->select('*');
            $this->db->from('productspecifications');
            $query = $this->db->get();
            return $query->result_array();
        
        
        }

        function get_prdimgactive($productid){
            $this->db->where('productid',$productid);
            $this->db->select('*');
            $this->db->from('productimages');
            $query = $this->db->get();
            return $query->result_array();
        
        
        }

        function get_prdactive($productid){

            /*function get_featureupdate($limit,$start){
                $this->db->limit($limit,$start);
                $this->db->select('*');
                $this->db->from('featureupdate');
                $query = $this->db->get();
                return $query->result_array(); 
                }*/
                $this->db->where('itemid',$productid);
                $this->db->where('active',1);
                $this->db->select('*');
                $this->db->from('item');
                $query = $this->db->get();
                return $query->row();
            }

            function get_productstypeactive($prdtype){

                /*function get_featureupdate($limit,$start){
                    $this->db->limit($limit,$start);
                    $this->db->select('*');
                    $this->db->from('featureupdate');
                    $query = $this->db->get();
                    return $query->result_array(); 
                    }*/
                    $this->db->where('producttypeid',$prdtype);
                    $this->db->where('active',1);
                    $this->db->select('*');
                    $this->db->from('producttype');
                    $query = $this->db->get();
                    return $query->row();
                }



                function get_countkeywords(){
                    $this->db->select('*');
                   // $this->db->from('products');
                  $this->db->from('sitemap');
                    $query = $this->db->get();
                    return $rowcount = $query->num_rows();
            
                }


                function get_keywords($limit,$start){
                    $this->db->limit($limit,$start);
                    $this->db->select('*');
                    //$this->db->from('products');
                    $this->db->from('sitemap');
                    $query = $this->db->get();
                    return $query->result_array();
            
                }

                function get_countdata($table)
                {
                    $this->db->select('*');
                    $this->db->from($table);
                    $query = $this->db->get();
                    return $rowcount = $query->num_rows();
            
                }


                function get_data($limit,$start,$table){
                    //$this->db->where('active',1);
                    $this->db->limit($limit,$start);
                    $this->db->select('*');
                    $this->db->from($table);
                    $query = $this->db->get();
                    return $query->result_array();
            
                }

                function get_activedata($table){
                   $this->db->where('active',1);
                    //$this->db->limit($limit,$start);
                    $this->db->select('*');
                    $this->db->from($table);
                    $query = $this->db->get();
                    return $query->result_array();
            
                }



                function get_activedatawhere($table,$id,$fieldid){
                $this->db->where($fieldid,$id);
                //$this->db->limit($limit,$start);
                $this->db->select('*');
                $this->db->from($table);
                $query = $this->db->get();
                return $query->result_array();
        
            }

            function get_activedatarowwhere($table,$id,$fieldid){
                $this->db->where($fieldid,$id);
                //$this->db->limit($limit,$start);
                $this->db->select('*');
                $this->db->from($table);
                $query = $this->db->get();
                  //echo $this->db->last_query();
                return $query->row();
        
            }


            function get_activedatacount($table,$id,$fieldid){
                $this->db->where($fieldid,$id);
                //$this->db->limit($limit,$start);
                $this->db->select('*');
                $this->db->from($table);
                $query = $this->db->get();
                return $query->num_rows();
        
            }



            function get_datarowwhere($table,$id,$fieldid1){
                $this->db->where($fieldid1,$id);
                //$this->db->limit($limit,$start);
                $this->db->select('*');
                $this->db->from($table);
                $query = $this->db->get();
                return $query->row();
        
            }




}
?>