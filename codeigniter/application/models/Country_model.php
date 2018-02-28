<?php

class Country_model extends CI_Model
{
	public function add_country($post_country)
	{
		if($post_country)
		{
			$country_data=array(
				"CountryName"=>$post_country['CountryName'],
				"CreatedBy" => 2,
				"UpdatedBy" => 2,
				
			);	
				
				$res=$this->db->insert('tblmstcountry',$country_data);
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
	
	public function get_countrydata($country_id=Null)
	{
	  if($country_id)
	  {
		 $this->db->select('*');
		 $this->db->where('CountryId',$country_id);
		 $result=$this->db->get('tblmstcountry');
		 $company_data= array();
		 foreach($result->result() as $row)
		 {
			$company_data=$row;
			
		 }
		 return $company_data;
		 
	  }
	  else
	  {
		  return false;
	  }
	}
	
	 public function edit_country($post_country) {
	
		if($post_country) {
			
			$country_data = array(
				'CountryName' => $post_country['CountryName'],
				
				'UpdatedOn' => date('y-m-d H:i:s'),
			);
			
			$this->db->where('CountryId',$post_country['CountryId']);
			$res = $this->db->update('tblmstcountry',$country_data);
			
			if($res) 
			{
				return true;
			} else
				{
				 return false;
			    }
		}
		else 
		{
			return false;
		}	
	
	}
	
	function getlist_country()
	{
		$this->db->select('*');
		$result=$this->db->get('tblmstcountry');
		
		$res=array();
		if($result->result())
		{
			$res=$result->result();
		}
		return $res;
	}
	
	public function delete_country($country_id) 
	{
	
		if($country_id) 
		{
			
			$this->db->where('CountryId',$country_id);
			$res = $this->db->delete('tblmstcountry');
			
			if($res) {
				return true;
			} else {
				return false;
			}
		} 
		else 
		{
			return false;
		}
		
	}
	
	
}