<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO article VALUES (default , ?, ?, ?, ?, ?)';
	const QUERY_DELETE		= 'DELETE FROM article WHERE article_id = ?';
	const QUERY_GET			= 'SELECT * FROM article WHERE article_id = ?';
	const QUERY_GETALL		= 'SELECT * FROM article';
	const QUERY_UPDATE		= 'update article set name = ?, title = ?, category = ?, description = ?, create_time = ? where article_id = ?';

	//General Keys
	const KEY_ID			= 'id';
	const KEY_USER			= 'user';
	const KEY_TITLE			= 'title';
	const KEY_CATEGORY	    = 'category';
	const KEY_DESCRIPTION	= 'description';
	const KEY_CREATE_TIME	= 'create_time';

	//Database Keys
	const TBL_ID			= 'article_id';
	const TBL_USER			= 'user';
	const TBL_TITLE			= 'title';
	const TBL_CATEGORY	    = 'category';
	const TBL_DESCRIPTION	= 'description';
	const TBL_CREATE_TIME	= 'create_time';

	//Parameters
	const OPTION_SHOW = 'show';
	const OPTION_SHOW_ALL = 'show_all';
