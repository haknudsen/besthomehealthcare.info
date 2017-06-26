<?php

// ############################################################################
// # Get Local City						                                      #
// # ------------------------------------------------------------------------ #
// # Copyright (c) 2005-2007 Wuranga Ltd. All Rights Reserved                 #
// #                                                                          #
// # Version: 1.2		Date: 11 March 2007		Author: Dan Raine		  	  #
// #                                                                          #
// ############################################################################

// This script gets the city closest to the IP address of the visitor

// ############################################################################
function GetLocalCity ($defaultCity,$license) {
// ############################################################################

	// Get the IP address of the visitor
	$visitorIP = $_SERVER['REMOTE_ADDR'];
	
	// Get the class C address
	$tst = preg_match("/\d{1,3}(\.\d{1,3}){2}/",$visitorIP,$matches);
	
	$visitorIP = $matches[0];
	
	$server = "http://services.wuranga.com/";
	$service = "GetLocalCity/";
	$request = "?ip=$visitorIP&license=$license";
	
	// connect to the server to get the information
	$result = file_get_contents($server . $service . $request);
	
	// What result am I getting
	
	// Invalid license
	if ($result == "0") {
		ErrorMessage("Your license is invalid, please make sure you have entered it correctly.");
	}
	
	// Temporary server error
	if ($result == "1") {
		return $defaultCity;
	}
	
	// No city associated with that IP address
	if ($result == "2") {
		return $defaultCity;
	}
	
	// Otherwise return the closest city
	return $result;

}

// ############################################################################
function ErrorMessage ($errorMessage) {
// ############################################################################

	echo "<div align='center'><br /><strong><font color='#ff0000' face = 'arial'>$errorMessage</font></strong><br /></div>";

	exit(0);

}



?>