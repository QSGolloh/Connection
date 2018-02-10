
<?php
/**
 *@author Selassie Golloh
 *@version 1.0 
 **/

//include the database class
require_once("../database/dbconnectclass.php");

/**
* method to load all majors
*/
function loadAllMajor(){
    $loadcat = new DatabaseConnection;
    $sql_query = "SELECT * FROM major";
    $cat_query = $loadcat->query($sql_query);
    if ($cat_query){
        while ($row = $loadcat->fetch()) {
            echo '<option value ='.$row['major_id'].'>'.$row['major_name'].'</option>'.'<br>';
        }
    }
}


/**
* method to load all year groups
*/
function loadyeargroups(){
    $loadbrand = new DatabaseConnection;
    $sql_query = "SELECT * FROM year_group";
    $brand_query = $loadbrand->query($sql_query);
    if ($brand_query){
        while ($row = $loadbrand->fetch()) {
            echo '<option value ='.$row['year_group_id'].'>'.$row['year_groupname'].'</option>'.'<br>';
        }
    }
}

function getYearGroup($yearId){
    $yearId = (int)$yearId;
    $getYear = new DatabaseConnection;
    $query = "SELECT year_groupname FROM year_group WHERE year_group_id = '$yearId'";
    $getYear->query($query);
    return $getYear->fetch()['year_groupname'];

}




