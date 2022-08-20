<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		//$this->load->database();
		$this->load->library('upload');
		$this->load->helper(array('array','string','form','url'));
		$this->load->model("homem");
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
		$this->load->view('Home');
	}
	public function page1()
	{
		echo("I am in Page 1");
		die;
	}
	public function page2()
	{
		echo("I am in Page 2");
		die;
	}
	public function page3()
	{
		echo("I am in Page 3");
		die;
	}
	public function callingmodel()
	{
		//echo("I am a model");
		//die;
		$this->homem->homef();
	}
	public function databaseaccess()
	{
		$this->homem->accessf();
	}

}
