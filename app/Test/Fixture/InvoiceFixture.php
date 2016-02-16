<?php
/**
 * Invoice Fixture
 */
class InvoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'pid' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false),
		'advance' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false),
		'totalamount' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false),
		'balance' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 7, 'unsigned' => false),
		'discount' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 5, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => null),
		'indexes' => array(
			
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
			'id' => 1,
			'pid' => '',
			'amount' => 1,
			'advance' => 1,
			'totalamount' => 1,
			'balance' => 1,
			'discount' => 1,
			'created' => '2016-02-16 13:53:46',
			'modified' => 1455627226
		),
	);

}
