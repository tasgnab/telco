<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Po extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('dashboard/po_new');
	}
	public function add(){
		if($this->input->post()){
			$data['po_no'] = $this->input->post('po_no');
			$tmp = new DateTime($this->input->post('po_date'));
			$data['po_date'] = $tmp->format('Y-m-d');
			$data['project_name'] = $this->input->post('project_name');
			$data['customer'] = $this->input->post('customer');
			$data['area'] = $this->input->post('area');
			$data['site_code'] = $this->input->post('site_code');
			$data['site_name'] = $this->input->post('site_name');
			$data['item'] = $this->input->post('item');
			$data['unit_price'] = (float) str_replace(",","",$this->input->post('unit_price'));
			$data['quantity'] = (int) $this->input->post('quantity');
			$tmp = new DateTime($this->input->post('start_date'));
			$data['start_date'] = $tmp->format('Y-m-d');
			$tmp = new DateTime($this->input->post('end_date'));
			$data['end_date'] = $tmp->format('Y-m-d');
			$data['work_order'] = $this->input->post('work_order');
			$data['po_value'] = (float) $data['unit_price'] * $data['quantity'];
			
			$this->load->model('M_Po');
			$this->M_Po->insertPO($data);
		}
		
		$this->load->view('dashboard/po_new');
	}
}
