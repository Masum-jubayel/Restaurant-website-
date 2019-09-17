<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Review_model extends CI_Model {

	 function view_message(){

	        //$this->db->insert("tbl_user",$data);
	        //$query = $this->db->query("ELECT * from tbl_user order by desc");
	        $this->db->select("*");
	        $this->db->from("tbl_review");
           // $this->db->order_by();
	        $query = $this->db->get();
            //$this->db->limit($limit, $start);
	        return $query;
	    }


    //public function view_data($table, $where, $order1, $order2){
       //select * from tbl_unit ;
        // $this->db->select("*");
//        $this->db->from("tbl_unit");
        // $this->db->from("$table");
//        $data = $this->db->get();
//        $data = $data->result();
//        return $data;
        // if($order1 != ""){
            // $this->db->order_by($order1, $order2);
        //}
        // return $this->db->get()->result();
    //}
}