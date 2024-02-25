<?php
require_once '../connection.php';


class StudentCtr extends DBConnection
{
    public $singleStudentRec = [];
    public $studentEditRec = [];

    public function getStudents()
    {
        $query = "SELECT * FROM students";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function store($data)
    {
        try {
            $query = "INSERT INTO students (name, father_name, student_class) VALUES (?, ?, ?)";
            $stmnt = $this->conn->prepare($query);
            $stmnt->execute([$data['name'], $data['father_name'], $data['student_class']]);
            header('Location: ./index.php');
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function updateRec($data)
    {
        try {
            $query = "UPDATE students SET name=:name, father_name=:father_name, student_class=:student_class WHERE id=:id";
            $stmnt = $this->conn->prepare($query);
            $stmnt->bindParam('id', $data['id']);
            $stmnt->bindParam('name', $data['name']);
            $stmnt->bindParam('father_name', $data['father_name']);
            $stmnt->bindParam('student_class', $data['student_class']);
            $stmnt->execute();

            header('Location: ./index.php');
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function delete($id)
    {
        try {
            $query = "DELETE FROM students WHERE id=:id";
            $stmnt = $this->conn->prepare($query);
            $stmnt->bindParam('id', $id);
            $stmnt->execute();
            header('Location: index.php');
        } catch (\Throwable $th) {
            echo $th;
        }
    }

    public function singleRec($id)
    {
        try {
            $query = "SELECT * FROM students WHERE id=:id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam('id', $id);
            $stmt->execute();
            $this->singleStudentRec =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo $th;
        }
    }


    public function singleRecEdit($id)
    {
        try {
            $query = "SELECT * FROM students WHERE id=:id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam('id', $id);
            $stmt->execute();
            $this->studentEditRec =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (\Throwable $th) {
            echo $th;
        }
    }
}


$stuObj = new StudentCtr();

if (isset($_POST['studentFrmSubmit'])) {
    $data = [];
    $data['name'] = $_POST['name'];
    $data['father_name'] = $_POST['father_name'];
    $data['student_class'] = $_POST['student_class'];
    $stuObj->store($data);
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stuObj->delete($id);
}

if (isset($_GET['viewId'])) {
    $id = $_GET['viewId'];
    $stuObj->singleRec($id);
}

if (isset($_GET['editId'])) {
    $id = $_GET['editId'];

    $stuObj->singleRecEdit($id);
}

if (isset($_POST['studentFrmUpdateBtn'])) {
    $data = [];
    $data['id'] = $_POST['id'];
    $data['name'] = $_POST['name'];
    $data['father_name'] = $_POST['father_name'];
    $data['student_class'] = $_POST['student_class'];
    $stuObj->updateRec($data);
}
