<?php
	if(!defined('BRAIN_CMS')) 
	{ 
		die('Sorry but you cannot access this file!'); 
	}
	try {
		$dbh = new PDO('mysql:host='.$db['host'].':'.$db['port'].';dbname='.$db['db'].'', $db['user'], $db['pass']);
	}
	catch (PDOException $e) {
		echo ("<div style='background-repeat: no-repeat;
		background-color: black;
		background-position: 100px 500%;
		padding: 10px 10px 10px 10px;
		-moz-border-radius: 5px;
		border-radius: 5px;
		-moz-box-shadow: 0 1px 1px #fff inset;
		box-shadow: 0 1px 1px #fff inset;
		border: 1px solid maroon !important;
		body: black;
		color: black;
		background: gray;
		display: table;
		margin: 0 auto;
		font-size: 15px;
		font-family: Tahoma;'><b>Oops There Is A Error :O</b><br>I was unable to connect to the provided MySQL server. Please ask the administrator to review the error message log for details.</div>"); 
		die();
	}