<?php
include('database.php');

if (isset($_POST['name'])) {
    $name =  $_POST['name'];
    $description =  $_POST['description'];

    $query = "INSERT INTO Task (name,description) VALUES ('$name', '$description')";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed" . mysqli_error($connection));
    }
    else {

        echo "Registro insertado exitosamente";
    }

}

?>
