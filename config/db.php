<?php
    $connect = mysqli_connect('localhost','root','','inventory');
    if($connect){
        mysqli_query($connect, "SET NAMES 'UTF8'");
    }else{
        echo 'Connect fail';
    }
?>