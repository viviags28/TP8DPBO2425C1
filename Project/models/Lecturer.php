<?php
require_once "DB.php";

class Lecturer extends DB
{
    function getAll()
    {
        $query = "
            SELECT lecturers.*, departments.department_name 
            FROM lecturers 
            LEFT JOIN departments 
            ON lecturers.department_id = departments.id
        ";
        return $this->execute($query);
    }

    function getById($id)
    {
        $query = "SELECT * FROM lecturers WHERE id = $id";
        return $this->execute($query);
    }

    function add($data)
    {
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join = $data['join_date'];
        $dept = $data['department_id'];

        $query = "
            INSERT INTO lecturers (name, nidn, phone, join_date, department_id)
            VALUES ('$name', '$nidn', '$phone', '$join', $dept)
        ";

        return $this->execute($query);
    }

    function updateData($id, $data)
    {
        $name = $data['name'];
        $nidn = $data['nidn'];
        $phone = $data['phone'];
        $join = $data['join_date'];
        $dept = $data['department_id'];

        $query = "
            UPDATE lecturers 
            SET name = '$name',
                nidn = '$nidn',
                phone = '$phone',
                join_date = '$join',
                department_id = $dept
            WHERE id = $id
        ";

        return $this->execute($query);
    }

    function deleteData($id)
    {
        $query = "DELETE FROM lecturers WHERE id = $id";
        return $this->execute($query);
    }
}
