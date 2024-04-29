<?php
    include "connect.php";

    if(isset($_GET['conid'])){
        $conid = $_GET['conid'];
        $sql = "DELETE from `contact` where conid=$conid";
        $con->query($sql);
    }
    header('location:admin-con.php');
    exit;
?>