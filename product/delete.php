<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM product where p_id = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=list');
?>