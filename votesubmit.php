<?php
include "vote.php";

if($studentid == TRUE) {

} else {
    header('location:login.php');
}
if (isset($_POST['submit'])) {
        $id=$_POST['radio'];
    if(isset($_POST['radio'])) {    
        $result = $conn->query("SELECT studentid FROM votes WHERE studentid='$studentid'");
        !$isValid = $result->num_rows > 0;
        $conn->query(" INSERT INTO votes (studentid, candidateid) VALUES ('$studentid', '".$_POST['radio']."' )");
        header("Location: login.php?error=you have successfully voted");
        if( $isValid) {
            header("Location: register.php?error=you already voted");
        exit;
        }
    }
}