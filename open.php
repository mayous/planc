<?php
$con = mysql_connect($dbhost,$dbuser,$dbpass);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  else	
  {
  mysql_select_db($dbname);
  }

?>