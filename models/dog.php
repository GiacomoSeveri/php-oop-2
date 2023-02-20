<?php
include_once __DIR__ . '/products.php';

class Dog extends Products
{
    public $type;
    public $poster;

    public function __construct($name, $price, $poster, $type)
    {
        $this->type = $type;
        $this->poster = $poster;
        parent::__construct($name, $price);
    }
}

$ciotola = new Dog('Ciotola tandem psichica da guerra', 5.00, 'https://m.media-amazon.com/images/I/71VYZyswB7L._AC_SL1500_.jpg', 'Cani');
$mangime = new Dog('Croccantini di laboratorio 1kg', 10.00, 'https://www.interfood.ch/_CMS/repository/Normal/124-crocchette_per_cani_Natural_Trainer_ideal_weight_mini.jpg', 'Cani');
$gioco = new Dog('Pollo di gomma', 9.99, 'https://www.ledmallhome.com/5954527-large_default/pollo-di-gomma-gioco-per-cani-con-squeak-integrato-33cm.jpg', 'Cani');

$products_dog = [$ciotola, $mangime, $gioco];
