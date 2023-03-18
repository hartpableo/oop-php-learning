<?php require 'inc/autoloader.inc.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>
<body>
    <?php
    /*
    *   Continue with course: https://www.youtube.com/watch?v=0MYqGSplVQs&list=PL0eyrZgxdwhypQiZnYXM7z7-OTkcMgGPh&index=10
    */
        $person1 = new Person\Person( 'hart', 21, 'black' );
        $person1->set_name('Lorenzo');
        echo $person1->name . '<br>' . $person1->age . '<br>' . $person1->eye_color;
        echo '<hr> initial drinking age:' . Person\Person::$drinking_age;
        Person\Person::set_drinking_age(21);
        echo '<br> new drinking age: ' . Person\Person::$drinking_age;
    ?>
</body>
</html>