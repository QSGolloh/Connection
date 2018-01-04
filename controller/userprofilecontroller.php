<?php
include_once('../classes/userprofileclass.php');

class UserController
{

	function getUserByMajor($major)
	{
		$profClass = new profile();
		$profClass->editprofile($user_id, $lname, $poWork, $ppic);
		return $profClass->fetchResultObject();
	}
//are u with me hun? over yh over am i done? over
	//kinda...so the next thing we have to worry about is how
	//you will be getting these parameters, but we will do that when we put in the template cool?yhp
	//so technically done with task 3 backend, left with frontend....yaay over yaaay over
	///lets see the complexity of task 4 and 5 ans see if we should do those rn or not over ohk over
}

?>