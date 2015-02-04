<?php
App::uses('PostsController', 'Controller');

/**
 * PostsController Test Case
 *
 */
class PostsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.post'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
        $this->testAction('/posts/index');
        $this->assertArrayHasKey('posts', $this->vars);
        $this->assertInternalType('array', $this->vars['posts']);
        //$this->assertAttributeCount(6,'0', 'Post');


		//$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
        $this->testAction('/posts/view/1',array('method' => 'get'));
        $this->assertArrayHasKey('post', $this->vars);
        //$this->assertAttributeCount(6,'title', 'Post');
		//$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
        $Posts = $this->generate('Posts', array(
            'components' => array(
                'Session',
                //'Email' => array('send')
            )
        ));
        $Posts->Session
            ->expects($this->exactly(2))
            ->method('setFlash');


        $this->testAction('/posts/add', array(
            'data' => array(
                'Post' => array('title' => 'New Post')
            ),
            'method' => 'POST',
        ));
        //pr($this->headers['Location']);
        $this->assertContains('/', $this->headers['Location']);
		//$this->markTestIncomplete('testAdd not implemented.');
	}

    /*public function testAddGet() {
        $this->testAction('/posts/add', array(
            'method' => 'GET',
            'return' => 'view'
        ));

        $this->assertRegExp('/<html/', $this->contents);
        $this->assertRegExp('/<form/', $this->view);
    }*/

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
        $Posts = $this->generate('Posts', array(
            'components' => array(
                'Session',
                //'Email' => array('send')
            )
        ));
        $Posts->Session
            ->expects($this->exactly(2))
            ->method('setFlash');


        $this->testAction('/posts/edit/1', array(
            'data' => array(
                'Post' => array('title' => 'New Post 1')
            )
        ));
        $this->assertContains('/posts/add1', $this->headers['Location']);
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
        $Posts = $this->generate('Posts', array(
            'components' => array(
                'Session',
                //'Email' => array('send')
            )
        ));

        $Posts->Session
            ->expects($this->exactly(2))
            ->method('setFlash');


        $this->testAction('/posts/delete/1', array(
            'method'=>'POST'
        ));

        $this->assertContains('/', $this->headers['Location']);
		//$this->markTestIncomplete('testDelete not implemented.');
	}

/**
 * testAdminIndex method
 *
 * @return void
 */
	/*public function testAdminIndex() {
		$this->markTestIncomplete('testAdminIndex not implemented.');
	}*/

/**
 * testAdminView method
 *
 * @return void
 */
	/*public function testAdminView() {
		$this->markTestIncomplete('testAdminView not implemented.');
	}*/

/**
 * testAdminAdd method
 *
 * @return void
 */
	/*public function testAdminAdd() {
		$this->markTestIncomplete('testAdminAdd not implemented.');
	}*/

/**
 * testAdminEdit method
 *
 * @return void
 */
	/*public function testAdminEdit() {
		$this->markTestIncomplete('testAdminEdit not implemented.');
	}*/

/**
 * testAdminDelete method
 *
 * @return void
 */
	/*public function testAdminDelete() {
		$this->markTestIncomplete('testAdminDelete not implemented.');
	}*/

}
