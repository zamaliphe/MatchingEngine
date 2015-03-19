<?php

/**
 * GroupFixture
 *
 */
class GroupFixture extends CakeTestFixture
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
        'parent_id' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '0',
            'unsigned' => false
        ),
        'name' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'length' => 45,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'alias' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'description' => array(
            'type' => 'text',
            'null' => true,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'image_id' => array(
            'type' => 'biginteger',
            'null' => true,
            'default' => null,
            'unsigned' => false,
            'key' => 'index'
        ),
        'privacy_level' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '0',
            'unsigned' => false
        ),
        'root_acc' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '0',
            'unsigned' => false
        ),
        'hidden_groups' => array(
            'type' => 'string',
            'null' => true,
            'default' => null,
            'collate' => 'latin1_swedish_ci',
            'charset' => 'latin1'
        ),
        'status' => array(
            'type' => 'integer',
            'null' => true,
            'default' => null,
            'length' => 4,
            'unsigned' => false
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
        'site_id' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '1',
            'unsigned' => false
        ),
        'is_deleted' => array(
            'type' => 'integer',
            'null' => true,
            'default' => '0',
            'length' => 4,
            'unsigned' => false
        ),
        'indexes' => array(
            'PRIMARY' => array(
                'column' => 'id',
                'unique' => 1
            ),
            'group_image_id' => array(
                'column' => 'image_id',
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
            'parent_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'alias' => 'Lorem ipsum dolor sit amet',
            'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
            'image_id' => '',
            'privacy_level' => 1,
            'root_acc' => 1,
            'hidden_groups' => 'Lorem ipsum dolor sit amet',
            'status' => 1,
            'created' => 1,
            'modified' => 1,
            'site_id' => 1,
            'is_deleted' => 1
        )
    );
}
