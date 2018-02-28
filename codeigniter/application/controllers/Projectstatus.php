<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');
header('Content-Type: application/json');

class Projectstatus extends CI_Controller 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Projectstatus_model');
	}
	
	
	public function addprojectstatus()
	{
		//$this->load->model('Country_model');
		$post_projectstatus = json_decode(trim(file_get_contents('php://input')), true);
		if ($post_projectstatus) 
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
					$result = $this->Projectstatus_model->add_projectstatus($Projectstatus);
					if($result)
					{
						echo json_encode($Projectstatus);	
					}	
				// }
					
			}
	}
	
}
