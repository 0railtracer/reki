<?php
    include "connect.php";

    if(isset($_GET['expid'])){
        $expid = $_GET['expid'];
        $sql = "DELETE from `experience` where expid=$expid";
        $con->query($sql);
    }
    header('location:admin-exp.php');
    exit;
?>