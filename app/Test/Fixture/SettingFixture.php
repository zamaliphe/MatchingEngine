<?php

/**
 * SettingFixture
 *
 */
class SettingFixture extends CakeTestFixture
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
            'unsigned' => false,
            'key' => 'primary'
        ),
        'type' => array(
            'type' => 'string',
            'null' => true,
            'default' => 'text',
            'length' => 100,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'name' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'value' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'label' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'dsc' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 512,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'order' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'unsigned' => false
        ),
        'hidden' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '0',
            'length' => 4,
            'unsigned' => false
        ),
        'options' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 512,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'created' => array(
            'type' => 'timestamp',
            'null' => true,
            'default' => null
        ),
        'updated' => array(
            'type' => 'timestamp',
            'null' => true,
            'default' => null
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
            'engine' => 'InnoDB'
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
            'type' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'value' => 'Lorem ipsum dolor sit amet',
            'label' => 'Lorem ipsum dolor sit amet',
            'dsc' => 'Lorem ipsum dolor sit amet',
            'order' => 1,
            'hidden' => 1,
            'options' => 'Lorem ipsum dolor sit amet',
            'created' => 1423755637,
            'updated' => 1423755637
        )
    );
}
