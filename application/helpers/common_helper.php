<?php
$CI =& get_instance();
function getPackages($package_id=0,$filterArray = array(),$wherein="")
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getPackages($package_id,$filterArray,$wherein);
	return $result;	
}

function getPackageMedia($package_id=0,$package_media_id=0)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getPackageMedia($package_id,$package_media_id);
	return $result;	
}

function getUserPackages($userid=0,$filterArray = array())
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getUserPackages($userid,$filterArray);
	return $result;
}

function checkUsernameExists($username)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->checkUsernameExists($username);
	return $result;	
}

function checkEmailIDExists($tablename,$email)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->checkExists($tablename,$email);
	return $result;	
}

function checkMobileNumberExists($tablename,$mobile)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->checkExists($tablename,$mobile);
	return $result;	
}

function checkAlignmentSetOfUser($username)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->checkAlignmentSetOfUser($username);
	return $result;	
}

function getUserInfo($userid=0,$username='',$limit=null,$offset=null)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getUserInfo($userid,$username,$limit,$offset);
	return $result;	
}

function getNotifications($notification_id = 0,$packages = array())
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getNotifications($notification_id,$packages);
	return $result;	
}

function getNews($news_id = 0)
{
	global $CI;
	$CI->load->model('Common_model');
	$result = $CI->Common_model->getNews($news_id);
	return $result;	
}

function getDirectUsers($userids=array())
{
       global $CI;
       $CI->load->model('Common_model');
       $result = $CI->Common_model->getDirectUsers($userids);
       return $result; 
}

function getParentDirectUsers($userids=array())
{
   	global $CI;
   	$CI->load->model('Common_model');
   	$result = $CI->Common_model->getParentDirectUsers($userids);
   	return $result; 
}

function getTreeParentDirectUsers($userid=0)
{
	global $CI;
	$id= $userid;
	$tree = array();
	for($i = 1;$i <= 7 ;$i++)
	{
		if($id > 0)
		{
			$result = getParentDirectUsers($id);
			$id = 0;
			foreach ($result as $row) {
				if($row['sponsorid'] > 0)
				{
					$data = getUserInfo($row['sponsorid']);
					$tree[$i] = array('userid'=>$row['sponsorid'],'status'=>$data['status']);	
					$id=$row['sponsorid'];
				}
			}
		}
	}	
	return $tree;
}
//$CI->output->enable_profiler(TRUE);
?>