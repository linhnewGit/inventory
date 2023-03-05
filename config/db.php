<?php
    $connect = mysqli_connect('localhost','root','','inventory_demo');
    if($connect){
        mysqli_query($connect, "SET NAME 'UFT8'");
        echo "Connect success";
    }else{
        echo "Connect fail";
    }
?>