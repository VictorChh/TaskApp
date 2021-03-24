<?php
include('database.php');

$query = "SELECT * FROM Task";
$result = mysqli_query($connection, $query);

if(!$result) {
    die("Query failed". mysqli_error($connection));
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

?>