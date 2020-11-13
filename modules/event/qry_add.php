<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$create_time = date('Y-m-d');

	$p_statement = $connection->prepare(QUERY_ADD);
	$p_statement->bind_param(
		'ssis',
		$_POST[KEY_TITLE],
	$_POST[KEY_DESCRIPTION],
	$_POST[KEY_USER],
	$create_time);
	if ($p_statement->execute())
		echo 'Successfully added event';
	else
		echo 'Event entry failed';

	$connection->close();
