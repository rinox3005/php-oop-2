<?php

require_once(__DIR__ . "/Models/DogProduct.php");
require_once(__DIR__ . "/Models/CatProduct.php");

// Creo i miei prodotti

$collareInTela = new DogProduct('https://www.dogtracepet.com/Portals/DogTracePet/productimages/1217_0815f.jpg', 'Collare in tela', 'Collare in tela morbido per cani di tutte le taglie', 'Accessories', 10.99, 0);
$erbaGatta = new CatProduct('https://i5.walmartimages.com/asr/58632ecd-19ee-4448-bf69-6880db06743f.53d859c8b848a3ad552e32558cd00726.jpeg?odnHeight=768&odnWidth=768&odnBg=FFFFFF', 'Erba gatta 100g', 'Vasetto di erba gatta da 100g', 'Food', 7.99, 17);
$guinzaglioPelle = new DogProduct('https://www.fordogtrainers.it/images/large/Guinzaglio-pelle-L110R(6)_LRG.jpg', 'Guinzaglio Nero in Pelle', 'Guinzaglio nero in pelle per cani di taglia grande', 'Accessories', 29.99, 3);
$pallinaDiCorda = new CatProduct('https://croci.net/cdn/shop/files/Gioco_per_gatti_Palla_in_corda.jpg?v=1696857833&width=2048', 'Pallina di Corda', 'Pallina di corda piccola, ideale come gioco per gatti di tutte le etá', 'Toys', 9.99, 11);
$ossoBufalo = new DogProduct('https://www.animalhouseitalia.it/8585-thickbox_default/ossi-in-pelle-di-bufalo-naturale-per-cane-21-cm-180g.jpg', 'Osso di Pelle', 'Osso di pelle di bufalo varie misure', 'Snack', 4.99, 34);
$ossoSqueak = new DogProduct('https://i.ebayimg.com/images/g/1qsAAOSwLqFV-Gi5/s-l1200.jpg', 'Osso Morbido Squeak', 'Morbido Osso Forma con Squeak per Cane', 'Toys', 12.99, 4);
$tiragraffi = new CatProduct('https://arcaplanet.vtexassets.com/arquivos/ids/223798/trixie-gatto-tiragraffi-valencia-beige.jpg?v=637454735908600000', 'Tiragraffi Valencia', 'Il Tiragraffi Valencia è indispensabile per le unghie del tuo gatto', 'Toys', 79.99, 4);
$spazzolaMassaggi = new CatProduct('https://www.newlupex.eu/image/cache/catalog/Accessori%20Cinesi/Spazzola_forma_arco_per_gatti/Archetto-rimuovi-pelo-per-gatti-1000x1000.jpg', 'Spazzola Arco', 'Spazzola massaggiatore ad arco per Gatti con base tiragraffi', 'Accessories', 29.00, 11);
$ExclusionFood = new DogProduct('https://tuttonatura.shop/793-medium_default/exculsion-diet-hypo-medium-hydrolizzato-di-pesce-e-amido-di-mais-kg-2.jpg', 'Exclusion Pesce 2Kg', 'Exclusion Diet Hypo Medium Hydrolizzato di Pesce 2kg', 'Food', 79.99, 0);
$scatoletteFood = new CatProduct('https://www.piccolozooshop.com/637-large_default/almo-nature-hfc-scatoletta-natural-kitten-pollo-per-gatto.jpg', 'Almo Nature Vitello 70g', 'Almo Nature HFC scatoletta Natural vitello 70gr per gatto', 'Food', 4.99, 74);


// var_dump($collareInTela);
// var_dump($erbaGatta);
// var_dump($guinzaglioPelle);
// var_dump($pallinaDiCorda);
// var_dump($ossoBufalo);
// var_dump($ossoSqueak);

// Creo un array multidimensionale con i miei prodotti
$products = [
    'dog' => [
        $collareInTela,
        $guinzaglioPelle,
        $ossoBufalo,
        $ossoSqueak,
        $ExclusionFood,
    ],
    'cat' => [
        $erbaGatta,
        $pallinaDiCorda,
        $tiragraffi,
        $spazzolaMassaggi,
        $scatoletteFood,
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
    <header>
        <div class="header-container">
            <h1><i class="fas fa-paw"></i> Pet Products </h1>
        </div>
    </header>

    <main>
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
                            <p>
                                <?php $stock = $product->getStock();
                                echo ($stock == 0) ? 'Not Available' : 'Available: ' . $stock . ' in Stock'; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <div><i class="fas fa-paw"></i> Pet Products </div>
        </div>
    </footer>
</body>

</html>