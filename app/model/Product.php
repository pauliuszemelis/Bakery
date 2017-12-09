<?php


namespace app\model;


use app\model\interfaces\Destroyable;
use app\model\interfaces\Manageable;

class Product extends CoreModel implements Manageable, Destroyable
{
    public function create(array $data)
    {
        //print_r($data);
        //die();
        $query = $this->generateInsertQuery('bakery_products', $data, true);
        $this->query($query);
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}