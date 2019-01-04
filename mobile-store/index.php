<?php include('server.php') ?>

<html>
<head>

<title>THE MOBILE STORE</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style3.css">

<style>
ul {
    list-style-type: none;
    margin: 4;
    padding: 8;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
 
  <li><a href="login.php">admin</a></li>
</ul>
</div>
<h1><div class="caption">
<center>welcome</center></h1>
<div class="caption">
		
		<center><h1><marquee behavior=scroll direction="left" scrollamount="15" welcome to the store marquee></h1></center>
		</div>
		
		   <?php
    $query = "SELECT * FROM stock ORDER BY name ASC";
    $result = mysqli_query($db,$query);
    while($res = mysqli_fetch_array($result)) {  
        $prod_id=$res['prod_id'];
    
?>   
    
        <div class="caption">
            <?php if($res['prod_pic1'] != ""): ?>
           <center> <img src="uploads/<?php echo $res['prod_pic1']; ?>" width="250px" height="300px">
            <?php else: ?>
            <img src="uploads/default.png" width="250px" height="300px"></center>
            <?php endif; ?>
        <div class="caption">
          <p1><b><?php echo $res['name'];?></b></br>
          <a class="btn btn-success btn-round" title="Click for more details!" href="product_details.php?prod_id=<?php echo $res['prod_id'];?>"><i class="now-ui-icons gestures_tap-01"></i>View</a><medium class="pull-right">price:<?php echo $res['prod_price']; ?></medium></p1>
        </div>

        </div>
      <hr color="orange">
      </div>
             
<?php }?> 

      </ul>
  </div>

</body>
</html>
