<?php
require_once '../student/config.php';


function viewStudents()
{
    global $link;

    $sql = "SELECT * FROM students";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        return $query;
    } else {
        return false;
    }
}

function viewRecords()
{
    global $link;

    $sql = "SELECT * FROM attendance_records";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        return $query;
    } else {
        return false;
    }
}

function getStudent($id)
{
    global $link;

    $sql = "SELECT * FROM students WHERE Student_Id = $id";
    $query = mysqli_query($link, $sql);

    if (mysqli_num_rows($query) > 0) {
        return $query;
    } else {
        return false;
    }
}

function editStudent($id)
{
    global $link;
    $errors = [];
    $err_flag = false;

    if (!empty($fname)) {
        $fname = $fname;
    } else {
        $err_flag = true;
    }

    if (!empty($lname)) {
        $lname = $lname;
    } else {
        $err_flag = true;
    }

    if (!empty($username)) {
        $username = $username;
    } else {
        $err_flag = true;
    }

    if ($err_flag === false) {
        $sql = "UPDATE students SET First_name = '$fname', Last_name = '$lname', Username = '$username' WHERE Id_no = $id";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}


function editRecords($id)
{
    global $link;
    $errors = [];
    $err_flag = false;

    if (!empty($date)) {
        $date = $date;
    } else {
        $err_flag = true;
    }

    if (!empty($day)) {
        $day = $day;
    } else {
        $err_flag = true;
    }

    if (!empty($status)) {
        $status = $status;
    } else {
        $err_flag = true;
    }

    if ($err_flag === false) {
        $sql = "UPDATE attendance_records SET Date = '$date', Day = '$day', Status = '$status' WHERE Student_Id = $id";
        $query = mysqli_query($link, $sql);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
