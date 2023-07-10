<?php

require_once "./app/controllers/Controller.php";
require_once "./app/controllers/ProductController.php";
require_once './app/services/ProductService.php';
$productController = new ProductController();
$productController->index();
