<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	if ($_POST[OPTION_POST] === OPTION_UPDATE_CRED)
	{
		require_once $_SERVER['DOCUMENT_ROOT'] . '/api/KopiStarter_API/Security/_autoload.php';

		$password = KopiStarter_API\Security\Crypto_PBKDF2::generateHash($_POST[KEY_PASSWORD]);
		$p_statement = $connection->prepare(QUERY_UPDATE_PWD);
		$p_statement->bind_param('sss', $password['hash'], $password['salt'], $_POST[KEY_ID]);
		if ($p_statement->execute())
			echo 'Berhasil update data user';
		else
			echo 'Gagal update data user';
	}
	else if ($_POST[OPTION_POST] === OPTION_UPDATE_PROFILE)
	{
		$p_statement = $connection->prepare(QUERY_UPDATE);
		$p_statement->bind_param('sisss', $_POST[KEY_NAME], $_POST[KEY_ROLE], $_POST[KEY_EMAIL], $_POST[KEY_MESSAGE], $_POST[KEY_ID]);
		if ($p_statement->execute())
			echo 'Berhasil update data user';
		else
			echo 'Gagal update data user';
	}

	$connection->close();
