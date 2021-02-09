<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

//task1

/*
for ($i = 1; $i < 6; $i++) {
    $category = new \Hillel\Homework7\Model\Category();
    $category->title = 'category ' . $i;
    $category->slug = 'slug ' . $i;
    $category->save();
}
*/

//task 2

/*
$category = \Hillel\Homework7\Model\Category::find(1);
$category->title = 'Updated category';
$category->save();
*/

//task 3

/*
$category = \Hillel\Homework7\Model\Category::find(5);
$category->delete();
*/

//task 4

/*
$collection = \Hillel\Homework7\Model\Category::all();

for ($i = 1; $i < 11; $i++) {
    $post = new \Hillel\Homework7\Model\Post();
    $post->title = 'post ' . $i;
    $post->slug = 'slug ' . $i;
    $post->body = 'body ' . $i;
    $post->category_id = $collection[rand(0, 2)]['id'];
    $post->save();
}
*/

//task 5

/*
$collection = \Hillel\Homework7\Model\Category::all();
$post = \Hillel\Homework7\Model\Post::find(1);
$post->title = 'Updated post';
$post->slug = 'Updated slug';
$post->body = 'Updated body';
$post->category_id = $collection[0]['id'];
$post->save();
*/

//task 6

/*
$post = \Hillel\Homework7\Model\Post::find(10);
$post->delete();
*/

//task 7

/*
for ($i = 1; $i < 11; $i++) {
    $tag = new \Hillel\Homework7\Model\Tag();
    $tag->title = 'titile ' . $i;
    $tag->slug = 'slug ' . $i;
    $tag->save();
}
*/

//task 8

/*
$collection = \Hillel\Homework7\Model\Tag::all();
$rand1 = $collection[0]->id;
$rand2 = count($collection);
$post = \Hillel\Homework7\Model\Post::all();
foreach ($post as $key => $value) {
    $post = \Hillel\Homework7\Model\Post::find($key + 1);
    $post->tags()->attach([rand($rand1, $rand2), rand($rand1, $rand2), rand($rand1, $rand2)]);
}
*/


