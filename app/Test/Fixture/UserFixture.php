<?php

/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    public $fields = array(
        'id' => array(
            'type' => 'biginteger',
            'null' => false,
            'default' => null,
            'unsigned' => false,
            'key' => 'primary'
        ),
        'email' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 45,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'username' => array(
            'type' => 'string',
            'null' => false,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'password' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 45,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'is_admin' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '0',
            'unsigned' => false
        ),
        'group_id' => array(
            'type' => 'integer',
            'null' => false,
            'default' => null,
            'unsigned' => false
        ),
        'profile_imageid' => array(
            'type' => 'biginteger',
            'null' => true,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'first_name' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 45,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'last_name' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 45,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'city' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 45,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'state_id' => array(
            'type' => 'biginteger',
            'null' => true,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'country_id' => array(
            'type' => 'biginteger',
            'null' => true,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'zip' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'unsigned' => false
        ),
        'last_login_date_time' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'unsigned' => false
        ),
        'last_login_ip' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 20,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'created' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'unsigned' => false
        ),
        'modified' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'unsigned' => false
        ),
        'status' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '1',
            'length' => 4,
            'unsigned' => false
        ),
        'indexes' => array(
            'PRIMARY' => array(
                'column' => 'id',
                'unique' => 1
            ),
            'profile_image_id' => array(
                'column' => 'profile_imageid',
                'unique' => 0
            ),
            'state_id' => array(
                'column' => 'state_id',
                'unique' => 0
            ),
            'country_id' => array(
                'column' => 'country_id',
                'unique' => 0
            )
        ),
        'tableParameters' => array(
            'charset' => 'latin1',
            'collate' => 'latin1_swedish_ci',
            'engine' => 'MyISAM'
        )
    );

    /**
     * Records
     *
     * @var array
     */
    public $records = array(
        array(
            'id' => '',
            'email' => 'Lorem ipsum dolor sit amet',
            'username' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'is_admin' => 1,
            'group_id' => 1,
            'profile_imageid' => '',
            'first_name' => 'Lorem ipsum dolor sit amet',
            'last_name' => 'Lorem ipsum dolor sit amet',
            'city' => 'Lorem ipsum dolor sit amet',
            'state_id' => '',
            'country_id' => '',
            'zip' => 1,
            'last_login_date_time' => 1,
            'last_login_ip' => 'Lorem ipsum dolor ',
            'created' => 1,
            'modified' => 1,
            'status' => 1
        )
    );
}
