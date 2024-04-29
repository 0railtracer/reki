<?php
    include "connect.php";

    if(isset($_GET['skid'])){
        $skid = $_GET['skid'];
        $sql = "DELETE from `skills` where skid=$skid";
        $con->query($sql);
    }
    header('location:admin-ski.php');
    exit;
?>