<?php
//headers
header('Access-Conrol-Allow-Origin:  *');
 header('Content -Type: application/json');
//initializing our api
 include_once('../core/initialize.php');

//intantiate post

$post = new Post($db);

$post->id =isset($GET['id']) ? $_GET['id']  : die();
$post->read_single();

$post_arr = array()
    'id' => $post->id;
    'title' => $post->title;
    'body' => $post->body;
    'author' => $post->author;
    'category_id' => $post->category_id;
    'category_name' => $post->category_name;
);

print_r(json_encode($post_arr));

