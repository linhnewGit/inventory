<?php
    $sql = "SELECT * FROM product inner join category on product.category_id = category.category_id";
    $query = mysqli_query($connect, $sql);
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>List of product</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Product name</th>
                        <th>Product image</th>
                        <th>Price</th>
                        <th>Quantity available</th>
                        <th>Category</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_assoc($query)){?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $row['p_name']; ?></td>
                                <td>
                                    <img style="width: 100px;" src="img/<?php echo $row['image']; ?>">
                                </td>

                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td><?php echo $row['category_name']; ?></td>
                                <td>Update</td>
                                <td>Delete</td>
                            </tr>
                        <?php } ?>
                    
                </tbody>
            </table>
            <a class="btn btn-primary" href="index.php?page_layout=add">Add</a>
        </div>
    </div>
</div>