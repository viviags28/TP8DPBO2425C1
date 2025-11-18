<?php
require_once "models/Department.php";

class DepartmentController
{
    private $department;

    public function __construct()
    {
        $this->department = new Department();
    }

    public function index()
    {
        $result = $this->department->getAll();

        $departments = [];
        while ($row = $this->department->get($result)) {
            $departments[] = $row;
        }

        include "views/departments/index.php";
    }

    public function create()
    {
        include "views/departments/create.php";
    }

    public function store()
    {
        $this->department->add($_POST);
        header("Location: index.php?controller=department&action=index");
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'];

        $result = $this->department->getById($id);
        $department = $this->department->get($result);

        include "views/departments/edit.php";
    }

    public function update()
    {
        $id = $_GET['id']; // FIXED
        $this->department->updateData($id, $_POST);

        header("Location: index.php?controller=department&action=index");
        exit;
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->department->deleteData($id);

        header("Location: index.php?controller=department&action=index");
        exit;
    }
}
