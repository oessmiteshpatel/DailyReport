<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');
header('Content-Type: application/json');

class Project extends CI_Controller 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Project_model');
	}
	
	
	public function addproject()
	{
		//$this->load->model('Country_model');
		$post_project = json_decode(trim(file_get_contents('php://input')), true);
		if ($post_project) 
			{
				// if($post_project['CountryId']>0)
				// {
					// $result = $this->Country_model->edit_country($post_project);
					// if($result)
					// {
						// echo json_encode($post_project);	
					// }	
				// }
				// else
				// {
					$result = $this->Project_model->add_project($post_project);
					if($result)
					{
						echo json_encode($post_project);	
					}	
				// }
					
			}
	}
	
}
