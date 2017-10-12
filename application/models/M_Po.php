<?php
class M_Po extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function insertPO($data){
    	//$data = appendCreatedModifiedBy($data);
		$this->db->insert('purchase_order',$data);
		return $this->db->insert_id();
	}

	function allPO(){
		$this->db->select('*');
		$this->db->from('purchase_order');
		$this->db->where('is_deleted','N');
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}
}