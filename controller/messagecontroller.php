<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/
include_once('../classes/connectclass.php');

class messageController
{

	function messagefriend($sender_id, $recipient_id, $message){
	{
		$messageClass = new messageDetails();
		$messageClass->messagefriend($sender_id, $recipient_id, $message);
		return $messageClass->fetchResultObject();
	}


?>