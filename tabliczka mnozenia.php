<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Tabliczka mnozenia</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<a href="index.php">Strona główna</a>
<br>

<table>
    <caption>Tabliczka mnozenia</caption>
    <tr>
        <th>&times;</th>
        <?php
        for ($col =1; $col <=10; $col++) {
            echo '<th>' . $col . '</th>';
        }
        ?>
    </tr>
    <?php
    for ($row =1; $row <= 10; $row++) {
        echo '<tr><th>' . $row . '</th>';
        for ($col =1; $col <= 10; $col++) {
                if ($row == $col) {
                    echo '<td style="background-color: bisque;">' . $col * $row . '</td>';
                } else {
                    echo '<td>' . $col * $row . '</td>';
                }
        }
        echo "</tr>\n";
    }
    ?>
</table>
