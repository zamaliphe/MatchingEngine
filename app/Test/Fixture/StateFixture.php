<?php

/**
 * StateFixture
 *
 */
class StateFixture extends CakeTestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'length' => 4,
            'unsigned' => false,
            'key' => 'primary'
        ),
        'abv' => array(
            'type' => 'string',
            'null' => false,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'name' => array(
            'type' => 'string',
            'null' => false,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'indexes' => array(
            'PRIMARY' => array(
                'column' => 'id',
                'unique' => 1
            )
        ),
        'tableParameters' => array(
            'charset' => 'latin1',
            'collate' => 'latin1_swedish_ci',
            'engine' => 'MyISAM',
            'comment' => 'States'
        )
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id' => 1,
            'abv' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet'
        )
    );
}
