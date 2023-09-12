<?php 
$nutrition = [
  'fat' => 38,
  'sugar' => 51,
  'salt' => 0.25

];
$nutrition['fat'] = 36;
$nutrition['fibre'] = 2.1;
$nutrition['protein'] = 7.3;
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100g) </h2>
    <p><?php echo $nutrition['fat']; ?></p>
    <p><?php echo $nutrition['sugar']; ?></p>
    <p><?php echo $nutrition['salt']; ?></p>
    <p><?php echo $nutrition['fibre']; ?></p>
    <p><?php echo $nutrition['protein']; ?></p>

  
     

  </body>
</html>