<?php


namespace app;

use app\controller\TemplateEngineController;
use app\model\Product;
use app\model\productHistory;

class ProductHistoryController
{
    public function create()
    {

        $template = new TemplateEngineController('new-product-history');

        $menu = $this->getProductOptions();

        $template->set('menu', $menu);

        $template->echoOutput();
    }

    public function getProductOptions() : string
    {
        $result = (new Product())->list();
        $menu = '';

        foreach ($result as $key => $item) {
            $menu .= '<option value="' . $item['id'] . '">' . $item['name'] . '</option>';

        }
        return $menu;
    }


    public function store()
    {
        //Product::create($_POST);
        //(new Product())->($_POST);

        $model = new ProductHistory();
        $model->create($_POST);
        print_r($model);

        header('Location: ?view=product_history&action=list');
        exit;

    }

    public function list()
    {
        $model = new ProductHistory();
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
