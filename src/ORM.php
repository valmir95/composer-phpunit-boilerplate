<?php

namespace Adder;

//Lets just pretend this is a universal ORM for a bunch of classes
class ORM{

    /**
     * Should return an array of user_ids
     * ex: [1,2,3,4,5]
     * @throws \Exception
     */
    public function getAllUserIds(){
        throw new \Exception("No access to the database!");
    }

    /**
     * Should return an array of string values.
     * ex: ['Fizz', 'Buzz', 'Foo']
     * @throws \Exception
     */
    public function getAllNames(){
        throw new \Exception("No access to database!");
    }


}