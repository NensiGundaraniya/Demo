<?php
	include 'connection.php';
	$del=$_GET['del'];
	mysql_query("delete from student_table where Student_Id=".$del);
	header('location:dis.php');
	
?>