<?php
    include "connect.php";

    if(isset($_GET['eduid'])){
        $eduid = $_GET['eduid'];
        $sql = "DELETE from `education` where eduid=$eduid";
        $con->query($sql);
    }
    header('location:admin-edu.php');
    exit;
?>