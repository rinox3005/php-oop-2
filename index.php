<?php

require_once(__DIR__ . "/Models/DogProduct.php");
require_once(__DIR__ . "/Models/CatProduct.php");

// Creo i miei prodotti

$collareInTela = new DogProduct('https://www.dogtracepet.com/Portals/DogTracePet/productimages/1217_0815f.jpg', 'Collare in tela', 'Collare in tela morbido per cani di tutte le taglie', 'Accessories', 10.99, 0);
$erbaGatta = new CatProduct('https://i5.walmartimages.com/asr/58632ecd-19ee-4448-bf69-6880db06743f.53d859c8b848a3ad552e32558cd00726.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF', 'Erba gatta 50g', 'Busta di erba gatta da 50g', 'Food', 7.99, 17);
$guinzaglioPelle = new DogProduct('https://www.fordogtrainers.it/images/large/Guinzaglio-pelle-L110R(6)_LRG.jpg', 'Guinzaglio Nero in Pelle', 'Guinzaglio nero in pelle per cani di taglia grande', 'Accessories', 29.99, 3);
$pallinaDiCorda = new CatProduct('https://croci.net/cdn/shop/files/Gioco_per_gatti_Palla_in_corda.jpg?v=1696857833&width=2048', 'Pallina di Corda', 'Pallina di corda piccola, ideale come gioco per gatti di tutte le etá', 'Toys', 9.99, 11);

var_dump($collareInTela);
// var_dump($erbaGatta);
// var_dump($guinzaglioPelle);
// var_dump($pallinaDiCorda);

// Creo un array multidimensionale con i miei prodotti
$products = [
    'dog' => [
        $collareInTela,
        $guinzaglioPelle,
    ],
    'cat' => [
        $erbaGatta,
        $pallinaDiCorda,
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Products</title>
    <!-- Custom Css -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7711c3f1fc.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Pet Products</h1>

    <div class="container">
        <?php foreach ($products as $category => $items) : ?>
            <?php foreach ($items as $product) : ?>
                <div class="product-card">
                    <?php if ($product->getCategory() == 'Dog') : ?>
                        <i class="fas fa-dog"></i>
                    <?php elseif ($product->getCategory() == 'Cat') : ?>
                        <i class="fas fa-cat"></i>
                    <?php endif; ?>
                    <h4 class="type"><?php echo $product->getType(); ?></h4>
                    <img src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
                    <div class="info">
                        <h3><?php echo $product->getName(); ?></h3>
                        <p><?php echo $product->getDescription(); ?></p>
                        <p>Price: <?php echo $product->getPrice(); ?> €</p>
                        <p>Stock: <?php echo $product->getStock(); ?> available</p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

</body>

</html>