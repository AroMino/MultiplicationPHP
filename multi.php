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
        $multiplicator = $_GET["multiplicator"];
        $number = $_GET["number"];
        $table = array();

        /// Génération du tableau contenant la table pour l'envoyer à remove.php ou modify.php
        for($i = 0 ; $i <= $number ; $i++)
        {   
            /// On ajoute deux éléments à la fois
            /// L'indice paire contient le facteur et l'indice impaire contient le multiplicateur
            $table[] = $i;                 // Ajouter $i
            $table[] = $multiplicator;     // Puis ajouter le multiplicateur
        }

        /// Afficher la table en entier
        for($i = 0 ; $i <= $number ; $i++)
        {
    ?>
            <tr class=<?php if($i%2 == 0) echo "even"; else echo "odd"; ?> style=<?php echo "--delay:".$i*0.1."s"; ?>>
                <td><?php echo "$i"; ?></td>
                <td><?php echo "$multiplicator"; ?></td>
                <td><?php echo $i*$multiplicator; ?></td>
                
                <td><a href="modify_form.php?<?php echo 'index='.$i.'&table='.implode(',',$table); ?>">Modifiy</a></td>
                <td><a href="remove.php?<?php echo 'index='.$i.'&table='.implode(',',$table); ?>">Remove</a></td>
            </tr>
    <?php
        }
    ?>
    </table>

</body>



</html>