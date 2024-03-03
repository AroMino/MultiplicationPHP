<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication</title>
</head>
<body>
    <?php
        $index = $_GET["index"];
        $table = explode(',',$_GET["table"]);
    ?>
    <h1>Edit line <?php echo $table[$index*2]." x ".$table[$index*2 + 1]; ?></h1>
    <form action="modify.php" method="get">
        <label for="factor">Factor :</label>
        <input type="number" name="factor" required>
        <label for="multiplicator">Multiplicator :</label>
        <input type="number" name="multiplicator" required>
        <input type="hidden" name="table" value="<?php echo implode(',',$table); ?>">
        <input type="hidden" name="index" value="<?php echo $index; ?>">
        <button type="submit">Modify</button>
    </form>
    
</body>
</html>