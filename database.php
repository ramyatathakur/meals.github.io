<?php
$a=new mysqli("localhost","root","ridhi","meals");
//$a=mysql_select_db("meals");
if(!$a)
{
	echo "db not connected";
}
?>
