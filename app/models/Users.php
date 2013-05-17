<?php

namespace app\models;

use lithium\util\Validator;


class Users extends \app\extensions\data\Model {

	public $validates = array(
        'fname' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please enter your first name.'
            )
        ),
        'lname' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please enter your last name.'
            )
        ),
        'email' => array(
            array(
                'notEmpty',
                'email',
                'required' => true,
                'message' => 'Please check this email address.'
            ),
            array(
				'uniqueEmail',
				'message' => 'This email address is already registered.',
				'on' => 'create'
			)
        ),
        'street' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please enter your address.'
            )
        ),
        'city' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please enter your city.'
            )
        ),
        'postcode' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please enter your postcode.'
            )
        )
    );

}



/**
 * Checks against the users table and validates if the 
 * email address does not already exist
 */
Validator::add('uniqueEmail', function($value, $format, $options){
   return !Users::first(array('conditions' => array('email' => $value)));
});



?>