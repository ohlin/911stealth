<?php
/* Alert Test cases generated on: 2011-05-09 21:47:04 : 1305002824*/
App::import('Model', 'Alert');

/**
 * Alert Test Case
 *
 */
class AlertTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.alert');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Alert = ClassRegistry::init('Alert');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alert);
		ClassRegistry::flush();

		parent::tearDown();
	}

}
