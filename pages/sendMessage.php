<?php
session_start();
$_SESSION['userid'])
require_once("../database/dbconnectclass.php");
function sanitize($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlentities($data);
  return $data;
}
$load = new DatabaseConnection();
$sender = $_SESSION['email'] ;
$
$message = isset($_GET["message"]) ? sanitize($_GET["message"]): null;
$process_query = $load->query("INSERT INTO messageUsers (senderId, receiverId, message_type) Values ($sender, )");
if($process_query){
  $data = array();
  while($row = $load->fetch()){
    $data[] = $row;
  }
  echo json_encode($data);
}
?>