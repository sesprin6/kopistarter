<?php
	const OUT_OK = 'ok';
	const OUT_ERROR = 'err';

	final class Response
	{
		public string $type;
		public $data;

		public final function __construct(string $type, $data)
		{
			$this->type = $type;
			$this->data = $data;
		}
	}

	function setJsonHeader() : void
	{
		header('Content-Type: application/json');
	}

	function returnMessage(string $status, string $type, string $message) : void
	{
		$data = array('status' => $status, 'type' => $type, 'message' => $message);
		SetJsonHeader();
		echo json_encode($data);
	}

	function returnResponse(string $status, Response $response) : void
	{
		$data = array('status' => $status, 'type' => $response->type, 'message' => $response->data);
		setJsonHeader();
		echo json_encode($data);
	}
