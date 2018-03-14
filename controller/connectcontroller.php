<?php
session_start();
/**
 *@author Selassie Golloh
 *@version 1.0
 **/
include_once('../classes/connectclass.php');

//class connectController
//{

$receiver_id = $_REQUEST['rid'];
$sender_id = $_SESSION['userid'];
$msg = $_REQUEST['msg'];

if($msg = 1)
{
    friendconnect($receiver_id, $sender_id);
} else
{
    friendblock($receiver_id, $sender_id);
}


function friendconnect($receiver_id, $sender_id)
{
    $connectClass = new connectDetails();
    $connectClass->friendconnect($receiver_id, $sender_id);
    header('Location: ../pages/searchpage.php');
    <div class ="aler"
    return $connectClass->fetchResultObject();

}


function friendblock($receiver_id, $sender_id)
{
    $connectClass = new connectDetails();
    $connectClass->friendblock($receiver_id, $sender_id);
    return $connectClass->fetchResultObject();
}


//}
/*
$cons = new connectDetails();
$cons->friendblock(11,13);
*/