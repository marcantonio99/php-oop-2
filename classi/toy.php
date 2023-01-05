<?php

 include_once __DIR__ . '/product.php';

class Toy extends Product{
    public $features;
    public $size;

    public function __construct(
        String $name,
        Float $price,
        Bool $is_avaible,
        String $image,
        Category $category,

        String $features,
        String $size
    )
    {
        parent::__construct( $name, $price, $is_avaible, $image, $category );
        $this->features = $features;
        $this->size = $size;
    }

}

?>