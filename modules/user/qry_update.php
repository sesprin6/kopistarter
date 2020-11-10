<?php
	require_once 'cfg_settings.php';

	$p_statement = $connection->prepare(QUERY_UPDATE);
	$p_statement->bind_param('sdi', $_POST[NAME], $_POST[PASS],$_POST[ROLE], $_POST[ID]);
	if ($p_statement->execute())
		echo 'Berhasil update data user';
	else
		echo 'Gagal update data user';

	$connection->close();
