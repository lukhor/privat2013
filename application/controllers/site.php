<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	
	
	function Site(){
		parent::__construct();
		
		$this->load->helper('url');
	}
		
	public function index(){
		
		$this->home();
	}
	
	public function home(){
		
		$data['title']="Welcome";
		$this->load->view("view_home");

		
	}
	
	public function about(){
		$data['title']="About";
		$this->load->view('view_about');
	}
	
	public function lokalita(){
		$data['title']="Lokalita";
		$this->load->view('view_lokalita');
	}
	
	public function kontakt(){
		$data['title']="Kontakt";
		$this->load->view('view_kontakt');
	}
	
	public function cennik(){
		$data['title']="Cennik";
		$this->load->view('view_cennik');
	}
	
	public function fotos(){
		$data['title']="Fotogaleria";
		$this->load->view('view_fotos');
	}
	
	function static_url(){
		
	}
}