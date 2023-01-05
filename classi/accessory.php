<?php

 include_once __DIR__ . '/product.php';

 class Accessory extends Product{
    public $material;
    public $size;

    public function __construct(
        String $name,
        Float $price,
        Bool $is_avaible,
        String $image,
        Category $category,

        String $material,
        String $size
    )
    {
        parent::__construct( $name, $price, $is_avaible, $image, $category );
        $this->material = $material;
        $this->size = $size;
    }
 }

?>