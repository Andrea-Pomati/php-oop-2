<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';

class Food extends Product {

  protected $ingredients;

  function __construct(string $name, float $price, string $picture, string $ingredients , Category $category) {
    
  parent::__construct($name, $price, $picture, $category);

  $this->ingredients = $ingredients;

  }

  public function getIngredients() {
    return $this->ingredients;
  }

}