<?php
App::uses('AppModel', 'Model');

/**
 * Group Model
 *
 * @property Group $ParentGroup
 * @property User $User
 *
 */
class Group extends AppModel
{

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';
    
    // The Associations below have been created with all possible keys, those that are not needed can be removed
    
    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'ParentGroup' => array(
            'className' => 'Group',
            'foreignKey' => 'parent_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'group_id',
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
