<?php  
include __DIR__. "/data.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>e-commerce</title>
</head>
<body>
    <h1>Prodotti in vendita</h1>
    <pre>
        <?php 
    var_dump($prodotti);
    ?>
    </pre>

</body>
</html>