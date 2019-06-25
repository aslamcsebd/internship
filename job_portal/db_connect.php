<?php
	function db() {
		$conn =mysqli_connect('localhost', 'root', '123456', 'job_portal');
		return $conn;
	}
?>