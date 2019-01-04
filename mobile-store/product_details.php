<?php
    include('server.php');
    $prod_id=$_GET['prod_id'];
    $query = "SELECT * FROM stock WHERE prod_id='$prod_id'";
    $result = mysqli_query($db,$query);
    while($res = mysqli_fetch_array($result)) {  
    
?>   
                 <div class="content">
                    <div class="content" >
                        <div class="content">
                            <?php if($res['prod_pic1'] != ""): ?>
                            <img class="d-block" src="./uploads/<?php echo $res['prod_pic1']; ?>" >
                            <?php else: ?>
                            <img src="/uploads/default.png">
							  <?php endif; ?>
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?php echo $res['name']; ?></h5>
                            </div>
                        </div>
						
						
						
						   <h5><br><br>
        
        <ul><b>Product name: </b> 
        <?php echo $res['name']; ?>
        </ul>
        <ul><b>category	: </b>
        <?php echo $res['category']; ?>
        </ul>
		<ul><b>product details	: </b>
        <?php echo $res['prod_det']; ?>
        </ul>
        
        
        <ul><b>Price: </b>
        <?php echo $res['prod_price'].''; ?>
        </ul>
        <ul>
        <?php  $number_of_stock=$res['number_of_stock'];?> 
        <?php
        if ($number_of_stock==0){
        ?>
         <span style="color:red;">Product Sold Out!</span>   
         <?php
        }else{
       ?>
       <b>Items in stock: </b><?php echo $res['number_of_stock'];?>
       </ul>
       <?php 
    }
?>
        <?php }?>
        </h5>

        </div>
       


    </div>
</div>