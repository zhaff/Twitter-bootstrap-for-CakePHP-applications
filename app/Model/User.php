<?php

/**
 * 
 */
class User extends AppModel {

        public $name = 'User';
        public $validate = array(
            'name' => array(
                'notempty' => array(
                    'rule' => array('notempty'),
                    'message' => 'Name is requied',
                ),
                'minLength' => array(
                    'rule' => array('minLength', 3),
                    'message' => 'Name must be at least 3 characters long',
                )
            ),
            'username' => array(
                'notempty' => array(
                    'rule' => array('notempty'),
                    'message' => 'Username is requied',
                ),
                'minLength' => array(
                    'rule' => array('minLength', 3),
                    'message' => 'Username must be at least 3 characters long',
                ),
//                'unique' => array(
//                    'rule' => 'isUnique',
//                    'message' => 'This username has already been taken.'
//                ),
            ),
            'password' => array(
                'notempty' => array(
                    'rule' => array('notempty'),
                    'message' => 'Password is requied',
                )
            )
        );

        public function beforeSave($options = array()) {
                $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
                return true;
        }

}

?>