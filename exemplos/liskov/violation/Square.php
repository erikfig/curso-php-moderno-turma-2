<?php

class Square extends Rectangle {
 
    public function setHeight($value) {
        $this->width = $value;
        $this->height = $value;
    }
 
    public function setWidth($value) {
        $this->width = $value;
        $this->height = $value;
    }
}