<?php
	require_once 'cfg_settings.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/api/KopiStarter_API/Security/_autoload.php';
	require_once $_SERVER['DOCUMENT_ROOT'] . '/modules/connection.php';

	use KopiStarter_API\Security\Crypto_PBKDF2;

	$enc = Crypto_PBKDF2::generateHash($_POST[UPASSWORD]);
	$p_statement = $connection->prepare(QUERY_ADD);
	$p_statement->bind_param('ssssis', $_POST[ID], $enc['hash'], $enc['salt'], $_POST[NAME], $_POST[ROLE], $_POST[EMAIL]);
	if ($p_statement->execute())
		echo 'Berhasil menambahkan user';
	else
		echo 'Gagal menambahkan user';

	$connection->close();
