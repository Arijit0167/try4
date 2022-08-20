<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class project5m extends CI_model
 {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
		//$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
	}


}