<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tabliczka mnozenia</title>
</head>
<body>
<a href="index.php">Strona główna</a>
<br>

<caption style="text-align: center"> Tabliczka mnozenia</caption>
<table border="1">
    <tr>
        <th style="background-color: burlywood">&times;</th> <th style="background-color: burlywood">1</th>	<th style="background-color: burlywood">2</th> <th style="background-color: burlywood">3</th> <th style="background-color: burlywood">4</th> <th style="background-color: burlywood">5</th> <th style="background-color: burlywood">6</th> <th style="background-color: burlywood">7</th> <th style="background-color: burlywood">8</th> <th style="background-color: burlywood">9</th> <th style="background-color: burlywood">10</th>
    </tr>

    <?php
    for ($height = 1; $height <= 10; $height++) {
        echo "<tr>\n";

        for ($width = 1; $width <= 10; $width++) {
            echo "<td style='background-color: beige'>";
            echo $width * $height;
            echo "</td>\n";
        }

        echo "</tr>\n";
    }
    ?>

</table>

