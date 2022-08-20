<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ragistram extends CI_model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		//$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','url','form'));
	}

	public function ragistrm()
	{
		/*echo("I am here");
		die();*/
		$name=$this->input->post("Name");
		
		$Phone=$this->input->post("Phone");
		
		$User=$this->input->post("User");
		
		$Password=$this->input->post("Password");
		/*echo($name);
		echo($Phone);
		echo($User);
		echo($Password);
		die();*/
		$array=array('Name'=>$name,
			'Phone'=>$Phone,
			'User_id'=>$User,
			'Password'=>$Password);
		print_r($array);
		die();
	}

}