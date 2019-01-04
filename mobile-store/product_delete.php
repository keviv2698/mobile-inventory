
    
<?php

include 'server.php';

$id = $_GET['prod_id'];

$result = mysqli_query($db, "DELETE FROM stock WHERE prod_id=$id");

header("Location:dis.php");
?>
    