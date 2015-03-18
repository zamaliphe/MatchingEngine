<?php
/**
* CountryFixture
*
*/
class CountryFixture extends CakeTestFixture {

	/**
	* Fields
	*
	* @var array
	*/
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sequence' => array('type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'iso_code_2' => array('type' => 'string', 'null' => false, 'length' => 2, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'iso_code_3' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'address_format' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'postcode_required' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 1, 'unsigned' => false),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1, 'unsigned' => false),
		'tax' => array('type' => 'float', 'null' => false, 'default' => '0.00000', 'length' => '10,5', 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

	/**
	* Records
	*
	* @var array
	*/
	public $records = array(
		array(
			'id' => 1,
			'sequence' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'iso_code_2' => '',
			'iso_code_3' => 'L',
			'address_format' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'postcode_required' => 1,
			'status' => 1,
			'tax' => 1
		),
	);

}
