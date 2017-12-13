<?php


namespace app\controller;

use app\model\Users;

class UsersController
{public function create()
{
    $template = new TemplateEngineController('new-users');
    $template->echoOutput();
    //(new TemplateEngineController('new-product'))->echoOutput;
}

    public function store()
    {
        $model = new Users();
        $model->create($_POST);

        header('Location: ?view=users&action=list');
        exit;

    }

    public function list()
    {
        $model = new Users();
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