<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO event VALUES (default , ?, ?, ?, ?)';
	const QUERY_DELETE		= 'DELETE FROM event WHERE event_id = ?';
	const QUERY_GET			= 'SELECT * FROM event WHERE event_id = ?';
	const QUERY_GETALL		= 'SELECT * FROM event';
	const QUERY_UPDATE		= 'update event set title = ?, description = ?, user = ?, create_time = ? where event_id = ?';

	//General Keys
	const KEY_ID			= 'id';
	const KEY_TITLE		    = 'title';
	const KEY_DESCRIPTION	= 'description';
	const KEY_USER			= 'user';
	const KEY_CREATE_TIME	= 'create_time';

	//Database Keys
	const TBL_ID			= 'event_id';
	const TBL_TITLE		    = 'title';
	const TBL_DESCRIPTION	= 'description';
	const TBL_USER			= 'user';
	const TBL_CREATE_TIME	= 'create_time';

	//Parameters
	const OPTION_SHOW = 'show';
	const OPTION_SHOW_ALL = 'show_all';
