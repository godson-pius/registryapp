<?php
require_once '../config.php';

if (isset($_GET['id']) && isset($_GET['stud'])) {
    $emc = $_GET['id'];
    $stud = $_GET['stud'];

    $sin = "SELECT * FROM attendance_records WHERE Id_no='$emc'";
    $sin2 = mysqli_query($link, $sin);
    $row = mysqli_fetch_array($sin2, MYSQLI_ASSOC);
    $studid = $row['Student_Id'];
    $d = $row['Date'];
    $date = date("Y-m-d");
    $day = date("D");
    $time = date("h:i:s a");

    if($studid==$stud && $d==$date){
        echo "performedAction";
    } else{
        $query = "INSERT INTO attendance_records(Id_no,Student_id,Date,Day,Status,Signed_in) values('$emc','$stud','$date','$day','present','$time')";

        if (mysqli_query($link,$query)){
            echo "signedIn";
        } else {
            echo "Error";
        }

    }
} else {
    echo "Ooops!";
}
