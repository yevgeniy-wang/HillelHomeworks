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

if($tags = $post->tags) {
    foreach ($tags as $tag) {
        $post->tags()->detach($tag->id);
    }
    $post->delete();
} else $post->delete();
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
$post = \Hillel\Homework7\Model\Post::all();

$r1 = $post[0]->id;
$r2 = count($post);

foreach ($post as $key => $value) {

    // ROLL
    $rand_1 = rand($r1, $r2);
    $rand_2 = rand($r1, $r2);
    $rand_3 = rand($r1, $r2);

    // Validate random for non equals
    $some = false;
    while ($some) {
        if ($rand_1 == $rand_2 or $rand_1 == $rand_3) {
            $rand_1 = rand($r1, $r2);
        }
        if ($rand_2 == $rand_3) {
            $rand_2 = rand($r1, $r2);
        }
        if ($rand_1 != $rand_2 and $rand_1 != $rand_3 and $rand_2 != $rand_3) {
            $some = true;
        }
    }
    // do not exec if rand di not go properly
    $post = \Hillel\Homework7\Model\Post::find($key + 1);
    if (!empty($post['id'])) {
        $post->tags()->attach([$rand_1, $rand_2, $rand_3]);
    }
}
*/