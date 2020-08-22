<?php

use app\models\site\FlashyImage;
use app\models\site\Product;
use app\models\site\Address;
use app\models\site\Schedules;
use app\models\site\About;
use app\controllers\Controller;

$flashyImage = new FlashyImage;
$flashyImageFound = $flashyImage->all();

$product = new Product;
$products = $product->all();

$address = new Address;
$addressFound = $address->all();

$schedules = new Schedules;
$schedulesFound = $schedules->all();

$about = new About;
$aboutPage = $about->all();

$blade = new Controller;
echo $blade->view('index', compact('products', 'addressFound', 'schedulesFound', 'aboutPage', 'flashyImageFound'));