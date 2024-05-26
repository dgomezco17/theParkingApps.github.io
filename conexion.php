<?php
	$mysql = new mysqli(
	"216.158.231.74",
	"userdbparking",
	"Parking$2019",
	"registro_theparking"
	);
	if($mysql->connect_error){

		die("Failed to connect". $mysql->connect_error);
	}else{
		echo "Succesfully";
	}
