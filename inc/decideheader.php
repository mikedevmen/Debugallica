<?php
session_start();

if (isset($_POST['account'])){
        $acc=$_POST['account'];
    
        $_SESSION['account']= $acc;
    }
if (isset($_SESSION['account'])){
    $acc=$_SESSION['account'];

}


if (isset($_SESSION['account'])){
    require("headerlogin.inc");
}
else
    require("header.inc");
?>