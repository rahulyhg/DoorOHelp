<?php 
	include '../../config.php';
	$delete = "delete from services where id = '$_GET[id]'";
	mysqli_query($con,$delete);
	header("location:../main.php?pg=listServices&d=501");
 ?>