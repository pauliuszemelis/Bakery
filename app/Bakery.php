<?php

namespace app;


class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $view = $_GET['view'];
        $action = $_GET['action'];

        if ($method == 'GET') {


            switch ($view) {
                case 'product':

                    if ($action == 'new')
                        $this->show((new ProductController())->create());
                    elseif ($action='list')
                        (new ProductController())->list();
                        break;
                case 'products_history':

                    if ($action == 'new')
                        $this->show((new ProductController())->create());
                    elseif ($action='list')
                        (new ProductController())->list();
                    break;
            }
        } elseif
        ($method == 'POST') {

            switch ($view) {
                case 'product':

                    if ($action == 'create') {
                        $this->show((new ProductController())->store());

                        break;
                    }
            }
        }
    }


    private function show(string $text)
    {
        echo $text;
    }
}