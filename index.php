<html>
 <head>
  <title>Octant Product Corporation</title>
 </head>
 <body>
 <h1>Octank Product Catalog</h1>
 <p/>
 <?php
  print "The Current Date and Time is: <br/>";
  print date("g:i A l, F j Y.");
 ?>
 </p>
 <?php
  $webport = $_SERVER['RDS_PORT'];
  $Database = $_SERVER['RDS_HOSTNAME'];
  $DBUser = $_SERVER['RDS_USERNAME'];
  $DBPassword = $_SERVER['RDS_PASSWORD'];
  print "This is the webhostname $webport";
  $dbconnection = mysql_connect($Database, $DBUser, $DBPassword) or die("Could not connect: " . mysql_error());  
   if($dbconnection){
      print "Connected to aurora successfully";
    } else {
      echo "Error creating table: " . mysql_error($dbconnection);
    }  
  $dbselected = mysql_select_db("OctankDB");
  $queryretrieve = "SELECT * FROM products";
      $result = mysql_query($queryretrieve, $dbconnection);
        echo $result;
        while($row = mysql_fetch_array($result)){
        echo $row['name'];
        echo $row['description'];
        }

 mysql_close($dbconnection);
 ?>
 </body>
</html>
