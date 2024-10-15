<?php

class Person
{
    private $first;
    private $last;

    public function __contruct($firstArg, $lastArg){
        $this->$first = $firstArg;
        $this->$last = $lastArg;
    }


    public function setFirst($firstArg){
        $this->first = $firstArg;
    }

    public function getFirst(){
        return $this->first;
    }

    public function setLast($lastArg){
        $this->flast = $lastArg;
    }

    public function getLast(){
        return $this->last;
    }
}





