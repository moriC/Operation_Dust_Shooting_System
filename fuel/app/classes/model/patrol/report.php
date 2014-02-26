<?php

class Model_Patrol_Report extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'header_id',
		'report_text',
		'finish',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'patrol_reports';

	protected static $_has_many = array(
		'headers' => array(
			'model_to' => 'Model_Patrol_Header',
			'key_from' => 'header_id',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);

}
