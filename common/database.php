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
/* 		print $theQuery; */
		
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
function type_menu()
{
	$sql_result =  mySQLQuery("SELECT SQL_CACHE * FROM inv_type_view");
	while($type_row = mysql_fetch_assoc($sql_result) )
	{ $opt .= "<option value=\"".$type_row['id']."\">".$type_row['type']."&nbsp;&nbsp;&nbsp;&nbsp;</option>"; }
	return $opt;
}
/*###################################################################################*/
function manuf_menu()
{
	$sql_result =  mySQLQuery("SELECT SQL_CACHE * FROM inv_manuf_view");
	while($type_row = mysql_fetch_assoc($sql_result) )
	{ $opt .= "<option value=\"".$type_row['id']."\">".$type_row['manufacture']."&nbsp;&nbsp;&nbsp;&nbsp;</option>"; }
	return $opt;
}
/*###################################################################################*/
/*###################################################################################*/
/*###################################################################################*/
/*###################################################################################*/

?>