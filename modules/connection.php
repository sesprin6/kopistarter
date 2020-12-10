<?php
	const HOST = 'localhost';
	const USER = 'ksadmin';
	const PASSWORD = 'Kopistarter18';
	const DATABASE = 'kopistarter';

	$connection = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if ($connection->errno)
		die($connection->error);
