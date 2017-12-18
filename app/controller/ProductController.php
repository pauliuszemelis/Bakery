<?php


namespace app\controller;

use app\model\Product;

class ProductController
{
    public function create()
    {
        $template = new TemplateEngineController('new-product');
        $template->echoOutput();
        //(new TemplateEngineController('new-product'))->echoOutput;
    }

    public function store()
    {
        print_r($_POST);
        print_r($_FILES);
        die();
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
        $result = $model->list();
        $header = '';
        $data = '';

        foreach ($result as $item) {


            if ($header == '') {
                foreach ($item as $key => $value) {
                    $header .= '<th>' . $key . '</th>';

                }
            }
            $data .= '<tr>';
            foreach ($item as $key => $value) {
                $data .= '<td>' . $value . '</td>';

            }
            $data .= '</tr>';
        }

        $template = new TemplateEngineController('table-list');
        $template->set('header', $header);
        $template->set('data', $data);

        $template->echoOutput();

    }
}