<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jokes_list extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jokes_model');
	}
	
	public function index()
	{
		$data['jokes'] = $this->jokes_model->get_jokes();
		$data['Title'] = "Jokes";
		$this->load->view('header',$data);
		$this->load->view('jokes_list',$data);
		$this->load->view('footer');
	}
	
	public function search()
	{
		$data['jokes'] = $this->jokes_model->find_joke();
		$data['Title'] = "Found Jokes";
		$this->load->view('header',$data);
		$this->load->view('jokes_list',$data);
		$this->load->view('footer');
	}
}
