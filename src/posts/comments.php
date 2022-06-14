<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
    /* fetch comments from db */
      $query="SELECT * FROM comments WHERE postID='$id'  ";
      $result=mysqli_query($conn , $query);

      if($result) {
        echo "
        <div class='panel-footer'>
        Comments
        </div>
        ";
          if(mysqli_num_rows($result) > 0) {
            while($comment=mysqli_fetch_assoc($result)) {
                include("../include/frame_comment.php");
            }
          }
      } else {
        echo "Query failed";
      }
?>
