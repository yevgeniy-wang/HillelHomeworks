<?php

require_once '../vendor/autoload.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Lesson_5</title>
</head>
<body>
<div class="m-3 bigBorder">
    <h1 class="m-3">I'm so tired of this task...</h1>
    <div class="form-group row m-2">
        <code class="m-3">
            <?php
            $user1 = new \Hillel\Homework5\User();

            $user1->setId(5);
            var_dump($user1::find(5));

            var_dump($user1->create());
            var_dump($user1->delete());
            var_dump($user1->save());


            $user2 = new \Hillel\Homework5\User();
            var_dump($user2->save());
            ?>
        </code>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>
</html>