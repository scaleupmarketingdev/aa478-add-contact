<?php
//Test Connection

// create/update a new contact "7-25-2019"
require_once("isdk.php");	
$app = new iSDK;

if( $app->cfgCon("aa478")){ 

	$newcontactname = $_REQUEST['newcontactname'];
	$newcontactemail = $_REQUEST['newcontactemail'];
	$newcontactjob = $_REQUEST['newcontactjob'];
	$company = $_REQUEST['company'];
	$tagID = $_REQUEST['tagID'];
	$SearchTag = $_REQUEST['SearchTag'];
	$eventabbrevation = $_REQUEST['eventabbrevation'];
	$eventname = $_REQUEST['eventname'];
   
   
	//Check and update if duplicate / create if none
$app->addWithDupCheck(array('FirstName' => $newcontactname, 'Email' => $newcontactemail,'JobTitle' => $newcontactjob,'_EventAbbrevation' => $eventabbrevation,'Company' => $company,'_EventName' => $eventname),'Email');
	 
	//Get the User id inorder to add tag
	$returnFields = array('Id');
	$data = $app->findByEmail($newcontactemail, $returnFields);
	
	   
	//Get the id
	foreach($data as $datas){
		$user_id = $datas['Id'];
	}
	  
	echo $user_id; 
	
	//Add Tag ID to contact
	$result = $app->grpAssign($user_id, $tagID);
	
	
	//Insert Event Name and Event Abbrevation
	//$grpp = array('_EventAbbrevation' => $eventabbrevation,
	//	'_EventName' => $eventname);
		
	
	//$grpID = $app->updateCon($user_id, $grpp);
	
	
	//Find tag ID Group name = IA27-HK Event Registration Website
	$returnFields = array('Id');
	$contacts = $app->dsFind('ContactGroup',1,0,'GroupName',$SearchTag,$returnFields);
		
	foreach($contacts as $contact){
		$tag_id = $contact['Id']; 
	}	
		echo $tag_id;
		
	//put tag to the ID
	$result = $app->grpAssign($user_id, $tag_id);
 
} 	
?> 

	
