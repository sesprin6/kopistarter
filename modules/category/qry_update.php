<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	$p_statement = $connection->prepare(QUERY_UPDATE);
	$p_statement->bind_param('si', $_POST[KEY_NAME], $_POST[KEY_ID]);
	if ($p_statement->execute())
		echo 'Successfully updated category';
	else
		echo 'Category update failed';

	$connection->close();
