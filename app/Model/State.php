<?php
App::uses('AppModel', 'Model');

/**
 * State Model
 *
 * @property User $User
 *
 */
class State extends AppModel
{

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';
    
    // The Associations below have been created with all possible keys, those that are not needed can be removed
    
    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'state_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
}
