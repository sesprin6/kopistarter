<?php
	require_once 'cfg_settings.php';

	$p_statement = $connection->prepare(QUERY_DELETE);
	$p_statement->bind_param('ss', $_POST[KEY_OWNER], $_POST[KEY_INFO]);

	if ($p_statement->execute())
		echo 'Contact deletion completed successfully';
	else
		echo 'Contact deletion failed';

	$connection->close();
