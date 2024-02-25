<?php
class DBConnection
{
    public $conn;
    private $host = "localhost";
    private $db = 'lms_p';
    private $username = "root";
    private $password = "";

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db", $this->username, $this->password);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
