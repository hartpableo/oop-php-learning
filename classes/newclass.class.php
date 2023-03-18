<?php
/*
*   'public' -> can be accessed anywhere
*   'private' -> can only be accessed within its Class
*   'protected' -> can only be accessed within its Class BUT is extendable
*/

class NewClass {
    protected $name = 'hart';
}

class AnotherClass extends NewClass {
    public function info() {
        $test = $this->name;
        return $test;
    }
}