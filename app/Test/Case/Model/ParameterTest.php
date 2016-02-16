<?php
App::uses('Parameter', 'Model');

/**
 * Parameter Test Case
 */
class ParameterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parameter'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Parameter = ClassRegistry::init('Parameter');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Parameter);

		parent::tearDown();
	}

}
