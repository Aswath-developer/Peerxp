<?php

session_start();


if(isset($_POST['mode']) && $_POST['mode']=='CreateTicket')
{
	//Ticket creation functionality
	$auth_token = ''; //your_auth_token
    $org_id=''; //your_organization_id
    
    $ticket_data=array(
        "departmentId"=>"",
        "subject"=>"Ticket"
    );
    
    $headers=array(
            "Authorization: $auth_token",
            "orgId: $org_id",
            "contentType: application/json; charset=utf-8",
    );
    
    $url="https://desk.zoho.com/api/v1/tickets";
    
    $ticket_data=(gettype($ticket_data)==="array")? json_encode($ticket_data):$ticket_data;
    
    $ch= curl_init($url);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_POST,TRUE);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$ticket_data); //convert ticket data array to json
    
    $response= curl_exec($ch);
    $info= curl_getinfo($ch);
    
    if($info['http_code']==200){
        echo "<h2>Request Successful";
       
    }
    else{
        echo "Request not successful. Response code : ".$info['http_code']." <br>";
       
    }
    
    curl_close($ch);
}


?>