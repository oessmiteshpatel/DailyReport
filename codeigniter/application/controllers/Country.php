<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Headers: *');
header('Content-Type: application/json');

class Country extends CI_Controller 
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Country_model');
	}
	public function add()
	{
		//$this->load->model('Country_model');
		$post_country = json_decode(trim(file_get_contents('php://input')), true);
		if ($post_country) 
			{
				if($post_country['CountryId']>0)
				{
					$result = $this->Country_model->edit_country($post_country);
					if($result)
					{
						echo json_encode($post_country);	
					}	
				}
				else
				{
					$result = $this->Country_model->add_country($post_country);
					if($result)
					{
						echo json_encode($post_country);	
					}	
				}
					
			}
	}
	
	public function getById($country_id=null)
	{	
		//$this->load->model('Country_model');
		if(!empty($country_id))
		{
			$data=[];
			$data=$this->Country_model->get_countrydata($country_id);
			echo json_encode($data);
		}
	}
	
	public function getAll()
	{
		$data="";
		//$this->load->model('Country_model');
		$data=$this->Country_model->getlist_country();
		//print_r($data);
		//.exit;
		echo json_encode($data);
	}
	
	public function delete($country_id = NULL) 
	{
		//$this->load->model('Country_model');
		if(!empty($country_id)) {

			$result = $this->Country_model->delete_country($country_id);			
			if($result) {
				echo json_encode("Delete successfully");	
			}	
			
		} 
			
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
					$result = $this->Country_model->add_project($post_project);
					if($result)
					{
						echo json_encode($post_project);	
					}	
				// }
					
			}
	}
	
}
