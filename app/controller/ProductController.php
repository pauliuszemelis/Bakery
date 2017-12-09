<?php


namespace app;


use app\model\Product;

class ProductController
{
    public function create(): string
    {
        return file_get_contents('app\view\product\new.php');
    }

    public function store(): string
    {

        //Product::create($_POST);

        //(new Product())->($_POST);

        $model = new Product();
        $model->create($_POST);

        header('Location: ?view=product&action=list');
        exit;

    }

    public function list()
    {
        $model = new Product();
        $model->list();
    }
}