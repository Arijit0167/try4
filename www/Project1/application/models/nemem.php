<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nemem extends CI_model {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
	}
	/*public function nm()
	{
		$result=$this->db->get("student")->result_array();
		return $result;
	}*/
	public function nem()
	{
		$name=$this->input->post('name');
		//echo($name);
		//die();
		$class=$this->input->post('class');
		//echo($class);
		//die();
		$roll=$this->input->post('roll');
		$array=array('name'=>$name,
			'class'=>$class,
			'roll'=>$roll);
		//print_r($array);
		//die();
		$this->db->insert("student",$array);
		return true;
	}
	/*public function viewm(){
		$result=$this->db->get("student")->result_array();
		//print_r($res);
		//die();
		return $result;
	}*/
	public function dashm(){
		//echo("I am model");
		//die();
		//$result=$this->db->where('status',0)->get("product")->result_array();
		//return $result;
		$this->db->select('count(product.id) as actid');
		$this->db->where('product.status=1');
		$this->db->from('product');
		$result=$this->db->get()->result_array();
		return $result;

	}
	public function countm(){
		echo("I am model");
		die();
	}
	
}