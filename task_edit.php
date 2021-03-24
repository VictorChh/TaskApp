<?php
include('database.php');
if (isset($_POST['ID'])) {
    $id =  $_POST['ID'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    

    $query = "UPDATE Task SET name='$name', description='$description' where ID ='$id'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed" . mysqli_error($connection));
    }
    else {
        echo "Task Edited";
    }
}

else {
    echo "no ID";
}

?>