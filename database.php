<?php
    $connection = mysqli_connect(
        '189.144.157.193',
        'root',
        'root',
        'TaskApp'
    );

    if($connection){
        echo "Database connected";
    }
else{
    echo "no connection";
}
echo "test";
?>
