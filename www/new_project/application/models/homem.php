<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homem extends CI_model {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		//$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
	}
	public function homef()
	{
		echo("I am hare");
		die();
	}
	public function accessf()
	{
		echo("Database access");
		die();
	}





}