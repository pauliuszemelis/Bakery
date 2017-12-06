<?php


namespace app;


use app\model\Product;

class ProductController
{
    public function create () : string
    {
       return file_get_contents('app\view\product\new.php');
    }

    public function store () : string {

        $model = new Product();

        print_r($_POST);
        return '';
    }
}