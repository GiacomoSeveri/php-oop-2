<?php
include_once __DIR__ . '/models/dog.php';
include_once __DIR__ . '/models/cat.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>animali pazzi sgravati</title>
</head>

<body>
    <div class="bg-light-subtle">
        <h1 class="text-center py-5 mb-0">Negozio abusivo animalesco</h1>
    </div>
    <div class="bg-secondary-subtle">
        <div class="container text-center">
            <div class="row">
                <?php foreach ($products_dog as $product) : ?>
                    <div class="col-4 p-4">
                        <img src="<?= $product->poster ?>" type="button" class="card-img-top border border-dark">
                        <h3 class="mt-3"><?= $product->name ?></h3>
                        <div class="d-flex justify-content-around mt-5">
                            <h5 type="button"><?= $product->type ?></h5>
                            <h5 class="text-warning"><?= $product->price ?>€</h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <?php foreach ($products_cat as $product) : ?>
                    <div class="col-4 p-4">
                        <img src="<?= $product->poster ?>" type="button" class="card-img-top border border-dark">
                        <h3 class="mt-3"><?= $product->name ?></h3>
                        <div class="d-flex justify-content-around mt-5">
                            <h5 type="button"><?= $product->type ?></h5>
                            <h5 class="text-warning"><?= $product->price ?>€</h5>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div>
</body>

</html>