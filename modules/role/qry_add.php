<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$p_statement = $connection->prepare(QUERY_ADD);
	$p_statement->bind_param('s', $_POST[KEY_NAME]);
	if ($p_statement->execute())
		echo 'Successfully added role';
	else
		echo 'Role entry failed';

	$connection->close();
