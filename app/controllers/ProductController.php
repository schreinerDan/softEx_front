<?php

class ProductController
{
    private $productService;

    public function __construct()
    {
        $this->productService = new ProductService();
    }

    public function index()
    {
        
        $products = json_decode($this->productService->getAllProducts());
       
        // Renderize a visualização passando os dados dos produtos
        include "./views/products/index.php";


    }
}
