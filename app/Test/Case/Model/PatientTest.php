<?php
App::uses('Patient', 'Model');

/**
 * Patient Test Case
 */
class PatientTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.patient'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Patient = ClassRegistry::init('Patient');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Patient);

		parent::tearDown();
	}

}
