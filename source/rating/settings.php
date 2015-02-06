<?php 
$rating_tableName     = 'ratings';
$rating_unitwidth     = 15;
$rating_dbname        = 'xxx';
$units=5;
function connect(){
	$host="localhost";
 $uname="xxx";
 $pass="abc123";
 $rating_dbname        = 'xxx';

$con = mysql_connect($host,$uname,$pass);

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db($rating_dbname, $con);}


