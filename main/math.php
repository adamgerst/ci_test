<?php

class Math {

    public function add($a, $b) {
        if(!is_numeric($a)) {
            throw new InvalidArgumentException("The Add Function expects numbers: bad input $a");
        }
        if(!is_numeric($b)) {
            throw new InvalidArgumentException("The Add Function expects numbers: bad input $b");
        }
        return $a + $b;
    }

}
