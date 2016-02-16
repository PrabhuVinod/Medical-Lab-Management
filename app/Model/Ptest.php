<?php
App::uses('AppModel', 'Model');
/**
 * Ptest Model
 *
 */
class Ptest extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tid' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
