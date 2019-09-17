<?php defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* New controller class
	*/
class Admin_model extends CI_Model
{
	
	public function Insert_breakfast($data)
	{
		$this->db->insert('tbl_brackfast',$data);
	}
	
	public function Inserted_meal($data)
	{
		$this->db->insert('tbl_meal',$data);
	}
}

?>