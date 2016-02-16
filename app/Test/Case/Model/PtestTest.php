<?php
App::uses('Ptest', 'Model');

/**
 * Ptest Test Case
 */
class PtestTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.ptest'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Ptest = ClassRegistry::init('Ptest');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Ptest);

		parent::tearDown();
	}

}
