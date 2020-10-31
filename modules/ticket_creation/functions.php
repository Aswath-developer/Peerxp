<?php

session_start();


if(isset($_POST['mode']) && $_POST['mode']=='CreateTicket')
{
	//Ticket creation functionality
	$cat = '';
	if(isset($_POST['support'])){
		
		if($_POST['support'] == 'PWSLab DevOps Support'){
			$depid = '7189000000051431';
			$sub = $_POST['subject'];
			$description = $_POST['desc'];
			$email = $_POST['email'];
			$phno = $_POST['phno'];
			$contact_name = $_POST['contact_name'];
			$priority = $_POST['priority'];
		}else if($_POST['support'] == 'iSupport'){
			$depid = '7189000001062045';
			$sub = $_POST['sup_subject'];
			$description = $_POST['sup_desc'];
			$email = $_POST['sup_email'];
			$phno = $_POST['sup_phno'];
			$contact_name = $_POST['sup_contact_name'];
			$priority = $_POST['sub_priority'];
		}
		if(isset($_POST['category'])){
			$cat = $_POST['category'];
		}
	//Credentials
	$auth_token = '9446933330c7f886fbdf16782906a9e0'; //your_auth_token
    $org_id='60001280952'; //your_organization_id
    
	//Paramenters
        $ticket_data=array(
        "departmentId" =>$depid,
        "category" => $cat,
        "subject" => $sub,
        "description" => $description,
        "email" => $email,
        "phone" => $phno,
        "priority" => $priority,
		"contact" => array(
			"lastName" => "M",
			"firstName" => $contact_name,
			"phone" => "6454554654",
			"email" => $email
		)
    );
    
	//Header
    $headers=array(
            "Authorization: $auth_token",
            "orgId: $org_id",
            "contentType: application/json; charset=utf-8",
    );
    //Zoho URL
    $url="https://desk.zoho.in/api/v1/tickets";
    
    $ticket_data=(gettype($ticket_data)==="array")? json_encode($ticket_data):$ticket_data;
    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_POST,TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$ticket_data); //convert ticket data array to json
    
    $response= curl_exec($ch);
    $info= curl_getinfo($ch);
    
    if($info['http_code']==200){
        echo 1;
    }
    else{
        echo 0;
    }
    curl_close($ch);
	
	}
}


?>