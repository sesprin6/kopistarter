<?php
	require_once 'cfg_settings.php';

	$p_statement = $connection->prepare(QUERY_DELETE);
	$p_statement->bind_param('i', $_POST[KEY_ID]);

	if ($p_statement->execute())
		echo 'Event deletion completed successfully';
	else
		echo 'Event deletion failed';

	$connection->close();
