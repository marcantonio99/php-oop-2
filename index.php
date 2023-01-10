<?php

 include_once __DIR__ . '/classi/accessory.php';
 include_once __DIR__ . '/classi/toy.php';
 include_once __DIR__ . '/classi/food.php';
 include_once __DIR__ . '/classi/category.php';

 $arraycategory=[
    "cane" => new category("<i class='fa-solid fa-dog'></i>","cane"),
    "gatto" => new category("<i class='fa-sharp fa-solid fa-cat'></i>","gatto"),
    "uccello" => new category("<i class='fa-solid fa-crow'></i>","uccello")
];

$arrayelements=[
    
    new food("https://cdn.dogsitter.it/it/images/shop/rc-dog-mini-adult-big.jpg","Royal Canin",$arraycategory["cane"],"20€","50kg","prosciutto,riso"),
    new food("https://www.moby-dick.it/image/cache/data/Foto%20Prodotti/Cani/746_EXE_12KG_DOG-500x500.jpg","Almo Nature",$arraycategory["cane"],"20€","50kg","manzo,cereale"),
    new accessory ("https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/400/71860_pla_vogelvoliere_bellacasa_back_2.jpg","Voliera Ferplast Bella Casa",$arraycategory["uccello"],"184.99€","Legno","180x230cm"),
    new toy("https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/800/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg","Topini di peluche",$arraycategory["gatto"],"4,99€","morbido con codina in corda","8,5 x 10cm"),
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--include Fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--include Bootstrap's CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--link my style-->
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>PetShop</title>
</head>
<body>

<section class="container">
        <h3>Boolshop</h3>
        <h4>Prod</h4>
        <div class="d-flex flex-wrap">
            <?php foreach ($arrayelements as $element) { ?>
                <div class="card bg-dark text-white mt-2" style="width: calc(100% / 2);">
                <img src="<?php echo $element -> img ?>" class="card-img-top mt-5" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?php echo "<br>" . $element -> nome ?></h5>
                  <span><?php echo $element->category->name . " " . $element->category->icon ?></span>
                  <p class="card-text"><?php echo "<strong>Price:</strong> " . $element -> prezzo ?></p>

                  <?php if(get_class($element) == "food") { 
                     echo "<p>". "<strong>Peso netto:</strong> " . $element -> weight . "</p>";
                     echo "<p>". "<strong>ingredienti:</strong> " . $element -> ingredients . "</p>";

                   } else if (get_class($element) == "accessories"){
                    echo "<p>" . "<strong>Materiale:</strong> " . $element -> material . "</p>";
                    echo "<p>" . "<strong>Dimensioni:</strong> " . $element -> dimentions . "</p>";
                  }else if (get_class($element) == "toys"){
                    echo "<p>" . "<strong>caratteristiche:</strong> " . $element -> caratteristics . "</p>";
                    echo "<p>" . "<strong>dimensioni:</strong> " .$element -> dimentions . "</p>";
                  }?>
                  
                </div>
              </div>
           <?php } ?>
        </div>
    </section>

    <!--include Vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!--include Axios-->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!--include Bootstrap's JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!--link my script-->
    <script src="./assets/scripts/main.js"></script>
</body>
</html>