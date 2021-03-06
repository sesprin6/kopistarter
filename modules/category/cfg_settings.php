<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO category VALUES (default , ?)';
	const QUERY_DELETE		= 'DELETE FROM category WHERE category_id = ?';
	const QUERY_GET			= 'SELECT * FROM category WHERE category_id = ?';
	const QUERY_GETALL		= 'SELECT * FROM category';
	const QUERY_UPDATE		= 'update category set name = ? where category_id = ?';

	//General Keys
	const KEY_ID			= 'id';
	const KEY_NAME		    = 'name';

	//Database Keys
	const TBL_ID			= 'category_id';
	const TBL_NAME		    = 'name';

	//Parameters
	const OPTION_POST = 'post_option';
	const OPTION_SHOW = 'show';
	const OPTION_SHOW_ALL = 'show_all';
