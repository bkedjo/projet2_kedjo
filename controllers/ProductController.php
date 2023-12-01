<?php
require_once('Models/Product.php');
class ProductController
{


    #get all products
    public function getAllProducts()
    {
        $objProduct = new Product;
        return $objProduct->getProducts();
    }

    #get product by Id
    
    public function getProductById($id)
    {
        $objProduct = new Product;
    return $objProduct->getProductById($id);
    }

    
}
