<?php
        $user = $_POST['username'];
        //echo $user;
        $mysqli = new mysqli("mysql.eecs.ku.edu", "r036n285", "Apohnuj3", "r036n285");
        if ($mysqli->connect_errno) {
                printf("Connect failed: %s\n", $mysqli->connect_error);
                exit();
        }

        if ($result = $mysqli->query("SELECT * FROM Posts WHERE author_id='$user'")){
                echo "<b><u>$user Posts:</b></u><br><br>";
                while ($row = $result->fetch_assoc()){
                        printf ("%s <br>", $row["content"]);
                        echo "<br>";
                }
        }
        $mysqli->close();
?>
