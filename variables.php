
<!doctype html>
<html lang="pl">
<head>
    <title>variables</title>
</head>
<body>
<a href="index.php">Strona główna</a>
<br>
<?php $ciagznakow = "elo";
?>
<?php $liczbacalkowita = 120;
?>
<?php $liczbazmiennoprzecinokwa = 5.23;
?>
<?php $boolean = false;
?>
<?php var_dump($ciagznakow, $liczbacalkowita, $liczbazmiennoprzecinokwa, $boolean)
?>
<br>
<BR>
<?php echo $ciagznakow
?>
<br><?php echo $liczbacalkowita
?>
<br>
<?php echo $liczbazmiennoprzecinokwa
?>
<br>
<?php echo $boolean
?>
<br>
<?php define("moj_numer", 3);
?>
<?php define("moj_wiek", 19);
?>
<br>
<?php print moj_numer;
?>
<br>
<?php print moj_wiek;
?>
<br>
<?php var_export(moj_numer);
?>
<br>
<?php var_export(moj_wiek);
?>
</body>


</html>