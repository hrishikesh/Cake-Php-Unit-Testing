<?php
App::uses('AppModel', 'Model');
/**
 * Post Model
 *
 */
class Post extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';


    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'user_id' => $user)) !== false;
    }

    public function getAllPosts(){
        return $this->find('all', array('fields'=>array('id', 'title')));
    }

    /**
     * @param null $id
     * @return array
     */
    public function getSinglePost($id = null) {
        $params = array(
            'conditions' => array(
                $this->name . '.id' => $id
            ),
            'fields'=>array('id', 'title')
        );
        return $this->find('first', $params);
    }

    /**
     * @param $id
     * @return string
     */
    public function getTitle($id){
        return $this->field('title', array(
            $this->name . '.id' => $id
        ));
    }

}
