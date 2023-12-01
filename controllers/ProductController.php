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

    #get product by category
    #

}
