<?php
   $q1 = $_POST['arrayOfCheckboxes'];
   /* gain access to mysqli */
   $mysqli = new mysqli("mysql.eecs.ku.edu", "r036n285", "Apohnuj3", "r036n285");
   /* check connection */
   if ($mysqli->connect_errno) {
       printf("Connect failed: %s\n", $mysqli->connect_error);
       exit();
   }
   foreach($_POST['arrayOfCheckboxes'] as $post){
   $query = "DELETE FROM Posts WHERE post_id='$post'";
   if($mysqli->query($query)){
     echo "Post $post was deleted<br>";
   }
   else{
         echo "Bad Post $post was unable to be deleted <br>";
   }
 }
   $mysqli->close();
?>
