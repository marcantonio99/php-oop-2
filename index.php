<?php

 include_once __DIR__ . '/classi/accessory.php';
 include_once __DIR__ . '/classi/toy.php';
 include_once __DIR__ . '/classi/food.php';
 include_once __DIR__ . '/classi/category.php';

 $categories = [
    'Cane' => new Category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'Gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'Pesce' => new Category('Pesce', '<i class="fa-solid fa-fish"></i>'),

 ];


?>