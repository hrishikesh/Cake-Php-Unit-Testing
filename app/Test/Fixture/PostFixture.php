<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

    public $import = 'Post';
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'body' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
        'user_id' => array('type' => 'integer', 'default' => null, 'length' => 10, 'unsigned' => true),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'First Post',
			'body' => 'First Post Body',
            'user_id'=> '1'
		),
        array(
            'id' => 2,
            'title' => 'Second Post',
            'body' => 'Second Post Body',
            'user_id'=> '1'
        ),
        array(
            'id' => 3,
            'title' => 'Third Post',
            'body' => 'Third Post Body',
            'user_id'=> '1'
        )
	);

}
