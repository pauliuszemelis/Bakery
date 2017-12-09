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
        echo "<table class='table table-bordered'><thead><tr>";
        echo $header;
        echo "</tr></thead><tbody>";
        echo $data;
        echo '</tbody></<table>';
    }
}