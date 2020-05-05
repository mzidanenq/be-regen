<?php 

class Model_admin extends CI_Model{

	public function index()
	{
        
	}

	public function register($data)
	{
		$query = $this->db->insert('admin', $data);
		if($query) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function view()
	{
		// $query = $this->db->query('SELECT * FROM admin LIMIT 1');
		// //$row   = $query->result_array();

		// foreach ($query->result() as $row)
		// {
		// 	echo $row->ID_Karyawan;
		// 	echo $row->Password;
		// }

			$query = $this->db->get('admin', 2);

			return $query->result();
	}

	public function login()
	{
		$id		= set_value('id');
		$pass	= set_value('pass');

		$query = $this->db->where('ID_Karyawan', $id)->where('Password', $pass)->limit(1)->get('admin');
		if($query->num_rows() > 0) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
}
