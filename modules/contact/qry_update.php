<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$p_statement = $connection->prepare(QUERY_UPDATE);
	$p_statement->bind_param('ss', $_POST[KEY_INFO], $_POST[KEY_OWNER]);
	if ($p_statement->execute())
		echo 'Successfully updated contact';
	else
		echo 'Contact update failed';

	$connection->close();
