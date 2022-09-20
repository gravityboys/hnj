<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tabliczka mnozenia</title>
</head>
<body>
<a href="index.php">Strona główna</a>
<table border=1>

    <?php
    for($i=1;$i<=10;$i++){
        echo '<tr>';
        for($j=1;$j<=10;$j++){
            echo '<td style="background-color:'.(($j%2==0)?'green':'yellow').'" >'.($i*$j).'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>