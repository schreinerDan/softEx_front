<?php

class ProductService
{
    public function getAllProducts()
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, 'http://131.0.96.82/workana/api/products/getAll');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;
    }
}
