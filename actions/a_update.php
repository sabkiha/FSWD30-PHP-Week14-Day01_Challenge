<?php

require_once 'db_connect.php';

if($_POST) {
    $table_name = $_POST['table_name'];
    $table_capacity = $_POST['table_capacity'];
    $reserved = $_POST['table_reserved'];
    $tabe_id = $_POST['table_id'];

    $sql = "UPDATE tables SET table_name = '$table_name', capacity = '$table_capacity', reserved = '$table_reserved' WHERE table_id = {$table_id}";
    if($conn->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $conn->error;
    }

    $conn->close();
}

?>