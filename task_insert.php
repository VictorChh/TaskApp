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
        $json = array();
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'name' => $row['name'],
                'description' => $row['description'],
                'ID' => $row['ID']
            );
        }
        $jsonstring = json_encode($json);
        echo $jsonstring;
    }

}

?>
