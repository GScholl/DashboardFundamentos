<?php


    include("banco.php");
    $sql = "SELECT * FROM sitespopulares";
    $res = $conn->query($sql);
    $sites = [];
    while ($row = $res->fetch_object()) { 
    array_push($sites,$row);

    }
    echo json_encode($sites);
?>