<?php

 include_once __DIR__ . '/product.php';

class Toy extends Product{
    public $img;
    public $nome;
    public $category;
    public $prezzo;
    public $caratteristics;
    public $dimentions;

    public function __construct(
        string $img,
        string $nome,
        category $category,
        string $prezzo,
        string $caratteristics,
        string $dimentions
    ){
        $this-> caratteristics = $caratteristics;
        $this-> dimentions = $dimentions;
        parent::__construct($img,$nome,$category,$prezzo);
    }

}

?>