<head>
<title>Display</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style3.css">
<link rel="stylesheet" type="text/css" href="navstyle.css">
<style>
</head>
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


<ul>
  <li><a class="active" href="home.php">Home</a></li>
 
  <li><a href="stock.php">enter stock</a></li>
  <li><a href="dis.php">display stock</a></li>
  <li><a href="display.php">print stock</a></li>
  <li><a href="login.php">logout</a></li>
</ul>






 <?php
                                      include('server.php');

                                      $action = isset($_GET['display']) ? $_GET['display'] : "";
                                      if($action=='deleted'){
                                          echo "<div class='alert alert-success'>Record was deleted.</div>";
                                      }
                                      $query = "SELECT * FROM stock ORDER BY name ASC";
                                      $result = mysqli_query($db,$query);
                                      ?>  
                                 
                                <br>
                                <br>
                                <table id="" class="active">
                                    <tr>
                                      <th>   product id&nbsp &nbsp </th>
                                      <th>   name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</th>
                                      <th>   category&nbsp &nbsp</th>
                                      <th>   stock&nbsp &nbsp</th>
                                      <th>   price&nbsp &nbsp</th>
                                      <th>   view product detail&nbsp &nbsp</th>
                                      <th>   update product info</th>
                                      <th>   delete product </th>
									  
                                      
                                      
                                    </tr>
                                        <?php
                                          if($result){
                                            while($res = mysqli_fetch_array($result))  {     
                                              echo "<tr></br>";
                                                echo "<td>".$res['prod_id']."</td>";
                                                echo "<td>".$res['name']."</td>";
                                                echo "<td>".$res['category']."</td>";
                                                echo "<td>".$res['number_of_stock']."</td>";  
                                                echo "<td>".$res['prod_price']."</td>";  
                                                
                                               
                                              echo "<td><a href=\"product_details.php?prod_id=$res[prod_id]\">    View</a></td>";
                                              echo "<td><a href=\"update.php?prod_id=$res[prod_id]\">   update</a></td>";
                                              echo "<td><a href=\"product_delete.php?prod_id=$res[prod_id]\">   delete</a></td>";
                                              echo "</tr>"; 
                                            }
                                          }?>
                                </table><br><br><br><br>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
<br><br><br><b