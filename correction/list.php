<?php
$products = [];
$basket = new Product();

$basket->setNom('Basket Nike');
$basket->setPrixHT(25);
$basket->setPhoto('nike.jpg');
$basket->setQteStock(55);

$ballon = new Product();
$ballon->setNom('Ballon Foot');
$ballon->setPrixHT(36);
$ballon->setPhoto('ballon.jpg');
$ballon->setQteStock(10);

$short = new Product();
$short->setNom('Short Foot');
$short->setPrixHT(12);
$short->setPhoto('short.jpg');
$short->setQteStock(0);

$products = [$basket,$ballon,$short];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prix HT</th>
                        <th>Prix TTC</th>
                        <th>Qte en Stock / Dispo ?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>