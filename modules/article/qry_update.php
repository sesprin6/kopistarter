<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$p_statement = $connection->prepare(QUERY_UPDATE);
	$p_statement->bind_param('si',
		$_POST[KEY_USER],
		$_POST[KEY_TITLE],
	$_POST[KEY_CATEGORY],
	$_POST[KEY_DESCRIPTION],
	$_POST[KEY_CREATE_TIME],
	$_POST[KEY_ID]);
	if ($p_statement->execute())
		echo 'Successfully updated article';
	else
		echo 'Article update failed';

	$connection->close();
