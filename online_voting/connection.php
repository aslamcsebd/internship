<?php
	function vote() {
		$vote =mysqli_connect('localhost','root','123456','online_voting');
		return $vote;
	}
?>