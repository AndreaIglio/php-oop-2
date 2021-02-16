<?php

include __DIR__ .'/classes/user.php';

class Post {
    
    //primary key
    public $postID;
    //foreign key
    public $userID;

    public $title;
    public $content;
    public $category;



    public function __construct(int $postID,int $userID, string $title, string $content, string $category) {

        $this->postID = $postID;
        $this->userID = $userID;
        $this->title = $title;
        $this->content = $content;
        $this->category = $category;



    }

}











?>