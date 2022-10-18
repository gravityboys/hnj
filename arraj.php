<!doctype html>
<html lang="pl">
<head>
    <title></title>
</head>
<body>
<a href="index.php">Strona glowna</a>
<link rel="stylesheet" href="css.css">
<br>
<pre>
<?php
$a = array(0 => 'Tworzenie', 'stron', 'aplikacji', 'internetowych');
print_r($a);
list ($n1, $n2, $n3, $n4) = $a;
echo "$n1 $n2 i $n3 $n4."
?>
</pre>
<hr>
<hr>
<br>
<table>
    <?php
    $b = range(0, 10);
    shuffle($b);
    foreach ($b as $c) {
        echo "<td>" . "$c" . "</td>";
    }
    ?>
</table>
<hr>
<hr>
<br>
<?php
$numbers = array(rand(0, 99), rand(0, 99), rand(0, 00), rand(0, 99), rand(0, 99));
rsort($numbers);
print_r($numbers);
?>
<hr>
<hr>
<br>
</pre>
<pre>

<?php
$d = array("Skazani na Shawskank" => "dramat", "Nietykalni" => "biograficzny", "Wladca Pierscieni: Powrot krola" => "fantasy", "Pulp Fiction" => "gangsterski", "Siedem" => "kryminal", "Podziemny krag" => "thriller", "Django" => "western", "Krol Lew" => "animacja", "Avengers: Wojna bez granic" => "akcja", "Dobry, zly i brzydki" => "western");


?>
     <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px dotted black;
            padding: 3px;
        }
        </style>
    <table>
        <caption> Sortowanie rosnaco wedlug wartosci </caption>
        <tr>
            <th>Klucz</th>
            <th>Wartosc</th>
        </tr>
        <?php
        asort($d);
        foreach ($d as $key => $value) {
            echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
        }
        ?>
</body>

