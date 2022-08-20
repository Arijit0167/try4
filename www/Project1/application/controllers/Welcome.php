<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
		$this->load->model("nemem");
	}
	
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
	public function index()
	{
		//$result['all_user']=$this->nemem->viewm();
		$this->load->view('view');
	}
	/*public function insert()
	{
		$this->load->view('view');	
	}*/
	public function ne()
	{
		//echo("iaa");
		//die();
		$result['all_user']=$this->nemem->nem();
		//print_r($result);
		//die();
		if($result)
		{
		echo("add successfully");
		$this->load->view('view');
		}

	}
	/*public function viewc()
	{
		//print_r($res);
		//die();
	$res["all_user"]=$this->nemem->viewm();
	$this->load->view('view',$res);
	}*/
	public function dashc(){
		$result['all_user']=$this->nemem->dashm();
		$this->load->view('dash',$result);
		//$this->input->get('status');
		//$result=$this->db->where('status',1)->get("student");

	}
	public function countc()
	{
		/*echo("I am contollor");
		die();*/
		$this->nemem->countm();

	}
	
}
