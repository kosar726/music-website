<?php
class Connection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "sevenmusic";

    public function connect()
    {
        $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}

class Query extends Connection
{
    public function insert($table, $data)
    {
        $query = 'INSERT INTO ' . $table . ' (';
        foreach ($data as $key => $value) {
            $query .= $key . ',';
        }
        $query = substr($query, 0, -1);
        $query .= ') VALUES (';
        foreach ($data as $key => $value) {
            $query .= ':' . $key . ',';
        }
        $query = substr($query, 0, -1);
        $query .= ');';

        $insert = $this->connect()->prepare($query);
        $insert->execute($data);
    }

    public function get($table){
        $query = "SELECT * FROM $table";
        $get = $this->connect()->prepare($query);
        $get->execute();
        return $get;
    }

    public function where($table, $item, $value){
        $query = "SELECT * FROM $table WHERE $item=$value";
        $get = $this->connect()->prepare($query);
        $get->execute();
        return $get;
    }

    public function like($table, $item, $value){
        $query = "SELECT * FROM $table WHERE $item LIKE '%$value%'";
        $get = $this->connect()->prepare($query);
        $get->execute();
        return $get;
    }
}
