<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/

//include the database class
require_once("../database/dbconnectclass.php");

class Post extends DatabaseConnection
{


    /**
     *function to upload the post details into the database
     *@param post details
     *@return success or failure of upload
     **/
    function insertPosts($postmessage)
    {
           $person_id = $_SESSION['userid'];
    // query to insert data into the database
        $myQuery = "INSERT INTO post (post_message, user_id) VALUES ('$postmessage', '$person_id') ";
        return $this->query($myQuery);
    }

    function getPosts()
    {
        $query = "SELECT post.post_id, user.firstname, user.lastname, user.profile_pic, post.datetime_added, post.post_message 
        FROM post INNER JOIN user on user.user_id = post.user_id ORDER BY post.post_id DESC ";
        return $this->query($query);
    }
}

    ?>