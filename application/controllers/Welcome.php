<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test(){
		$this->load->model('Persona');
		$persona = $this->Persona->find(1);
		var_dump($persona);
		$this->load->view('test');
	}
}
