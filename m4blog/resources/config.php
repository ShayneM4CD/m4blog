<?php

$db_con = @mysqli_connect('localhost','root','NyakNyak','my_data' );

if(!$db_con){
	die('could not connect' . mysqli_errno());
}

$m4blog = "$_SERVER[DOCUMENT_ROOT]/m4blog/";

date_default_timezone_set('Canada/Eastern');

?>
