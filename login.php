<?php
	require_once 'modules/connection.php';
	require_once 'modules/output.php';
	require_once 'api/KopiStarter_API/Connection.php';
	require_once 'api/KopiStarter_API/User.php';

	use KopiStarter_API\User;
	use KopiStarter_API\Connection;

	$resp_err_invalid = new Response('err_invalid', 'Invalid user id or password');
	$resp_err_invalid_request_method = new Response('err_invalid_request_method', 'Invalid HTTP request method');

	if ($_SERVER['REQUEST_METHOD'] == 'post' || $_SERVER['REQUEST_METHOD'] == 'POST')
	{
		Connection::set_mysql_connection($connection);

		$user = new User($_POST['user_id']);

		if ($user->get_login_status($_POST['password']))
			returnResponse(OUT_OK, new Response('ok', ['user_id' => $user->getUsername()]));
		else
			returnResponse(OUT_ERROR, $resp_err_invalid);
	}
	else
		returnResponse(OUT_ERROR, $resp_err_invalid_request_method);
