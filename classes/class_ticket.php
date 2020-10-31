<?php

class Ticket {
	
	function getAllTickets(){
		$auth_token = '9446933330c7f886fbdf16782906a9e0'; //your_auth_token
		$org_id=60001280952; //your_organization_id
		
		$headers=array(
				"Authorization: $auth_token",
				"orgId: $org_id",
				"contentType: application/json; charset=utf-8",
		);
		
		$params="&include=contacts,products"; //options as parameters
		
		$url="https://desk.zoho.in/api/v1/tickets?$params";
		
		$ch= curl_init($url);
		curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
		curl_setopt($ch,CURLOPT_HTTPGET,TRUE);
		
		$response= curl_exec($ch);
		$info= curl_getinfo($ch);
		
		if($info['http_code']==200){
			$res = json_decode($response, TRUE); 
		}
		else{
		   $res = array();
		}
		return $res;
	}
}
