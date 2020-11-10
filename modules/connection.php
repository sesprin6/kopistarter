<?php
	const HOST = 'localhost';
	const USER = 'root';
	const PASSWORD = '';
	const DATABASE = 'kopistarter';

	$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($connection->errno)
		die($connection->error);
