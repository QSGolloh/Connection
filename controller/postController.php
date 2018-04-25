<?php
/**
 *@author Selassie Golloh
 *@version 1.0
 **/
include_once('../classes/postclass.php');

class PostController
{

	function insertPosts($postmessage)
	{
		$postClass = new Post();
		$postClass->insertPosts($postmessage);
		return $postClass->fetchResultObject();
	}


	function getPosts()
	{
		$posts = new Post();
		$posts->getPosts();
		return $posts->fetchResultObject();

	}


}

?>