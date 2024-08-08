<?php 

class Post 

{
    public $title;

    public $published;

    public $author;

    /**
     * Class constructor.
     */

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this -> published = $published;
    }
}

$posts = [
    new Post('My First Post','samuel', true),
    new Post('My Second Post', 'TYHA', true),
    new Post('My Third Post', 'BOOL', true),
    new Post('My Fourth Post', 'GOAT', false),
];

// array filtering
$unpublishedPost = array_filter($posts, function ($post) {
    return ! $post->published;
});


$publishedPost = array_filter($posts, function ($post) {
    return  $post->published;
});


// loops 

foreach ($posts as $post){
    $post -> published = true;
}


// var_dump($posts);
// var_dump($unpublishedPost);
// var_dump($publishedPost);


// Array mapping and when to use is when we want to return a control value or modify a value that is been return
$modified = array_map(function ($post) {

    // return 'foobar'
    return  (array) $post;
    // return only what u need

    // return ['title' => $post->title];

}, $posts);

// array_column
$title = array_column($modified, 'author', 'title');

var_dump($title);

// require './index.view.php';