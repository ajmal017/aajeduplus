<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_user_packages extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();
        $this->load->model('Adminuserpackages_model');
    }

	public function index()
	{
		$session_data = $this->session->userdata;
		$data = array();
		$data['session_data'] = $session_data;

		$this->load->view('template/admin/user_packages',$data);
	}

	public function view_user_package_list()
	{
		$session_data = $this->session->userdata;
		$data = array();
		$data['session_data'] = $session_data;

		$this->load->view('template/admin/view_user_package_list',$data);
	}

	function deleteUserPackageRequest(){
		if($this->input->post())
		{
			$status = '';
			$message = '';
			$user_package_id = $this->input->post('user_package_id');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_package_id', 'User Package ID', 'required');
			
			$this->form_validation->run();
	        $error_array = $this->form_validation->error_array();

	        if(count($error_array) == 0 )
	        {
		        $this->Adminuserpackages_model->deleteUserPackageRequest($user_package_id);	
				$status = 'success';
			    $message = 'Request Deleted successfully';	
			    $status_code = 200;
	        }else
	        {
	        	$status = 'error';
	        	$message = $error_array;
	        	$status_code = 501;
	        }
			
	        $response = array('status'=>$status,'message'=>$message);
			echo responseObject($response,$status_code);	
		}
    }

    function userPackageRequestAction(){
		if($this->input->post())
		{
			$status = '';
			$message = '';
			$user_package_id = $this->input->post('user_package_id');
			$userid = $this->input->post('userid');
			$amount = $this->input->post('amount');
			$months = $this->input->post('months');

			$this->load->library('form_validation');
			$this->form_validation->set_rules('user_package_id', 'User Package ID', 'required');
			$this->form_validation->set_rules('userid', 'UserID', 'required');
			$this->form_validation->set_rules('amount', 'Amount', 'required');
			$this->form_validation->set_rules('months', 'Months', 'required');
			
			$accepted_date = config_item('current_date');
			$this->form_validation->run();
	        $error_array = $this->form_validation->error_array();

	        if(count($error_array) == 0 )
	        {
		        $this->Adminuserpackages_model->userPackageRequestAction($user_package_id,$userid,$amount,$months);	
		        $obj = new Payout();
		        $obj->referral_bonus($amount,$accepted_date,$userid,$user_package_id);
				$status = 'success';
			    $message = 'Request Accepted successfully';	
			    $status_code = 200;
	        }else
	        {
	        	$status = 'error';
	        	$message = $error_array;
	        	$status_code = 501;
	        }
			
	        $response = array('status'=>$status,'message'=>$message);
			echo responseObject($response,$status_code);	
		}
    }
}
