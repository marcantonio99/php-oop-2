<?php


class Category{
    public $name;
    public $icon;

    public function __construct($icon,$name){
        $this->icon=$icon;
        $this->name=$name;
    }
}

?>