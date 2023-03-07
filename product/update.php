<?php
    $id = $_GET['id'];
    $sql_category = "SELECT * FROM category";
    $query_category = mysqli_query($connect, $sql_category);
    $sql_up = "SELECT * FROM product where p_id=$id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $p_name = $_POST['p_name'];
        if($_FILES['image']['name']==''){
            $image = $row_up['p_name'];
        }else{
            $image = $row_up['p_name'];
        }
        
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $category_id = $_POST['category_id'];
        $sql = "INSERT INTO product (p_name, image, price, quantity, category_id)
        VALUE ('$p_name', '$image', $price, $quantity, $category_id)";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=list');
    }
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Update product</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="">Product name</label>
                  <input type="text" name="p_name" class="form-control" required value="<?php echo $row_up['p_name']; ?>">
                </div>

                <div class="form-group">
                  <label for="">Product image</label> <br>
                  <input type="file" name="image">
                </div>

                <div class="form-group">
                  <label for="">Product price</label>
                  <input type="number" name="price" class="form-control" required value="<?php echo $row_up['price']; ?>">
                </div>

                <div class="form-group">
                  <label for="">Quantity</label>
                  <input type="number" name="quantity" class="form-control" required value="<?php echo $row_up['quantity']; ?>">
                </div>

                <div class="form-group">
                  <label for="">Product category</label>
                  <select class="form-control" name="category_id">
                    <?php
                        while($row_category = mysqli_fetch_assoc($query_category)){?>
                            <option value = "<?php echo $row_category['category_id']; ?>"><?php echo $row_category['category_name']; ?></option>
                        <?php } ?>
                    
                  </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Finish</button>
            </form>
        </div>
    </div>
</div>