<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/

//include the database class
require_once("../database/dbconnectclass.php");

class postDetails extends DatabaseConnection
{
   /**
     *function to display posts by a user
     *@param id of the user
     *@return object of the result (post details)
     **/
    function getUserposts($userId)
    {
        //Query
        $myQuery = "SELECT * FROM post WHERE user_id = '$userId' ORDER BY datetime_added DESC";

        //execution of query
        return  $this->query($myQuery);

    }


    /**
    *function to display photos uploaded/posted by user 
    **/
    function photoposts($user_id){
    	$myQuery ="SELECT photos FROM photo ";

    	return $this->query($myQuery);
    }


    /**
    *function to display videos uploaded/posted by user 
    **/
    function videoposts($user_id){
    	$myQuery ="SELECT video_format FROM video ";

    	return $this->query($myQuery);
    }
}

?>