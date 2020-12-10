<?php
	require_once 'modules/connection.php';
	require_once 'modules/output.php';
	require_once 'api/KopiStarter_API/Connection.php';
	require_once 'api/KopiStarter_API/User.php';
	require_once 'api/KopiStarter_API/UserParam.php';

	use KopiStarter_API\User;
	use KopiStarter_API\UserParam;
	use KopiStarter_API\Connection;

	$resp_error_user_exists = new Response('err_user_exists', 'Username already exists');
	$resp_error_register_failed = new Response('err_register_failed', 'User registration failed');
	$resp_err_invalid_request_method = new Response('err_invalid_request_method', 'Invalid HTTP request method');

	if ($_SERVER['REQUEST_METHOD'] == 'post' || $_SERVER['REQUEST_METHOD'] == 'POST')
	{
		Connection::set_mysql_connection($connection);

		$user = new User($_POST['user_id']);
		if ($user->check_user_exists())
			returnResponse(OUT_ERROR, $resp_error_user_exists);
		else
		{
			$param = new UserParam($_POST['email'], $_POST['password'], $_POST['name'], 1);

			if ($user->registerUser($param))
				returnResponse(OUT_OK, new Response(OUT_OK, ['user_id' => $user->getUsername()]));
			else
				returnResponse(OUT_ERROR, $resp_error_register_failed);
		}
	}
	else
		returnResponse(OUT_ERROR, $resp_err_invalid_request_method);
