<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "r036n285", "Apohnuj3", "r036n285");

if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
}

if ($result = $mysqli->query("SELECT * FROM Users")){
        echo "<b><u>Users:</b></u><br>";
        while ($row = $result->fetch_assoc()){
                printf ("%s \n", $row["user_id"]);
                echo "<br>";
        }
}

?>
