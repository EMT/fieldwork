<?php

namespace app\models;


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



?>