<?php
	require_once 'cfg_settings.php';

	if ($_POST[OPTION_POST] === OPTION_SHOW)
	{
		$p_statement = $connection->prepare(QUERY_GET);
		$p_statement->bind_param('s', $_POST[KEY_OWNER]);
		$p_statement->execute();

		$data = $p_statement->get_result()->fetch_all(MYSQLI_ASSOC);
		$result = [];
		foreach ($data as $row)
			array_push($result, [KEY_INFO => $row[TBL_INFO]]);

		SetJsonHeader();
		echo json_encode(['result' => $result]);
	}
	else if ($_POST[OPTION_POST] === OPTION_SHOW_ALL)
	{
		$data = $connection->query(QUERY_GETALL)->fetch_all(MYSQLI_ASSOC);

		$result = [];
		foreach ($data as $row)
			array_push($result,
			[
				KEY_OWNER => $row[TBL_OWNER],
				KEY_INFO => $row[TBL_INFO]
			]);

		SetJsonHeader();
		echo json_encode(['result' => $result]);
	}

	$connection->close();
