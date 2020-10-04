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
  $webhost = $_SERVER['HOSTNAME'];
  print "This is the webhostname $webhost";
 ?>
 </body>
</html>
