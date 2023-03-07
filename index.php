<?php
    require_once 'config/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Inventory Management</title>
</head>
<body>
    <?php
        if(isset($_GET['page_layout'])){
            switch ($_GET['page_layout']) {
                case 'list':
                    require_once 'product/list.php';
                    break;
                
                case 'add':
                    require_once 'product/add.php';
                    break;

                case 'update':
                    require_once 'product/update.php';
                    break;

                case 'delete':
                    require_once 'product/delete.php';
                    break;
                default:
                    require_once 'product/list.php';
                    break;
            }
        }else{
            require_once 'product/list.php';
        }
    ?>
</body>
<style>
        body{
            background-image: url('img/phone_shop.jpg');
        }
        table{
            border-collapse: collapse;
        }
        table{
            border: 1px solid black;
        }
        th, td{
            border-bottom: 2px solid #000;
        }
        tr:hover{
            background-color: #AAA;
        }
    </style>
</html>