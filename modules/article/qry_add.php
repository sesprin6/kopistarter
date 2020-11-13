<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$create_time = date('Y-m-d');

	$p_statement = $connection->prepare(QUERY_ADD);
	$p_statement->bind_param('ssiss',
		$_POST[KEY_USER],
	$_POST[KEY_TITLE],
	$_POST[KEY_CATEGORY],
	$_POST[KEY_DESCRIPTION],
	$create_time);
	if ($p_statement->execute())
		echo 'Successfully added article';
	else
		echo 'Article entry failed';

	$connection->close();
