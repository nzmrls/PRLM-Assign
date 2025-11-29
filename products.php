<?php
    $items = ['Static Webpage', 'Dynamic Webpage', 'E-Commerce Development']; //sample of array, variable, and expressions

    switch ($items) { //switch case
     case 'Static Webpage';
          $price = '5000';
          break;
     case 'Dynamic Webpage':
          $price = '10000';
          break;
     default:
          $price = 'Not available.';
}

    if ($items == 'E-Commerce Development') { //if-else statement
        $price = 15000;
    } else {
        $price = 'Not available.';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <title>Enzo's Web Design Services</title>
        <?php include 'includes/header.php' //include header?>
    </head> 
<body>
    <h1>Enzo's Web Design Services</h1>
    <h2>Provides timeless creativity.</h2>
    <p><?php
        $commissioned = 1; 
        $max = 5;
        $price = '5000';
        while ($commissioned <= $max) { //while loop
        echo $commissioned;
        echo ' page(s) of Static Webpage costs PHP';
        echo $price * $commissioned; //sample of an operator
        echo '<br>';
        $commissioned++;
    }
        echo '<br>';

        $commissioned = 1;
        $max = 5;
        $price = '10000';
        do { //do while loop
        echo $commissioned;
        echo ' page(s) of Dynamic Webpage costs PHP';
        echo $price * $commissioned;
        echo '<br>';
        $commissioned++;
    } while ($commissioned <= $max);
        echo '<br>';

        $commissioned = 1;
        $max = 1;
        $price = '12500';
        echo $commissioned;
        echo ' E-Commerce Development costs PHP';
        echo $price;
    ?></p>
    <?php include 'includes/footer.php'; //include footer?>
</body>    
</html>