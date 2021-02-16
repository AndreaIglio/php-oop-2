<?php

include __DIR__ .'/classes/user.php';

var_dump($userID);

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

$posts = [

    $post1 = new Post(1, 1, 'Voliamo su Marte', 'lorem10', 'fantasy'),
    $post1_2 = new Post(2, 1, 'Giriamo su Marte', 'lorem5', 'action'),

];










?>