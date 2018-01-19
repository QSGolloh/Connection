
<?php
/**
 *@author Selassie Golloh
 *@version 1.0 
 **/

//include the database class
require_once("../database/dbconnectclass.php");

class searchUser extends DatabaseConnection
{
  
    /**
     *function to display the users with a particular name
     *@return users with such name
     **/
    function getUserByName($name)
    {
        $arr = explode(" ", $name); // splits data in $name

        if (sizeof($arr) > 1){ //if data in array is more that one,
            $first= $arr[0]; // place first data in $first
            $last = $arr[sizeof($arr) -1]; // place other data in $last
            $myQuery = "SELECT * FROM user WHERE firstname = '$first' AND lastname = '$last'";//searches for both first and last name of user 
        } else {
        $myQuery = "SELECT * FROM user WHERE firstname = '$name' OR lastname = '$name'";
        }

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

