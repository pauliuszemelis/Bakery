<?php

namespace app;


class Bakery
{
    public function __construct()
    {
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == 'GET') {
            $view = $_GET['view'];
            $action = $_GET['action'];

            switch ($view) {
                case 'product':

                    if ($action == 'new') {
                        $this->show((new ProductController())->create());

                        break;
                    }
            }
        } elseif
        ($method == 'POST') {
            print_r($_POST);
        }
    }


    private function show(string $text)
    {
        echo $text;
    }
}