<?php
require_once("../database/dbconnectclass.php");
function sanitize($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlentities($data);
  return $data;
}
$load = new DatabaseConnection();
$message = isset($_GET["message"]) ? sanitize($_GET["message"]): null;
$senderId = isset($_GET["sender"]) ? sanitize($_GET["sender"]): null;
$receiverId = isset($_GET["receiver"]) ? sanitize($_GET["receiver"]): null;
$process_query = $load->query("INSERT INTO messages(senderId, receiverId, message) VALUES ('$senderId', '$receiverId', '$message')");
if($process_query)
{
    $newD = new DatabaseConnection();
  	$query = $newD->query("SELECT * FROM messages WHERE senderId=$senderId AND receiverId=$receiverId");
  	if($query){
        $data = array();
        while($row = $newD->fetch()){
            $data[] = $row;
        }
        echo json_encode($data);
    }else{
    	echo "BAD";
    }

}else{
	echo "FALSE";
}
?>