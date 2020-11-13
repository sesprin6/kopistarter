<?php
	require_once 'cfg_settings.php';

	$p_statement = $connection->prepare(QUERY_DELETE);
	$p_statement->bind_param('i', $_POST[KEY_ID]);

	if ($p_statement->execute())
		echo 'Role deletion completed successfully';
	else
		echo 'Role deletion failed';

	$connection->close();
