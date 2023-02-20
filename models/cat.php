<?php
include_once __DIR__ . '/products.php';

class Cat extends Products
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

$gomitolo = new Cat('Gomitolo', 2.30, 'https://www.rudolfsteiner.it/editrice/img/libri7046.gif', 'Gatti');
$lettiela = new Cat('Lettiela', 15.00, 'https://croci.net/wp-content/uploads/2020/06/Lettiera_gatti_agglomerante.jpg', 'Gatti');
$trasportino = new Cat('Pizza Margherita', 5.50, 'https://images.eprice.it/nobrand/0/Lightbox/855/212838855/F1120738-24D3-4F74-8B53-A2F5AA8B1EA0.jpg', 'Gatti');

$products_cat = [$gomitolo, $lettiela, $trasportino];
