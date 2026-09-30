<?php
  include 'Common/connection.php';
   $id=$_GET['id'];
   $sql="DELETE FROM text WHERE id=$id";
   $result=mysqli_query($connection,$sql);
    if ($result){
        header("location: show-all-data.php");
    }
    else{
        echo "wrong";
    }
?>