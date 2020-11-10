<?php
include("../Dbconnection/dbconnection.php");
include("../model/students.php");
$student = new Students();
switch ($_REQUEST['action']) {
    case 'add':

        $student->student_id = $_POST['student_id'];
        $student->name = $_POST['name'];
        $student->father_name = $_POST['father_name'];
        $student->mother_name = $_POST['mother_name'];
        $student->email = $_POST['email'];
        $student->phone = $_POST['phone'];
        $student->address = $_POST['address'];
        $save = $student->save();
        if($save){
            $_SESSION['message'] = "<div class='alert alert-info'>Data save successfully.</div>";
        }else{
            $_SESSION['message'] = "<div class='alert alert-info'>Unable to save.</div>";

        }
        header('Location:../index.php');
    break;
    case 'update':
        # code...
        break;
    case 'delete':
        $id = $_REQUEST['id'];
        $status = $student->delete($id);
        header('Location:../index.php');
        break;
    default:
        # code...
        break;
}

?>