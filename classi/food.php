<?php

 include_once __DIR__ . '/product.php';

class Food extends Product{
    public $weight;
    public $ingredients;

    public function __construct(
        String $name,
        Float $price,
        Bool $is_avaible,
        String $image,
        Category $category,

        String $weight,
        String $ingredients
    )
    {
        parent::__construct( $name, $price, $is_avaible, $image, $category );
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }

}

?>