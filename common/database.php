<?php
/* GLOBALS */
	date_default_timezone_set('America/New_York');


function mySQLQuery($theQuery) {
		$databaseHost = 'localhost';
		$databaseUser = 'inventory';
		$databasePassword = 'inventory';
		$databaseName = 'sdny_inventory';
		$databasePort = '3306';
/* 		$databaseSock = "/tmp/mysql.sock"; */
		print $theQuery;
		
 		$databaseConnection = mysql_connect($databaseHost, $databaseUser, $databasePassword); 
 			
 		if ($databaseConnection){
 			
 			if (mysql_select_db($databaseName)){
 
  				//$theStartTime = microtime();
 				$theResult = mysql_query($theQuery) or die("<b style=\"color: red;\">MySQL ERROR! ".mysql_error().", While Executing Query: <i>$theQuery</i></b>");
 				
 				//$theLastID = mysql_insert_id();
 				//$theEndTime = microtime();
 				
 				//$theTimeQueryTook = $theEndTime - $theStartTime;
 				
 				//TODO: Add query logging/display functions.
 				
 				mysql_close($databaseConnection);
 				return $theResult;
 			}
 		}else{
 			return "<b class=\"error\" style=\"\">MySQL ERROR! ".mysql_error().", While Executing Query: <i>$theQuery</i></b>";
 		}
	}

/* FUNCTIONS */
/*###################################################################################*/

/*###################################################################################*/
/*###################################################################################*/
/*###################################################################################*/
/*###################################################################################*/
/*###################################################################################*/

?>