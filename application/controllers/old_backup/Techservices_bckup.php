<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Techservices extends CI_Controller {

	
	
	public function __construct(){
        parent::__construct();

         //load the model 
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->database();
		 $this->session->keep_flashdata('flash_msg'); 
		 $this->load->helper(['form', 'url']); 
		 $this->load->library("pagination");
		 $this->load->library('email');

    }

	

	public function index()
	{
		
		$data['resultcontents']=$this->sm->get_blogcontentsactive();
		
		$data['resulttest']=$this->sm->get_testimonialactive();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['resulthome']=$this->sm->get_homepage();
		
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['result2']=$this->sm->get_carousalactive();
		$data['result1']=$this->sm->get_blog();
		$data['service']=$this->sm->get_servicesall();
		$data['resultdata2']=$this->sm->get_activedata('location');
		$data['resultdata1']=$this->sm->get_activedata('projects');
		//$data['resultdata']=$this->sm->get_activedata('tourservices');
		

		$sql="Select * from tourservices where FIND_IN_SET('1',displayattr) and active=1";    
$query = $this->db->query($sql);
$data['resultdata'] = $query->result_array();
		$this->load->view('tech/index.php',$data);
	}



	public function indexbckup()
	{
		
		$data['resultcontents']=$this->sm->get_blogcontentsactive();
		
		$data['resulttest']=$this->sm->get_testimonialactive();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['resulthome']=$this->sm->get_homepage();
		
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['result2']=$this->sm->get_carousalactive();
		$data['result1']=$this->sm->get_blog();
		$data['service']=$this->sm->get_servicesall();
		$data['resultdata2']=$this->sm->get_activedata('location');
		$data['resultdata1']=$this->sm->get_activedata('projects');
		$data['resultdata']=$this->sm->get_activedata('tourservices');
		$this->load->view('tech/indexb.php',$data);
	}





    public function about()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['resultfaq']=$this->sm->get_faqactive();
		$data['resultdata']=$this->sm->get_activedata('teammembers');
		$this->load->view('tech/about.php',$data);
	}
   /* public function booking()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['resultdata']=$this->sm->get_activedata('packages');
		$id=1;
	//$fieldid='packageid';
	$fieldid1='bookingid';
		$data['resultrow']=$this->sm->get_activedatarowwhere('booking',$id,$fieldid1);
		//$data['resultdata1']=$this->sm->get_activedata('booking');
		$this->load->view('winsky/booking.php',$data);
	}


public function service(){
	$data['contactus']=$this->sm->get_contactus();
	//$data['result']=$this->sm->get_categoriesall();
	$data['result']=$this->sm->get_categoriesallactive();
	$data['service']=$this->sm->get_servicesall();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['steps']=$this->sm->get_stepsactive();
    $this->load->view('pocket/service.php',$data);
}*/

/*public function prdspec(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	//$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$productid=$this->uri->segment(3);
	$data['prdspec']=$this->sm->get_prdspecactive($productid);
	$data['prdimg']=$this->sm->get_prdimgactive($productid);
	$data['prd']=$this->sm->get_prdactive($productid);
	$this->load->view('light/product-details.php',$data);
}


public function producttype(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	//$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$producttype=$this->uri->segment(3);
	//$producttype=1;
	$data['result']=$this->sm->get_productsactive($producttype);
	//$producttype=1;
		$data['producttype']=$this->sm->get_productstypeactive($producttype);
	
	//$data['prdspec']=$this->sm->get_prdspecactive($productid);
	//$data['prdimg']=$this->sm->get_prdimgactive($productid);
	//$data['prd']=$this->sm->get_prdactive($productid);
	$this->load->view('light/product',$data);
}

public function listproducttype(){

	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	//$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$producttype=$this->uri->segment(3);

    $config["base_url"] = base_url()."Light/listproducttype/$producttype";
	$config["total_rows"] = $this->sm->get_countproductslistactive($producttype);
	$config["per_page"] = 10;
	$config["uri_segment"] = 4;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_productslistactive($config["per_page"], $page,$producttype);
	$data['producttype']=$this->sm->get_productstypeactive($producttype);
	$this->load->view('light/productlist',$data);
}


public function blog(){
	$data['result1']=$this->sm->get_blog();
	$data['resultcontents']=$this->sm->get_blogcontentsactive();
	$data['resulttopcontent']=$this->sm->get_blogcontentstop();
	$data['resulttopcontentcount']=$this->sm->get_blogcontentstopcount();

	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
    $this->load->view('winsky/blog.php',$data);
}
*/
//public function servicesdt(){
	public function services(){
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['service']=$this->sm->get_servicesall();
	$data['resultdata']=$this->sm->get_activedata('tourservices');
	$data['resultdata1']=$this->sm->get_activedata('traveldetails');
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$id=1;
	//$fieldid='packageid';
	$fieldid1='serviceid';
	$data['resultrow']=$this->sm->get_activedatarowwhere('services',$id,$fieldid1);

	
	$this->load->model('Servicesmodel');
	$this->load->view('tech/service',$data);
	

} 

/*public function contact1(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('pocket/contact1.php',$data);

}*/

public function contact(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['resultdata2']=$this->sm->get_activedata('location');
	//$data['resultdata1']=$this->sm->get_activedata('projects');
	$data['resultdata']=$this->sm->get_activedata('tourservices');
 $this->load->view('tech/contact.php',$data);

}


/*public function packagedetails(){
    $data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$id=$this->uri->segment(3);
	$fieldid='packageid';
	$fieldid1='packageid';
	$data['resultdata']=$this->sm->get_activedatawhere('packagesgallery',$id,$fieldid);
	$data['resultrow']=$this->sm->get_activedatarowwhere('packagesdetails',$id,$fieldid1);

	$data['resultdatacount']=$this->sm->get_activedatacount('packagesgallery',$id,$fieldid);
	$data['resultrowcount']=$this->sm->get_activedatacount('packagesdetails',$id,$fieldid1);
	//print_r($data['resultdata']);
	$this->db->where('contentid',$id);
	$this->db->select('*');
  $this->db->from('packages');
  $query = $this->db->get();
  $simpck=$query->row();
  $simpckarr=explode(',',$simpck->similarpackages);

  $this->db->where_in('contentid',$simpckarr);
	$this->db->select('*');
  $this->db->from('packages');
  $query = $this->db->get();
  $data['simpcklist']=$query->result_array();
    $this->load->view('winsky/package-details.php',$data);

}


public function package(){
    $data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['resultdata']=$this->sm->get_activedata('packages');
	$id=1;
	//$fieldid='packageid';
	$fieldid1='bookingid';
		$data['resultrow']=$this->sm->get_activedatarowwhere('booking',$id,$fieldid1);
    $this->load->view('winsky/package.php',$data);

}*/




public function dashboard(){
	
	$this->load->model('Servicesmodel');
	$this->load->view('services/dashboard');
	
} 

/*public function sustainability(){
	$this->load->model('Servicesmodel');
	$data['menus']=$this->sm->get_menus();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['service']=$this->sm->get_servicesall();
	$this->load->view('light/sustainability',$data);

} 

public function download(){
	$this->load->model('Servicesmodel');
	$data['menus']=$this->sm->get_menus();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['downloads']=$this->sm->get_downloadsdt();
	$this->load->view('light/download',$data);

} 


public function product(){
	$this->load->model('Servicesmodel');
	$data['menus']=$this->sm->get_menus();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_productactive();
	$this->load->view('light/product',$data);

} */





public function logout(){
	$this->load->model('Servicesmodel');
	redirect("welcome/services");




}


/*public function enquiryprocess(){
$firstname=$this->input->post('firstname');
$lastname=$this->input->post('lastname');
$email=$this->input->post('email');
$phone=$this->input->post('phone');
$businessnature=$this->input->post('natureofbusiness');
$packages=$this->input->post('package');
$note=$this->input->post('note');
$businesswebsiteduration=$this->input->post('businesswebsiteduration');
$data = array(
	'firstname' =>"$firstname",
	'lastname' =>"$lastname",
	'email' =>"$email",
	'phone' =>"$phone",
	'businessnature' =>"$businessnature",
	'packages'=>"$packages",
	'note'=>"$note",
	'businesswebsiteduration'=>"$businesswebsiteduration"
 );
 $this->db->insert('enquiries', $data);

 $toemailid='sumilaifix@gmail.com';
 $this->htmlmailenquiry($firstname,$lastname,$email,$phone,$note,$toemailid,$packages,$businessnature,$businesswebsiteduration);





echo "Your enquiry send successfully";
}*/

//jcqa cvfq iwrc plsu 

public function contactenquiryprocess(){
	$first_name=$this->input->post('first_name');
	$last_name=$this->input->post('last_name');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$message=$this->input->post('message');
	$name="$first_name $last_name";
	$subject1=$this->input->post('subject');
	$location=$this->input->post('location');		
	$data = array(
		'name' =>"$name",
		'subject' =>"$subject1",
		'email' =>"$email",
		'phone' =>"$phone",
		'message' =>"$message",
		'location'=>"$location",
		//'note'=>"$note",
		//'businesswebsiteduration'=>"$businesswebsiteduration"
	 );
	 $this->db->insert('contactenquiries',$data);
	 $toemailid='sumilaifix@gmail.com';

	 $subject="Contact Enquiries";
	$this->htmlmailcontactus($name,$subject,$email,$phone,$message,$email,$toemailid,$location,$ubject1);
	echo "Your enquiry send successfully";
	}

	/*public function pckadd(){
		$name=$this->input->post('name1');
		$phone=$this->input->post('phone1');
		$email=$this->input->post('email1');
		$from=$this->input->post('from');
		$to=$this->input->post('to');
		$options=$this->input->post('options');	
		$place=$this->input->post('place');
		$city=$this->input->post('city');
		$options=$this->input->post('city');				
		$data = array(
			'firstname' =>"$name",
			'options' =>"$options",
			'email' =>"$email",
			'phone' =>"$phone",
			'from' =>"$from",
			'to'=>"$to",
			'place'=>"$place",
			'city'=>"$city",'options'=>$options
		 );
		 $this->db->insert('packageenquiries',$data);
		 $toemailid='sumilaifix@gmail.com';
	
		 $subject="Package Enquiries";
		//$this->htmlmailcontactus($name,$subject,$email,$phone,$message,$email,$toemailid);
		//$this->htmlmailpck($name,$options,$email,$phone,$place,$city,$from,$to,$email,$toemailid);
		echo "Your Package enquiry send successfully";
		}


		public function bookenquiryprocess(){
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$from=$this->input->post('fromaddress');
			$to=$this->input->post('toaddress');
			$person=$this->input->post('person');	
			$place=$this->input->post('place');
			$city=$this->input->post('city');
			//$options=$this->input->post('city');				
			$data = array(
				'firstname' =>"$fname",
				//'options' =>"$options",
				'email' =>"$email",
				'phone' =>"$phone",
				'from' =>"$from",
				'to'=>"$to",
				'place'=>"$place",
				'city'=>"$city"
				//,'options'=>$options
			 );
			 $this->db->insert('bookingenquiries',$data);
			 $toemailid='sumilaifix@gmail.com';
		
			 $subject="Booking Enquiries";
			//$this->htmlmailcontactus($name,$subject,$email,$phone,$message,$email,$toemailid);
			//$this->htmlmailpck($name,$options,$email,$phone,$place,$city,$from,$to,$email,$toemailid);
			echo "Your Booking enquiry send successfully";
			}*/









	/*public function contactenquiryprocesspopup(){
		$name=$this->input->post('name');
		$companyname=$this->input->post('companyname');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');	
		$business=$this->input->post('business');
		$package=$this->input->post('package');
		$natureofbusiness=$this->input->post('business');
		$data = array(
			'name' =>"$name",
			'companyname' =>"$companyname",
			'email' =>"$email",
			'phone' =>"$phone",
			'message' =>"$message",
			'packageid'=>"$package",
			'natureofbusiness'=>"$natureofbusiness",
			//'businesswebsiteduration'=>"$businesswebsiteduration"
		 );
		 $this->db->insert('contactenquiries',$data);
		 $toemailid='sumilaifix@gmail.com';
		 $this->htmlmailcontactuspopup($name,$companyname,$email,$phone,$message,$email,$toemailid,$package,$natureofbusiness);
		 
		echo "Your enquiry send successfully";
		}*/




		public function blogdetails(){

			$blogid=$this->uri->segment(3);
			$data['blogdt']=$this->sm->get_blogdt($blogid);
			//print_r($data['blogdt']);
			//die;
			$data['result']=$this->sm->get_blog();
			$data['menus']=$this->sm->get_menus();
			$data['contactus']=$this->sm->get_contactus();
			$data['about']=$this->sm->get_aboutus();
			$data['siteinf']=$this->sm->get_siteinf();
			$this->load->view('light/blog-details.php',$data);
		}


public function servicedetails(){
//$serid=$this->uri->segment(2);
$serid=$this->uri->segment(3);
	//die;
	//echo "hhhh";
	//$data['servicedetails']=$this->sm->get_servicedetals($serid);
	//$data['servicedetails']=$this->sm->get_servicedetalsactive($serid);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	//$data['categories']=$this->sm->get_categoriesall();
	//$data['categories']=$this->sm->get_categoriesallactive();
	//$data['lowestpackage']=$this->sm->get_lowestpackage($serid);
	//$data['lowestpackagecount']=$this->sm->get_lowestpackagecount($serid);
	//$data['easeyourproblems']=$this->sm->get_problemsactive();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['service']=$this->sm->get_servicesall();
	//$data['result']=$this->sm->get_servicesdetails();
	//$data['resultsub']=$this->sm->get_subcategoriesallactive();
	$id=$serid;
	//$fieldid='packageid';
	$fieldid1='serviceid';
	$data['resultrow']=$this->sm->get_activedatarowwhere('service_details',$id,$fieldid1);
	$data['resultrowcount']=$this->sm->get_activedatacount('service_details',$id,$fieldid1);
	$id2=$serid;
	//$fieldid='packageid';
	$fieldid2='contentid';
	$data['resultrow2']=$this->sm->get_activedatarowwhere('tourservices',$id2,$fieldid2);
	//print_r($data['resultrow']);
	//die;
	
	$this->load->view('tech/service-details.php',$data);

}

public function newslettersubscribe(){
	
	$newsletteremailid=$this->input->post('email');
	$data=array('subscribeemailid'=>$newsletteremailid);
	$this->db->insert('newslettersubscribe', $data);
	echo ($this->db->affected_rows() != 1) ? 'Error in Subscription' : 'Your emailid subscribed Successfully';

}

/*public function hosting(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	//$data['contactus']=$this->sm->get_contactus();
	$this->load->view('pocket/hosting.php',$data);

}


public function indexload(){
	$this->load->view('pocket/post_view');
 }*/

 /**
  * This method returns all the data.
  *
  * @return Response
 */

 /*public function indexloaddiv(){
	$this->load->view('pocket/post_viewdiv');
 }



public function loadRecord($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCount();

    // Get records
    $users_record = $this->sm->getData($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }

//}


public function loadRecorddiv($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCountsubcategory();

    // Get records
    $users_record = $this->sm->getDatasubcategory($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecorddiv';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }*/












public function htmlmailcontactus($name,$subject,$email,$phone,$msg,$fromemailid,$toemailid,$location,$subject1){

	$from_email=$email;
	$message=$msg;
	
	//$to_email =$toemailid;
	//$to_email = 'sumila.c@gmail.com';
	$config = array(
	   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	   'smtp_host' => 'smtp.gmail.com',
	   'smtp_port' => 587,
	   'smtp_user' => 'sumilaifix@gmail.com',
	   //'smtp_user' => 'crayoprojects2022@gmail.com',
	   //'smtp_pass' => 'wosmqbffmatsefdz',
	   'smtp_pass'=>'jcqa cvfq iwrc plsu',
	   'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	   'mailtype' => 'html', //plaintext 'text' mails or 'html'
	   'smtp_timeout' => '4', //in seconds
	   'charset' => 'utf-8',
	   'wordwrap' => TRUE,
	   'newline' => "\r\n",
   );

    $this->load->library('email', $config);

  $this->email->set_newline("\r\n");

  

    $this->email->from($from_email,$name);

    $data = array(

       'name'=>$name,'subject'=>$subject,'email'=>$email,'phone'=>$phone,'message'=>$message,'location'=>$location,'service'=>$subject1,

         );

		 //$userEmail='sumilaifix@gmail.com';
		 //$subject='Tech Services Contact Us Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('tech/contactusenquiresemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }



  public function htmlmailpck($name,$subject,$email,$phone,$msg,$fromemailid,$toemailid){

	$from_email=$email;
	$message=$msg;
	
	//$to_email =$toemailid;
	//$to_email = 'sumila.c@gmail.com';
	$config = array(
	   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	   'smtp_host' => 'smtp.gmail.com',
	   'smtp_port' => 587,
	   'smtp_user' => 'sumilaifix@gmail.com',
	   //'smtp_user' => 'crayoprojects2022@gmail.com',
	   //'smtp_pass' => 'wosmqbffmatsefdz',
	   'smtp_pass'=>'jcqa cvfq iwrc plsu',
	   'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	   'mailtype' => 'html', //plaintext 'text' mails or 'html'
	   'smtp_timeout' => '4', //in seconds
	   'charset' => 'utf-8',
	   'wordwrap' => TRUE,
	   'newline' => "\r\n",
   );

    $this->load->library('email', $config);

  $this->email->set_newline("\r\n");

  

    $this->email->from($from_email,$name);

    $data = array(

       'name'=>$name,'subject'=>$subject,'email'=>$email,'phone'=>$phone,'message'=>$message

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Axiom Contact Us Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('light/contactusenquiresemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }








  /*public function htmlmailcontactuspopup($name,$companyname,$email,$phone,$msg,$fromemailid,$toemailid,$packageid,$natureofbusiness){

	$from_email=$email;
	$message=$msg;
	$to_email =$toemailid;
	//$to_email = 'sumila.c@gmail.com';
	$config = array(
	   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	   'smtp_host' => 'smtp.gmail.com',
	   'smtp_port' => 587,
	   'smtp_user' => 'sumilaifix@gmail.com',
	   //'smtp_user' => 'crayoprojects2022@gmail.com',
	   //'smtp_pass' => 'wosmqbffmatsefdz',
	   'smtp_pass'=>'jcqa cvfq iwrc plsu',
	   'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	   'mailtype' => 'html', //plaintext 'text' mails or 'html'
	   'smtp_timeout' => '4', //in seconds
	   'charset' => 'utf-8',
	   'wordwrap' => TRUE,
	   'newline' => "\r\n",
   );

    $this->load->library('email', $config);

  $this->email->set_newline("\r\n");

  

    $this->email->from($from_email,$name);
	if (!empty($packageid)){
		$this->db->where('subcategoryid',$packageid);
		$this->db->select('*');
		$this->db->from('subcategory');
		$query = $this->db->get();
		$packagedt=$query->row();
		$packagename=$packagedt->subcategoryname;
	  }






    $data = array(

       'name'=>$name,'companyname'=>$companyname,'email'=>$email,'phone'=>$phone,'message'=>$message,'package'=>$packagename,'natureofbusiness'=>$natureofbusiness

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Pocket friendly Contact Us Enquiries';

    //$this->email->to($to_email); // replace it with receiver mail id
	$this->db->select('*');
	$this->db->from('contactus');
	$query = $this->db->get();
	$contactusdte=$query->row();
	$fn1=$contactusdte->toemail1;
	$fn2=$contactusdte->toemail2;
	$fn3=$contactusdte->toemail3;
	
	
	$this->email->to($fn1);

	$this->email->bcc(array($fn2,$fn3));

  $this->email->subject($subject); // replace it with relevant subject

  

    $body = $this->load->view('Pocket/contactusenquiresemail2.php',$data,TRUE);

  $this->email->message($body); 

    $this->email->send();

  }

*/

  /*public function htmlmailenquiry($firstname,$lastname,$email,$phone,$note,$toemailid,$packageid,$natureofbusiness,$businesswebsiteduration){

  

	$from_email=$email;
	$message=$note;
	$to_email =$toemailid;
	//$to_email = 'sumila.c@gmail.com';
	$config = array(
	   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	   'smtp_host' => 'smtp.gmail.com',
	   'smtp_port' => 587,
	   'smtp_user' => 'sumilaifix@gmail.com',
	   //'smtp_user' => 'crayoprojects2022@gmail.com',
	   //'smtp_pass' => 'wosmqbffmatsefdz',
	   'smtp_pass'=>'jcqa cvfq iwrc plsu',
	   'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	   'mailtype' => 'html', //plaintext 'text' mails or 'html'
	   'smtp_timeout' => '4', //in seconds
	   'charset' => 'utf-8',
	   'wordwrap' => TRUE,
	   'newline' => "\r\n",
   );

    $this->load->library('email', $config);

  $this->email->set_newline("\r\n");

  

    $this->email->from($from_email,$firstname);
	if (!empty($packageid)){
		$this->db->where('subcategoryid',$packageid);
		$this->db->select('*');
		$this->db->from('subcategory');
		$query = $this->db->get();
		$packagedt=$query->row();
		$packagename=$packagedt->subcategoryname;
	  }






    $data = array(
		'businesswebsiteduration'=>$businesswebsiteduration,
       'firstname'=>$firstname,'lastname'=>$lastname,'email'=>$email,'phone'=>$phone,'message'=>$message,'packagename'=>$packagename,'natureofbusiness'=>$natureofbusiness

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Pocket friendly Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
	   
		 $this->email->subject($subject); 

  

  

    $body = $this->load->view('Pocket/contactusenquiresemail3.php',$data,TRUE);

  $this->email->message($body); 

    $this->email->send();

  }*/














	
}
