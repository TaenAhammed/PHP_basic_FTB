<?php 
	// echo date('l');	//Day of weak
	// echo date('d'); 	//Day
	// echo date('m'); 	//Month
	// echo date('y'); 	//year
	// echo date('Y'); 	//Year

	// echo date('l - d/m/Y');
	date_default_timezone_set("Asia/Dhaka");
	// echo date('h/i/s/a');	// Hour / Minute/ Second / am/pm

	$timeStamp = mktime(05, 30, 45, 12, 12, 1998);
	// echo $timeStamp;
	// echo date('h:i:sa - d/m/y', $timeStamp);

	$timeStamp2 = strtotime('05:30pm October 16 2018');
	$timeStamp3 = strtotime('tomorrow');
	$timeStamp4 = strtotime('next Friday');
	$timeStamp5 = strtotime('+2 Days');
	// echo $timeStamp2;
	echo date('h:i:sa - d/m/Y', $timeStamp5);
?>