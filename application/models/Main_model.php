<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Main_model extends CI_Model
{
	public function user_login($userdata = array(),$table_name)
	{
		$where = array('username' => $userdata['login_usr']);
		$query = $this->db->get_where($table_name,$where);
		$row = $query->row();
		if(!empty($row))
		{
			if($row->set_pass == 1)
			{
				// for new users
				if($userdata['login_pwd'] == $row->password)
				{
					// set user session
					$newdata = array(
						'username'=>$row->username,
						'user_role'=>$row->user_role,
						'logged_in'=>TRUE,
						'sys_name'=>'brgycase_sys'
					);
					$this->session->set_userdata($newdata);
					return true;
				}
			} else {

			}
		} else {
			// user not found from the database
			return false;
		}
	}
	
}






?>