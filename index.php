<?php 
$nutrition = [
  'fat' => 16,
  'sugar' => 51,
  'salt' => 6.3,
];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Variables</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Nutrition (per 100)</h2>
    <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
    <p>sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>salt: <?php echo $nutrition['salt']; ?>%</p>
  </body>
</html>