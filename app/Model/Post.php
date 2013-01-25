<?php
class Post extends AppModel{
    public $validate = array(
        'title' => array(
            'rule'    => array('between', 5, 15),
            'message' => 'Between 5 to 15 characters'
        ),
        'body' => array(
            'rule' => 'notEmpty',
            'message' => 'this field cannot be empty'
        )
    );
}
?>
