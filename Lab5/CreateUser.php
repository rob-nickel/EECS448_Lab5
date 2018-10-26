<?php
        $query1 = $_POST['name'];
        if($query1 == ""){
                echo "You must insert a Username <br>";
                header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreateUser.html" );
        }
        else{
                $mysqli = new mysqli("mysql.eecs.ku.edu", "r036n285", "Apohnuj3", "r036n285");

                if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                }

                $query = "INSERT INTO Users(user_id) VALUES ('$query1')";
                if ($mysqli->query($query)){
                        echo "Your username has been created successfully";
                        header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreateUser.html" );
                }
                else{
                        echo "Your username is taken already, please try again";
                        header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreateUser.html" );
                }
                $mysqli-> close();
        }

 ?>
