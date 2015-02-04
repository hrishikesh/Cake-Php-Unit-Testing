<?php
App::uses('Post', 'Model');

/**
 * Post Test Case
 *
 */
class PostTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Post = ClassRegistry::init('Post');
	}

    public function testGetAllPosts() {
        $result = $this->Post->getAllPosts(array('id', 'title'));
        $expected = array(
            array('Post' => array('id' => 1, 'title' => 'First Post')),
            array('Post' => array('id' => 2, 'title' => 'Second Post')),
            array('Post' => array('id' => 4, 'title' => 'Third Post'))
        );
        $this->assertEquals($expected, $result);
    }

    public function testGetSinglePost(){
        $result = $this->Post->getSinglePost(1);
        $expected = array('Post' => array('id' => 2, 'title' => 'First Post'));
        $this->assertEquals($expected, $result);
    }

    public function testGetTitle(){
        $result = $this->Post->getTitle(2);
        $expected = 'First Post';
        $this->assertEquals($expected, $result);
    }

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Post);

		parent::tearDown();
	}

}
