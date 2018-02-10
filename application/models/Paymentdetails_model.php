<?php

class Paymentdetails_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function addPackage($package_name,$package_amount,$package_desc){
		$this->db->trans_start();
        $array = array('package_amount' => $package_amount,'package_name'=>$package_name,'package_desc'=>$package_desc, 'package_created_date' => config_item('current_date'),'package_status'=>'active');
		$this->db->set($array);
		$this->db->insert('package_master');
		$last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete();
        return $last_inserted_id;
    }
}