<?php
include "vote.php";

if($studentid == TRUE) {

} else {
    header('location:login.php');
}
if (isset($_POST['submit'])) {
        $id=$_POST['radio'];
    if(isset($id)) {    
        $result = $conn->query("SELECT studentid FROM votes WHERE studentid=$studentid");
        !$isValid = $result->num_rows > 0;
        $conn->query("INSERT INTO votes (studentid, candidateid) VALUES ('$studentid', '$id')");
        header("Location: login.php?error=You Have Successfully Voted.");
        if( $isValid) {
            header("Location: register.php?error=You Already Voted.");
        exit;
        }
    }
}