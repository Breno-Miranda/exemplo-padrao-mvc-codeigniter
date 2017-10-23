<?php 

class Home_Model extends CI_Model
{
	public function get_home()
	{
		return $this->db->get('tb_home')->result();
	}
}
