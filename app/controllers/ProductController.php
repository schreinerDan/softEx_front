<?php

class ProductController extends Controller
{
    private $productService;

    public function __construct()
    {
        $this->service = new ProductService();
    }

    public function index()
    {
        
        $products = json_decode($this->service->getAllProducts());
        $this->set(['products'=>$products]);
       $this->render("products","index");
        // Renderize a visualização passando os dados dos produtos

    }
}
