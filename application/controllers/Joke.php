<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joke extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jokes_model');
	}
	
	public function index()
	{
		$data['jokes'] = $this->jokes_model->get_jokes();
		$data['Title'] = "New Joke";
		$this->load->view('header',$data);
		$this->load->view('joke_new',$data);
		$this->load->view('footer');
	}
	
	public function create()
	{
		$this->form_validation->set_rules('JokeText','Joke','required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['jokes'] = $this->jokes_model->get_jokes();
			$data['Title'] = "New Joke";
			$this->load->view('header',$data);
			$this->load->view('joke_new',$data);
			$this->load->view('footer');
		}
		else
		{
			$this->jokes_model->new_joke();
			redirect(base_url());
		}
	}
	
	public function edit($id)
	{
		$this->form_validation->set_rules('JokeText','Joke','required');
		
		if ($this->form_validation->run() === FALSE)
		{
			$data['joke'] = $this->jokes_model->get_jokes($id);
			$data['Title'] = "Edit Joke";
			$this->load->view('header',$data);
			$this->load->view('joke_edit',$data);
			$this->load->view('footer');
		}
		else
		{
			$this->jokes_model->update_joke($id);
			redirect(base_url());
		}
	}
}
