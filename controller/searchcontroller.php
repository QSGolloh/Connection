<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/
include_once('../classes/searchclass.php');

class SearchController
{
     
	function getUserByMajor($major)
	{
		$searchClass = new searchUser();
		$searchClass->getUserByMajor($major);
		return $searchClass->fetchResultObject();
	}

	function getUserByYear($year)
	{
		$searchClass = new searchUser();
		$searchClass->getUserByYeargroup($year);
		return $searchClass->fetchResultObject();

	}

	function getUserByName($name)
	{
		$searchClass = new searchUser();
		$searchClass->getUserByName($name); 
		return $searchClass->fetchResultObject();

	}

}

?>