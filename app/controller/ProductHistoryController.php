<?php


namespace app;


use app\model\productHistory;

class ProductHistoryController
{
    public function create(): string
    {
        return file_get_contents('app\view\product\product_history_new.php');
    }

    public function store(): string
    {
        //Product::create($_POST);
        //(new Product())->($_POST);

        $model = new ProductHistory();
        $model->create($_POST);

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
        echo "<table class='table table-bordered'><thead><tr>";
        echo $header;
        echo "</tr></thead><tbody>";
        echo $data;
        echo '</tbody></<table>';
    }
}