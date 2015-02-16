<?php

// if get request is null
if(!$_GET)
{
	$get_data = array("TYPE"=>"GET", "parameters"=>"null");
	echo_json_encode($get_data);
}
// if post request is null
else if(!$_POST) 
{
	$post_data = array("TYPE"=>"POST", "parameters"=>"null");
	echo json_encode($post_data);
}

// if get request is successfully done
if($_SERVER['REQUEST_METHOD'] == "GET")
{
	// create array of all the keys and values
	$get_data = array("TYPE"=>"GET", "parameters"=>$_GET);
	// print the json object
	echo json_encode($get_data);
}
// if post request is successfully done
else if($_SERVER['REQUEST_METHOD'] == "POST")
{
	// create array of all the keys and values
	$post_data = array("TYPE"=>"POST", "parameters"=>$_POST);
	// print the json object
	echo json_encode($post_data);
}
?>