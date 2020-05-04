<?php
function getSiteDetails($data) {
	include ("dbInit.php");
	$sql = "SELECT * FROM settings";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row[$data];
}
function getUserFullName($user_id){
	include('dbInit.php');
	$sql = "SELECT * FROM users WHERE user_id = $user_id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	return $row['user_full_name'];
}
function editSiteSettings($siteTitle, $contactEmail, $topBarTheme, $sideBarTheme, $version /*, $yourExtraVariables */){
	include 'dbInit.php';
	//Escape the inputs
	$siteTitle = mysqli_real_escape_string($conn, $siteTitle);
	$contactEmail = mysqli_real_escape_string($conn, $contactEmail);
	$topBarTheme = mysqli_real_escape_string($conn, $topBarTheme);
	$sideBarTheme = mysqli_real_escape_string($conn, $sideBarTheme);
	$version = mysqli_real_escape_string($conn, $version);
//	$additionalInput = mysqli_real_escape_string($conn, $siteTitle); - Should always be escaped
	$sql = "UPDATE settings 
				SET 
					siteTitle = '$siteTitle',
					contactEmail = '$contactEmail',
					topBarTheme = '$topBarTheme',
					sideBarTheme = '$sideBarTheme',
					VERSION = '$version'
				WHERE
					id = 1
				";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		$return = 0;
	}else{
		$return = 1;
	}
	return $return;
}