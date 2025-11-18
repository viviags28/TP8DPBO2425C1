<?php

class DB
{
    private $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "tp_mvc25");

        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    function execute($query)
    {
        return $this->conn->query($query);
    }

    function get($result)
    {
        return $result->fetch_assoc();
    }
}
