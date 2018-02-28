<?php

class Projectstatus_model extends CI_Model
{
	
	public function add_projectstatus($post_projectstatus)
	{
		if($post_projectstatus)
		{
			$projectstatus_data=array(
				"ProjectStatusName"=>$post_projectstatus['ProjectStatusName'],
				"IsActive"=>'1'
				
			);	
				
				$res=$this->db->insert('tblmstprojectstatus',$projectstatus_data);
				if($res)
				{
					return true;
				}
				else
				{
					return false;
				}
		}
		else
		{
				return false;
		}
	}
}