<?php
/* Alert Fixture generated on: 2011-05-09 21:47:04 : 1305002824 */

/**
 * AlertFixture
 *
 */
class AlertFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'lat' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,6', 'collate' => NULL, 'comment' => ''),
		'lon' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,6', 'collate' => NULL, 'comment' => ''),
		'radius' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'can_call' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'battery_status' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => NULL, 'comment' => ''),
		'message' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'comment' => '', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'lat' => 1,
			'lon' => 1,
			'radius' => 1,
			'can_call' => 1,
			'battery_status' => 1,
			'message' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2011-05-09 21:47:04',
			'modified' => '2011-05-09 21:47:04'
		),
	);
}
