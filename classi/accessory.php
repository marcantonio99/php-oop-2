<?php

 include_once __DIR__ . '/product.php';

 class Accessory extends Product{
    public $img;
    public $nome;
    public $category;
    public $prezzo;
    public $material;
    public $dimentions;

    public function __construct(
        string $img,
        string $nome,
        category $category,
        string $prezzo,
        string $material,
        string $dimentions
    ){
        $this->material = $material;
        $this->dimentions = $dimentions;
        parent::__construct($img,$nome,$category,$prezzo);
    }
 }

?>