<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class projectm extends CI_model {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
	}
	public function prom()
	{
		$firstname=$this->input->post('fname');
		//echo($firstname);
		//die();
		$lastname=$this->input->post('lname');
		//echo($lastname);
		//die();
		$class=$this->input->post('class');
		//echo($class);
		//die();
		$roll=$this->input->post('roll');
		//echo($roll);
		//die();
		$age=$this->input->post('age');
		//echo($age);
		//die();
		$address=$this->input->post('address');
		//echo($address);
		//die();
		$section=$this->input->post('sec');
		//echo($section);
		//die();
		$array=array('firstname'=>$firstname,
					 'lastname'=>$lastname,
					 'class'=>$class,
					 'roll'=>$roll,
					 'age'=>$age,
					 'address'=>$address,
					 'section'=>$section);
		$this->db->insert("student",$array);
		return true;
	}
	public function q(){
		//echo("I am hare");
		//die();
		$result=$this->db->get("student")->result_array();
		//print_r($r);
		//die();
		return $result;
	}





}