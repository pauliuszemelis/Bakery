<?php

namespace app\model;


class CoreModel
{
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $dbname = 'pz_bakery';

    private $conn;

    private function connect()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);

        if (!$this->conn) {
            die("Not so much success conecting...");
        }

        $this->conn->set_charset('utf8mb4');

    }

    protected function query(string $query)
    {
        $this->connect();
        $result = $this->conn->query($query);
        if ($result) {
            $this->conn->close();
            return $result;
        }
        print_r($this->conn);
        $this->conn->close();
        die();
    }

    protected function generateInsertQuery(string $tableName, array $data, bool $uuid = false): string
    {

        if ($uuid)
            $data['id'] = uniqid();

        $keys = $values = '';

        foreach ($data as $key => $value) {

            $keys .= "`$key`, ";
            $values .= "'$value', ";

        }

        $keys = rtrim($keys, ", ");
        $values = rtrim($values, ", ");

        $query = "INSERT INTO `$tableName` ($keys) VALUES ($values)";

        return ($query);

    }
}