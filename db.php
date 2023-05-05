<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Toy.php";

$categories = [
  new Category("dog", "fa-dog"),
  new Category("cat", "fa-cat"),
];

$product = new Product("Prodotto generico", 3.14, "prodot.png", $categories[0]);

$crock = new Food("Crock", 2.7, "crock.jpg", "pesce, nutella", $categories[1]);

$pallin = new Toy("The Pallin", 5, "pallin.jpg", $categories[0], "plastic");

$products = [
  $product,
  $crock,
  $pallin
];