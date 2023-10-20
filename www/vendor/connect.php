<?php

	$connect = mysqli_connect('localhost', 'root', 'root', 'aut_and_reg_db');

	if (!$connect) {
		die('Erroe connect to DataBase');
	}

?>