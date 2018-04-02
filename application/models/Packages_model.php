<?php

class Packages_model extends CI_Model
{
    
    function __construct() {
        parent::__construct();	
    }
    
    function add_user_package($userid,$package_id,$payment_details,$payment_type){
		$this->db->trans_start();
        $array = array('userid' => $userid,'package_id'=>$package_id,'payment_details'=>$payment_details,'payment_type'=>$payment_type,'purchase_date'=> config_item('current_date'),'status'=>'requested');
		$this->db->set($array);
		$this->db->insert('user_packages');
		$last_inserted_id = $this->db->insert_id();
		$this->db->trans_complete();
        return $last_inserted_id;
    }

    function editPackage($package_id,$package_name,$package_desc){
        $this->db->trans_start();
        $array = array('package_name'=>$package_name,'package_desc'=>$package_desc);
		$this->db->where('package_id', $package_id);
		$res = $this->db->update('package_master', $array);
		$this->db->trans_complete();
        return $res;
    }

    function addPackageMedia($package_id,$image_path,$type,$created_date){
        $this->db->trans_start();
		$array = array('package_image' => $image_path);
		$this->db->where('package_id', $package_id);
		$res = $this->db->update('package_master', $array); 
		$this->db->trans_complete();
        return true;
    }
}