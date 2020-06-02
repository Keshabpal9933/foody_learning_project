<?php

    include 'db.php';
    $id=$_GET['id'];

    $sql = "DELETE FROM customer_order WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    
    if($result){
        header("location: view_mexican_order.php");
    }
    else
    {
        echo "There is some problem while deleting item";
    }
    mysqli_close($conn);

?>