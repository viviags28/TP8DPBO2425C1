<?php
require_once "DB.php";

class Department extends DB
{
    function getAll()
    {
        $query = "SELECT * FROM departments";
        return $this->execute($query);
    }

    function getById($id)
    {
        $query = "SELECT * FROM departments WHERE id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['department_name'];
        $query = "INSERT INTO departments (department_name) VALUES ('$name')";
        return $this->execute($query);
    }

    function updateData($id, $data)
    {
        $name = $data['department_name'];
        $query = "UPDATE departments SET department_name = '$name' WHERE id = $id";
        return $this->execute($query);
    }

    function deleteData($id)
    {
        $query = "DELETE FROM departments WHERE id = $id";
        return $this->execute($query);
    }
}
