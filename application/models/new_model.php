<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* New controller class
	*/
class New_model extends CI_Model
{
	
	public function Insertdata($data)
	{
		$this->db->insert('tbl_contact',$data);
	}
	
	public function Inserted_review($data)
	{
		$this->db->insert('tbl_review',$data);
	}
}

?>