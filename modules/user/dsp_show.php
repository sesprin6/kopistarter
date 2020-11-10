<?php
	require_once 'cfg_settings.php';

	$data = $connection->query(QUERY_GETALL)->fetch_all(MYSQLI_ASSOC);

	$result = array();
	foreach ($data as $row)
		array_push($result, array
		(
			ID => $row[TBL_ID],
			NAME => $row[TBL_NAME],
			PASS => $row[TBL_PASSWORD],
			ROLE => $row[TBL_ROLE]
		));

	SetJsonHeader();
	echo json_encode(array('result' => $result));

	$connection->close();
