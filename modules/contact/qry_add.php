<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$create_time = date('Y-m-d');

	$p_statement = $connection->prepare(QUERY_ADD);
	$p_statement->bind_param('ss', $_POST[KEY_OWNER], $_POST[KEY_INFO]);
	if ($p_statement->execute())
		echo 'Successfully added contact';
	else
		echo 'Contact entry failed';

	$connection->close();
