<?php

class Client {
 
    function areaVerifier(Rectangle $r) {
        $r->setWidth(5);
        $r->setHeight(4);
 
        if($r->area() != 20)
            return false;
        return true;
    }
 
}