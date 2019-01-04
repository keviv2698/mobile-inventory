<html>

<head>
<title>print</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="style3.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
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
}>
</style>

</head>
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
</style><body>


<ul>
  <li><a class="active" href="home.php">Home</a></li>
 
  <li><a href="stock.php">enter stock</a></li>
  <li><a href="dis.php">display stock</a></li>
  <li><a href="display.php">print stock</a></li>
  <li><a href="login.php">logout</a></li>
</ul>



<div class="content">
<?php
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>name</th><th>category</th><th>number of stock</th><th>price</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT name, category, number_of_stock,prod_price FROM stock"); 
    $stmt->execute();

   
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 
<form>		<button type="button" class="btn btn-warning btn-round" onclick = "window.print()"><span class="now-ui-icons ui-1_check"></span> Print</button> 
</form>
</div>

</body>
</html>