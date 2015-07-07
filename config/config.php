<?php
$conn = null;

if( $conn == null )
{
	$conn = mysqli_connect('localhost','root','vertrigo')or die(mysql_error());

	mysqli_select_db($conn,'tests_security')or die(mysql_error());
}