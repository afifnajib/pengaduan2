<?php 
	$config = mysqli_connect("localhost","root","123456","pengaduan2");
	if (mysqli_connect_errno($config)) {
		echo "<h2>Status Connection Failed, Because </h2>".mysqli_connect_error();
	}
 ?>