<?php
class M_Purchase_Order extends MY_Model {
    function __construct(){
        parent::__construct();
    }

    function insertPO($data){
    	$data = appendCreatedModifiedBy($data);
		$this->db->insert('purchase_order',$data);
		return $this->db->insert_id();
	}
}