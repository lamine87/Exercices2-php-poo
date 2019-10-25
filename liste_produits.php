<?php

require 'Product.php';
$basket = new Product('Nike');
$basket->setNom('Nike AirMax');
$basket->setPrixHT(120);
$basket->setQteStock(8);
$basket->setPhoto('nike_airmax.png');

$sweat = new Product('Adidas');
$sweat->setNom("sweat capuche");
$sweat->setQteStock(6);
$sweat->setPhoto('kangol.jpg');


$casquette = new Product("kangol");
$casquette->setNom('kangol 504');
$casquette->setPrixHT(70);
$casquette->setQteStock(0);
$casquette->setPhoto('kangol.jpg');


$produits = [$basket,$sweat,$casquette];


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Marque</th>
        <th>Nom</th>
        <th>Prix HT</th>
        <th>Prix TTC</th>
        <th>Qte Stock</th>
        <th>Photo</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($produits as $p) :?>
    <tr>
        <td><?= $p->getMarque() ?></td>
        <td><?= $p->getNom() ?></td>
        <td><?= $p->getPrixHT() ?></td>
        <td><?= $p->getPrixTTC() ?></td>
        <td>
            <?= $p->getQteStock() ?>
            <?php if($p->getIsDispo()) :?>
            <span style="background: green;color: #fff;padding: 3px">Dispo</span>
            <?php else:?>

            <span style="background: red;color: #fff;padding: 3px">Indispo</span>
            <?php endif?>

        </td>
        <td>
            <img src="img/<?=$p->getPhoto(); ?>" width="50" alt="">
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>

</table>

</body>
</html>