<p style="text-align: center;"><img src="https://cdn.jotfor.ms/img/check-icon.png" alt="" width="128" height="128" /></p>
<div style="text-align: center;">
<h1 style="text-align: center;">Thank You!</h1>
<p style="text-align: center;">You submission will be up for approval.</p>
</div>

<?php

function ExtendedAddslash(&$params){
	foreach($params as &$var){
		//check if $var is an array. If yes, it will start another ExtendedAddslash
		//function to loop to each key inside
		is_array($var)?ExtendedAddslash($var):$var=addslashes($var);
	}
}
	//initialize ExtendedAddslash()function for every $_POST variable
	ExtendedAddslash($_POST);
	
	$submission_id = $_POST['submission_id'];
	$formID = $_POST['formID'];
	$ip = $_POST['ip'];
	$foodlevel = $_POST['foodlevel'][0];
	$population = $_POST['population'];
	$date = $_POST['date'][0]."/".$_POST['date'][1]."/".$_POST['date'][2];
	$clickto8 = $_POST['clickto8'];
	
	$db_host='localhost';
	$db_username='root';
	$db_password='';
	$db_name='foodnonfood';
	$db_connect = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die(mysqli_error());
	
	//search submission ID
	
	$query = "SELECT * FROM food WHERE submission_id = '$submission_id'";
	$sqlsearch = mysqli_query($db_connect, $query);
	$resultcount = mysqli_num_rows($sqlsearch); 
	
	if($resultcount > 0){
		mysqli_query($db_connect, "UPDATE food SET
								foodlevel = '$foodlevel',
                                population = '$population',
                                date = '$date', clickto8 = '$clickto8'")
		or die(mysqli_error($db_connect));
		
	}else{
		mysqli_query($db_connect, "INSERT INTO food
					(submission_id, 
					formID, IP, foodlevel, population, date, clickto8)
					VALUES 
					('$submission_id', '$formID', '$ip', '$foodlevel', '$population', '$date', '$clickto8')")
		or die(mysqli_error($db_connect));
		
	}
	
?>