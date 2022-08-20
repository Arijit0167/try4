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
		$this->load->model("project4m");
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
		$this->load->view('insert_page');
	}
	public function insert()
	{
		$this->load->view('priject4');
	}
	public function display()
	{
		$result['all_user']=$this->project4m->q();
		if($result==true){
			echo("Insert succesfully");
			$this->load->view('priject4');
		}
		else{
			echo("insert fail");
			die();
		}
	}
	public function vi(){
		$result["all_user"]=$this->project4m->w();
		//print_r($result);
		//die();
		$this->load->view('values',$result);
	}	
	public function deletc(){
		$id=$this->input->get('id');
		//$this->project4m->deletm($id);
		//echo($id);
		//die();
		$res=$this->project4m->deletm($id);
		if($res==1)
		{
			echo("Successfully delete");
			$result["all_user"]=$this->project4m->w();
		$this->load->view('values',$result);
			
		}
		else
		{
			echo("try again");
			$result["all_user"]=$this->project4m->w();
		$this->load->view('values',$result);
			//die();
		}
	}
	public function editc()
	{
		//echo("I am controller");
		//die();
		$id=$this->input->get('id');
		$r['all_user']=$this->project4m->editm($id);
		$this->load->view('edit_page',$r);
	}
	public function updatec()
	{
		$this->project4m->updatem();
		$r['all_user']=$this->project4m->updatem();
		if($r==true){
			echo("Update SUCCEESFULLY");
			$result["all_user"]=$this->project4m->w();
		$this->load->view('values',$result);
		}
	}
	
}
