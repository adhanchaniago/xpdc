<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_mod extends CI_Model {

	public function __construct(){
    parent::__construct();
  }

  function user_list($where = null, $show_all = 0){
		if(isset($where)){
			$this->db->where($where);
    }
    $this->db->select('*');
    $this->db->from('user');
		$query = $this->db->get();
		return $query->result_array();
	}

}