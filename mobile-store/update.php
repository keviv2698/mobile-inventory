<?php
// including the database connection file
include("server.php");
if(isset($_POST['update']))
{
	$id = mysqli_real_escape_string($db, $_POST['prod_id']);
	$name  = mysqli_real_escape_string($db, $_POST['name']);
	$category  = mysqli_real_escape_string($db, $_POST['category']);
	$number_of_stock  = mysqli_real_escape_string($db, $_POST['number_of_stock']);
	$prod_price  = mysqli_real_escape_string($db, $_POST['prod_price']);
	

//updating the table
        $query = "UPDATE stock SET name='$name',category='$category',prod_det='$prod_det',number_of_stock='$number_of_stock', prod_price='$prod_price'WHERE prod_id=$id";
        $result = mysqli_query($db,$query);
		if($result){
            //redirecting to the display page. In our case, it is index.php
        header("Location: dis.php");
        }
}
?>
<?php
//getting id from url

$id=isset($_GET['prod_id']) ? $_GET['prod_id'] : die('ERROR: Record ID not found.');
//selecting data associated with this particular id
$result = mysqli_query($db, "SELECT * FROM stock WHERE prod_id=$id");
while($res = mysqli_fetch_array($result))
{
    $name  = $res['name'];
    
    $number_of_stock = $res['number_of_stock'];
    
    $prod_price = $res['prod_price'];
    $category = $res['category'];
    $prod_det = $res['prod_det'];

}
?>

<form action="update.php" method="post">
        <div class="form group">
		<div class="panel panel-success panel-size-custom">
                <div class="panel-heading">
            <input type="hidden" class="form-control" id="prod_id" name="prod_id" value=<?php echo $_GET['prod_id'];?>>
            
            <label for="name">Product Name :</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>"></br></br>
            <label for="prod_desc">product category :</label>
            <input type="text" class="form-control" id="category" name="category" value="<?php echo $category;?>"></br></br>
			
			<label for="prod_desc">Product datail :</label>
            <input type="text" class="form-control" id="prod_det" name="prod_det" value="<?php echo $prod_det;?>"></br></br>
            
            <label for="prod_price">Product Price :</label>
            <input type="text" class="form-control" id="prod_price" name="prod_price" value="<?php echo $prod_price;?>"></br></br>
            
			<label for="number_of_stock">Product stock  :</label>
            <input type="text" class="form-control" id="number_of_stock" name="number_of_stock" value="<?php echo $number_of_stock;?>"></br></br>

                    


                        <label for="number_of_stock" id="number_of_stock" name="number_of_stock">Available Quantity: &nbsp &nbsp <?php echo $number_of_stock;?> Pcs.</label>
                    </div>
                </div>            
             </div>
            </div>
            <br>
            <div class="form group">
                <button type="submit" class="btn btn-success btn-round" id="submit" name="update">
                    <i class="now-ui-icons ui-1_check"></i> Update Product
                </button>
            </div>
    </form>
  </div>
</div>
</div>
