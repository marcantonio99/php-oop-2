<?php

include_once __DIR__ . '/category.php';

class Product {
    public $name;
    public $price;
    public $is_avaible;
    public $image;
    public $category;

    public function __construct(
        String $name,
        Float $price,
        Bool $is_avaible,
        String $image,
        Category $category
        )
    {
        $this->name = $name;
        $this->price = $price;
        $this->is_avaible = $is_avaible;
        $this->image = $image;
        $this->category = $category;
    }


}

?>