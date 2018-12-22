<?php

// connect to the database and start the session
include "includes/connect.php";

// get ID from the session
$studentid = $_SESSION['studentid'];


// else redirect to login
if(empty($studentid)) {
    header("Location: login.php?error=You need to login first");
    exit;
}

// get the candidates
$candidates = [];

$query = $conn->query("SELECT * FROM candidate");
while ($row = $query->fetch_object()) {
    $candidates[] = $row;
}

// include the view
include "views/vote.php";
