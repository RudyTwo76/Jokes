<?php
class Jokes_model extends CI_Model {

	public function get_jokes($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('joke');
			return $query->result_array();
		}
		$query = $this->db->get_where('joke',array('ID'=>$id));
		return $query->row_array();
	}
	
	public function new_joke()
	{
		$data = array('Joke' => $this->input->post('JokeText'));
		return $this->db->insert('joke',$data);
	}
	
	public function update_joke($id)
	{
		$data = array('Joke' => $this->input->post('JokeText'));
		$this->db->where('ID',$id);
		return $this->db->update('joke',$data);
	}
	
	public function find_joke()
	{
		$search = $this->input->post('SearchText');
		$this->db->like('Joke',$search);
		$query = $this->db->get('joke');
		return($query->result_array());
	}
}