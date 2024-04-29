<?php
    include "connect.php";

    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
        $sql = "DELETE from `portfolio` where pid=$pid";
        $con->query($sql);
    }
    header('location:admin-pf.php');
    exit;
?>