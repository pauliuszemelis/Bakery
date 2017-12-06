<?php


namespace app;


class ProductController
{
    public function create () : string
    {
       return file_get_contents('app\view\product\new.php');
    }
}