<?php
	//MySQL Queries
	const QUERY_ADD			= 'INSERT INTO contact VALUES (?, ?)';
	const QUERY_DELETE		= 'DELETE FROM contact WHERE contact_owner = ? and contact_info';
	const QUERY_GET			= 'SELECT * FROM contact WHERE contact_owner = ?';
	const QUERY_GETALL		= 'SELECT * FROM contact';
	const QUERY_UPDATE		= 'update contact set contact_info = ?, where contact_owner = ?';

	//General Keys
	const KEY_OWNER			= 'owner';
	const KEY_INFO		    = 'info';

	//Database Keys
	const TBL_OWNER			= 'contact_owner';
	const TBL_INFO			= 'contact_info';

	//Parameters
	const OPTION_SHOW = 'show';
	const OPTION_SHOW_ALL = 'show_all';
