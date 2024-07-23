<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){
        parent::__construct();

         //load the model 
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->database();
		 $this->session->keep_flashdata('flash_msg'); 
		 $this->load->helper(['form', 'url']); 

    }

	


	
	

	
	public function index()
	{

		
		$mod=Date('Y-m-d');
		$this->load->database();
		$this->db->where('active',1);
        $query = $this->db->get("sitemap");
        $items = $query->result_array();
	$towrite="<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
	$towrite.= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
	
	$towrite.= "<url>".
			"<loc>".base_url()."</loc>".
			"<lastmod>".
				
				"{$mod}</lastmod>".
			"<changefreq>daily</changefreq>".
			"<priority>1</priority>".
			"</url>";
	if (isset($items)){
		foreach($items as $item) {
			$towrite.= "<url>".
				"<loc>".
				base_url().
				"{$item["loc"]}".
				"</loc>".
				"<lastmod>".
				
				"{$item["lastmod"]}".
				"</lastmod>".
				"<changefreq>Daily</changefreq>".
				"<priority>0.5</priority>".
				"</url>";
		}
	}
	$towrite.= "</urlset>";

	$this->load->helper('file');
	$file_name = 'sitemap.xml';
	write_file($file_name,$towrite);
	// Optionally redirect to the file you (hopefully) just created
	redirect($file_name); 

	}


}
