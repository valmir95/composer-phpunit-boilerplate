<?php

namespace Adder;

class Adder{

    /** SOLVED! */
    public function add($x, $y){
        return $x + $y;
    }

    /** SOLVED! */
    public function mockTest(){
        return 150;
    }




    public function task2($newId, $orm){
        $userIds = $orm->getAllUserIds();
        $userIds[] = $newId;

        return $userIds;
    }

    public function task1($arg){
        if($arg){
            return true;
        }
        throw new \Exception("The arg value is null/false!");
    }
}
