<?php
        $name = $_POST['name'];
        $post_content = $_POST['post'];

        if($name == ""){
                echo "You must insert a Username <br>";
                header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreatePosts.html" );
        }
        else if ($post_content == ""){
                echo "You must insert text in your post <br>";
                header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreatePosts.html" );
        }
        else{
                $mysqli = new mysqli("mysql.eecs.ku.edu", "r036n285", "Apohnuj3", "r036n285");

                if ($mysqli->connect_errno) {
                        printf("Connect failed: %s\n", $mysqli->connect_error);
                        exit();
                }

                $check = "SELECT * FROM Users WHERE user_id='$name'";
                $query = "INSERT INTO Posts(content, author_id) VALUES ('$post_content','$name')";
                $result = $mysqli->query($check);
                $row_count = mysqli_num_rows($result);
                if($row_count == 0){
                        echo "This user does not exist, please enter a valid username";
                        header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreatePosts.html" );
                }
                else if ($mysqli->query($query)){
                        echo "Your post has been created successfully";
                        header( "refresh:3; url=https://people.eecs.ku.edu/~r036n285/Lab5/CreatePosts.html" );
                }
                $mysqli-> close();
        }

 ?>
