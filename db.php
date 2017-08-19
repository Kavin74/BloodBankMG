<?php


$db_handle = mysql_connect("localhost","root","")or die("Error :".mysql_errno());
$db_found = mysql_select_db("test", $db_handle);


// some code

?>