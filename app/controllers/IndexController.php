<?php

use app\models\Product;
use app\controllers\Controller;

$product = new Product;
$products = $product->all();


$blade = new Controller;
echo $blade->view('index', compact('products'));