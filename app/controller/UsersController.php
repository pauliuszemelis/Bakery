<?php


namespace app\controller;

use app\model\Users;

class UsersController
{
    public function login() {
        (new TemplateEngineController('login'))->echoOutput();
    }

    public function create()
{
    $template = new TemplateEngineController('new-users');
    $template->echoOutput();
    //(new TemplateEngineController('new-product'))->echoOutput;
}

    public function store()
    {

        $data = $_POST;
        $data['password'] = sha1($data['password']. SALT);

        $model = new Users();
        $model->create($data);

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

    public function auth()
    {
        $data = $_POST;

        $data['password'] = sha1($data['password']. SALT);
        $model = new Users();

        $result = $model->auth($data);

        //TODO check if result kas any rows

        foreach ($result as $key => $value)
        setcookie('user', $value['id'], time()+3600);
        header('Location:?view=product_history&action=new');
    }

    public function isLogged()
    {
        if(isset($_COOKIE['user'])) {

            $model = new Users();
            $result = $model->find($_COOKIE['user']);

            if ($result->num_rows != 1)
                die('Please login!');
        }
        else
            die('Please login!');
    }


}