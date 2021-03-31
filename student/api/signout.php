<?php
// Signing out
if (isset($_GET['id']) && isset($_GET['stud']) && isset($_GET['status'])) {
    $emc = $_GET['id'];
    $stud = $_GET['stud'];

    $sin = "SELECT * FROM attendance_records WHERE Id_no='$emc'";
    $sin2 = mysqli_query($link, $sin);

    if (mysqli_num_rows($sin2)) {
        $row = mysqli_fetch_array($sin2, MYSQLI_ASSOC);
        $studid = $row['Student_Id'];
        $d = $row['Date'];
        $date = date("Y-m-d");
        $day = date("D");
        $time = date("h:i:s a");

        if($studid==$stud && $d==$date) {
            $sign="UPDATE attendance_records SET Signed_out='$time' WHERE Id_no=$emc";
            $signout = mysqli_query($link,$sign);

            if ($signout){
                echo "signedOut";
            } else {
                echo "Error";
            }
        } else{
            echo "Error";
        }
    } else {
        echo "performAction";
    }

} else {
    echo "Ooops!";
}
