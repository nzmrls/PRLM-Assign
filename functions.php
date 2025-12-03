<?php
declare(strict_types=1); //1

$enzosWebDesignServices = [ //2
    "Static Webpage" => ["price" => 5000, "stock" => 12],
    "Dynamic Webpage" => ["price" => 10000, "stock" => 26],
    "E-Commerce Development" => ["price" => 15000, "stock" => 8],
    "Website Maintenance" => ["price" => 3000, "stock" => 6],
    "Template Based" => ["price" => 4500, "stock" => 15],
    "Logo Design" => ["price" => 2500, "stock" => 20]
];

$taxRate = 12; //3

function get_reorder_message(int $stock): string { //4 and 5
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float { //6 and 7
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $rate = 0): float { //8 and 9
    $total = $price * $qty;
    return $total * ($rate / 100);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <title>Enzo's Web Design Services</title>
    <?php include 'includes/header.php'; ?>
</head>
<body>
<h1>Enzo's Web Design Services</h1>
<h2>Stock Control</h2>
<table class="stock-table">
    <tr>
        <th>PRODUCT</th>
        <th>STOCK</th>
        <th>RE-ORDER</th>
        <th>TOTAL VALUE</th>
        <th>TAX DUE</th>
    </tr>
    <?php
    foreach ($enzosWebDesignServices as $serviceType => $data) { //10
        $price = $data["price"];
        $stock = $data["stock"];
    ?>
        <tr> 
            <td><?php echo $serviceType; ?></td>
            <td><?php echo $stock; ?></td>
            <td><?php echo get_reorder_message($stock); ?></td>
            <td>PHP<?php echo get_total_value($price, $stock); ?></td>
            <td>PHP<?php echo get_tax_due($price, $stock, $taxRate); ?></td>
        </tr>
    <?php } ?>
</table>
<?php include 'includes/footer.php'; ?>
</body>
</html>
