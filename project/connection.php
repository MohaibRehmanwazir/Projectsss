<?php
class DBConnection
{
    public $conn;
    private $db_name = "muhib_db";
    private $host = "localhost";
    private $username = "root";
    private $password = "";

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host:$this->host; dbname=$this->db_name", $this->username, $this->password);
            echo "Connected";
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
