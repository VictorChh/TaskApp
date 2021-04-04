<?php
/*
    $connection = mysqli_connect(
        'localhost',
        'root',
        'root',
        'TaskApp'
    );

    if($connection){
       // echo "Database connected";
    }
*/
    //Get Heroku ClearDB connection informati
    /*
$cleardb_url = parse_url(getenv("mysql://b0dca37501b2bc:9ba0a5ad@us-cdbr-east-03.cleardb.com/heroku_4849162b69c60d6?reconnect=true"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB

$connection = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);*/


    $connection = mysqli_connect(
        'us-cdbr-east-03.cleardb.com',
        'b0dca37501b2bc',
        '9ba0a5ad',
        'heroku_4849162b69c60d6'
    );

    if($connection){
       //echo "Database connected";
    }
    

?>
