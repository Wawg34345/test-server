<?php
    const HOSTNAME = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE = 'server';

    $link = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$link){
        echo mysqli_connect_error();
    }
    else{
        $queryRes = mysqli_fetch_all(mysqli_query($link, 'SELECT * FROM storage'));
        header('Content-Type: application/json');
        echo json_encode($queryRes);
    }

    mysqli_close($link);