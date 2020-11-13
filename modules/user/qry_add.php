<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/api/KopiStarter_API/Security/_autoload.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	use KopiStarter_API\Security\Crypto_PBKDF2;

	$enc = Crypto_PBKDF2::generateHash($_POST[KEY_PASSWORD]);
	$p_statement = $connection->prepare(QUERY_ADD);
	$p_statement->bind_param('ssssiss', $_POST[KEY_ID], $enc['hash'], $enc['salt'], $_POST[KEY_NAME], $_POST[KEY_ROLE], $_POST[KEY_EMAIL], $_POST[KEY_MESSAGE]);
	if ($p_statement->execute())
		echo 'Berhasil menambahkan user';
	else
		echo 'Gagal menambahkan user';

	$connection->close();
