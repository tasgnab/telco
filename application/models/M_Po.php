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

	function searchPO($data){
		$this->db->select('*');
		$this->db->from('purchase_order');
		if (array_key_exists('po_no', $data)){
			$this->db->where('po_no', $data['po_no']);
		}
		if (array_key_exists('po_date_min', $data)){
			$this->db->where('po_date >=', $data['po_date_min']);
			$this->db->where('po_date <=', $data['po_date_max']);
		}
		if (array_key_exists('project_name', $data)){
			$this->db->like('project_name', $data['project_name']);
		}
		if (array_key_exists('customer', $data)){
			$this->db->like('customer', $data['customer']);
		}
		if (array_key_exists('area', $data)){
			$this->db->like('area', $data['area']);
		}
		if (array_key_exists('site_code', $data)){
			$this->db->where('site_code', $data['site_code']);
		}
		if (array_key_exists('site_name', $data)){
			$this->db->like('site_name', $data['site_name']);
		}
		$this->db->order_by('id', 'asc');
		return $this->db->get()->result();
	}
}