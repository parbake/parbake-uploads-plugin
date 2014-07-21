<?php
/**
 * UploadFixture
 *
 */
class UploadFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'file_path' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'file_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created_user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified_user_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'user_id' => array('column' => 'user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '53cd117f-fa54-42aa-a3ab-109f7f000013',
			'user_id' => '53c43357-db64-497a-a73f-200a7f000013',
			'description' => 'fff',
			'file_path' => '/var/www/chicagotechworks.com/app/webroot/img/cars-by-make_defcon_2.jpg',
			'file_name' => 'cars-by-make_defcon_2.jpg',
			'created' => '2014-07-21 08:11:27',
			'created_user_id' => '53c43357-db64-497a-a73f-200a7f000013',
			'modified' => '2014-07-21 08:11:27',
			'modified_user_id' => ''
		),
		array(
			'id' => '53cd1208-b970-4285-a582-11b37f000013',
			'user_id' => '53c43357-db64-497a-a73f-200a7f000013',
			'description' => 'jjjj',
			'file_path' => '/var/www/chicagotechworks.com/app/webroot/img/cars-by-make_defcon_3.jpg',
			'file_name' => 'cars-by-make_defcon_3.jpg',
			'created' => '2014-07-21 08:13:44',
			'created_user_id' => '53c43357-db64-497a-a73f-200a7f000013',
			'modified' => '2014-07-21 08:13:44',
			'modified_user_id' => ''
		),
		array(
			'id' => '53cd1215-4344-483e-b30e-10a17f000013',
			'user_id' => '53c43357-db64-497a-a73f-200a7f000013',
			'description' => 'vvv',
			'file_path' => '/var/www/chicagotechworks.com/app/webroot/img/images22.png',
			'file_name' => 'images22.png',
			'created' => '2014-07-21 08:13:57',
			'created_user_id' => '53c43357-db64-497a-a73f-200a7f000013',
			'modified' => '2014-07-21 08:13:57',
			'modified_user_id' => ''
		),
	);

}
