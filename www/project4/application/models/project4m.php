<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class project4m extends CI_model
 {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
	}
	public function q(){
		//echo("i am model");
		//die();
		$firstname=$this->input->post('fname');
		$lastname=$this->input->post('lname');
		$dateofbirth=$this->input->post('dob');
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$district=$this->input->post('district');
		$state=$this->input->post('state');
		$pincode=$this->input->post('pin');
		$phone_no=$this->input->post('phone');
		//echo($phone_no);
		//die();
		$array=array('firstname'=>$firstname,
					'lastname'=>$lastname,
					'dateofbirth'=>$dateofbirth,
					'address'=>$address,
					'city'=>$city,
					'dist'=>$district,
					'sate'=>$state,
					'pin'=>$pincode,
					'phone'=>$phone_no);
		$this->db->insert("p4d",$array);
		return true;
	}
	public function w()
	{
		//echo("i am model");
		//die();
		$result=$this->db->get("p4d")->result_array();
		//print_r($result);
		//die();
		return $result;
	}
	public function deletm($id)
	{
		//echo($id);
		//die();
		//$id=$this->input->get('id');
		$this->db->where('id',$id)->delete("p4d");
		//echo("Successfully delete");
		return 1;
	}
	public function editm($id)
	{
		//echo($id);
		//die();
		$r=$this->db->where('id',$id)->get("p4d")->result_array();
		//print_r($r);
		//die();
		return $r;
	}
	public function updatem()
	{
		//echo("i am hare");
		//die();
		$id=$this->input->post('id');
		$firstname=$this->input->post('fname');
		//echo($id);
		//die();
		$lastname=$this->input->post('lname');
		$dateofbirth=$this->input->post('dob');
		$address=$this->input->post('address');
		$city=$this->input->post('city');
		$district=$this->input->post('dist');
		$state=$this->input->post('state');
		$pin=$this->input->post('pin');
		$phone=$this->input->post('phoneno');
		$array=array('id'=>$id,
					'firstname'=>$firstname,
					'lastname'=>$lastname,
					'dateofbirth'=>$dateofbirth,
					'address'=>$address,
					'city'=>$city,
					'dist'=>$district,
					'sate'=>$state,
					'pin'=>$pin,
					'phone'=>$phone);
		/*print_r($array);
		die();*/
		$this->db->where('id',$id)->update("p4d",$array);
		return true;
	}


	}