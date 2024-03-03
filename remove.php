<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Multiplication</title>
</head>
<body>
    

    <form action="multi.php" method="get">
        <label for="multiplicator">Multiplicator :</label>
        <input type="number" name="multiplicator" required>
        <label for="number">Number :</label>
        <input type="number" name="number" required>
        <button type="submit">Generate</button>
    </form>

    <table>

    <?php
        $index = $_GET["index"];
        $table = explode(',',$_GET["table"]);

        /// Suppression de l'élément à la index-ème ligne du tableau contenant la table
        unset($table[$index*2]);
        unset($table[$index*2 + 1]);

        /// Réarrange le tableau en le transformant en string puis en le retransformant en tableau
        $table = explode(',',implode(',',$table));
        
        /// Afficher le tableau
        for($i = 0 ; $i < (int)(count($table)/2) ; $i++)
        {
    ?>
            <tr class=<?php if($i%2 == 0) echo "even"; else echo "odd"; ?> style=<?php echo "--delay:".$i*0.1."s"; ?>>
                <td><?php echo $table[$i*2]; ?></td>
                <td><?php echo $table[$i*2 + 1]; ?></td>
                <td><?php echo $table[$i*2]*$table[$i*2 + 1]; ?></td>
                <td><a href="modify_form.php?<?php echo 'index='.$i.'&table='.implode(',',$table); ?>">Modifiy</a></td>
                <td><a href="remove.php?<?php echo 'index='.$i.'&table='.implode(',',$table); ?>">Remove</a></td>
            </tr>
    <?php
        }
    ?>
    </table>

</body>



</html>