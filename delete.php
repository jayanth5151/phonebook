<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $sno = $_GET['deleteid'];


    $sql = "delete from contacts where sno=$sno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo " contact deleted succesfully";
    } else {
        die("unsuccesful" . mysqli_error($con));
    }
}
?>