
<?php
/**
 *@author Selassie Golloh
 *@version 1.0 
 **/

//include the database class
require_once("../database/dbconnectclass.php");

class searchUser extends DatabaseConnection
{
    //properties
    //methods
    
    /**
     *function to display the user details
     *@return user details
     **/
    function getUserById($user_id)
    {
        //Query
        $myQuery = "SELECT * FROM user WHERE user_id = '$user_id' LIMIT 1";

        //execution of query
        return  $this->query($myQuery);

    } //so technically we are done with task two. we can use this function right here
    //we dont need to write it again...we can just instantiate the class....cool?ohk over
    //yaay....to task 3 over

    /**
     *function to display the users with a particular name
     *@return users with such name
     **/
    function getUserByName($name)
    {
        $myQuery = "SELECT * FROM user WHERE firstname = '$name'  OR lastname='$name'";
        //execution of query
        return $this->query($myQuery);
    }

   /**
     *function to search by major
     *@return users with particular major
     **/
    function getUserByMajor($major)
    {
        $myQuery = "SELECT * FROM user WHERE major ='$major'"; 


        //execution of query
        return $this->query($myQuery);
    }


     /**
     *function to search by major
     *@return users with particular major
     **/
    function getUserByYeargroup($yeargroup)
    {
        $myQuery = "SELECT * FROM user WHERE year_group ='$yeargroup'";

        //execution of query
        return $this->query($myQuery);
    }


}

