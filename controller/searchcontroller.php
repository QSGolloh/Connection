<?php
include_once('../classes/searchclass.php');

class SearchController
{

	function getUserByMajor($major)
	{
		$searchClass = new searchUser();
		$searchClass->getUserByMajor($major);
		/*
		SO I MADE AN INSTANCE OF THE SEARCH USER CLASS
		THIS IS BECAUSE YOU DONT WANT USERS TO COMMUNICATE DIRECTLY WITH YOUR DB
		SO I MADE A FUNCTION THAT CALLS THE SEARCH BY MAJOR
		THE FETCH OBJECT RESULT RETURNS AN ARRAY OF ALL THE SEARCH THAT MATCHED THE QUERY
		IF I USED FETCH, IT WILL RETURN JUST THE FIRST ONE.
		SO WHAT I AM DOING DOWN THERE IS TO LOOP THROUGH THE RESULTS I FOUND.
		ONCE WE PUT IN THE TEMPLATE, WE WILL DO THE LOOPING IN THE VIEW AND NOT HERE.
		DO YOU GET ME? yes thanks b WELCOME LOVE :) <3
		*/
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