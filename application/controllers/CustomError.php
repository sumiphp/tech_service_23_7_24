
<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class CustomError extends CI_Controller { 
    public function __construct() { 
        parent:: __construct(); 
        $this -> load -> helper('url'); 
        $this->load->model('Servicesmodel','sm');
    } 
  
    public function index() { 
       $this -> output -> set_status_header('404'); 
        //echo "hello";
        /*$data['result']=$this->sm->get_categoriesall();
		$data['resultsub']=$this->sm->get_subcategoriesall();
		$data['resultcontents']=$this->sm->get_blogcontents();
		$data['resultfaq']=$this->sm->get_faq();
		$data['resulttest']=$this->sm->get_testimonial();*/
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdate();
		$data['resulthome']=$this->sm->get_homepage();
		$data['qualities']=$this->sm->get_qualities();
        $data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
       //$this -> load -> view('light/404.php',$data); 
$this -> load -> view('tech/error_404.php',$data); 
    } 
}
