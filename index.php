<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
      $name = "PHP Store";
      $credit = 1000; 

      echo "<h1>Welcome to ".$name."!</h1>";
      echo "<h2>You have $".$credit." in your wallet.</h2>";

	    $products['Computer']=200;
	    $products['Car']=700;
	    $products['brödrost']=100;
	    $products['dildo']=90;

	    foreach($products as $key => $value){
	    echo "<p>The ".$key." costs ".$value."</p>";
    }
    
    ?>
  </body>
</html>