<?php

class Project_model extends CI_Model
{
	
	public function add_project($post_project)
	{
		if($post_project)
		{
			$project_data=array(
				"ProjectName"=>$post_project['ProjectName'],
				"ProjectSummary"=>$post_project['ProjectSummary'],
				"StartDate" =>$post_project['StartDate'],
				"EndtDate" =>$post_project['EndtDate']
				
			);	
				
				$res=$this->db->insert('tblmstproject',$project_data);
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