<?php
require_once "models/Lecturer.php";
require_once "models/Department.php";

class LecturerController
{
    private $lecturer;
    private $department;

    public function __construct()
    {
        $this->lecturer = new Lecturer();
        $this->department = new Department();
    }

    public function index()
    {
        $result = $this->lecturer->getAll();

        $lecturers = [];
        while ($row = $this->lecturer->get($result)) {
            $lecturers[] = $row;
        }

        include "views/lecturers/index.php";
    }

    public function create()
    {
        $departments = [];
        $res = $this->department->getAll();

        while ($row = $this->department->get($res)) {
            $departments[] = $row;
        }

        include "views/lecturers/create.php";
    }

    public function store()
    {
        $this->lecturer->add($_POST);

        header("Location: index.php?controller=lecturer&action=index");
        exit;
    }

    public function edit()
    {
        $id = $_GET['id'];

        $result = $this->lecturer->getById($id);
        $lecturer = $this->lecturer->get($result);

        $departments = [];
        $res = $this->department->getAll();

        while ($row = $this->department->get($res)) {
            $departments[] = $row;
        }

        include "views/lecturers/edit.php";
    }

    public function update()
    {
        $id = $_GET['id']; // FIXED
        $this->lecturer->updateData($id, $_POST);

        header("Location: index.php?controller=lecturer&action=index");
        exit;
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->lecturer->deleteData($id);

        header("Location: index.php?controller=lecturer&action=index");
        exit;
    }
}
