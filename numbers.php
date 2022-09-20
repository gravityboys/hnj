<!doctype html>
<html lang="pl">
<head>
    <title>variables</title>
</head>
<body>
<a href="index.php">Strona główna</a>
<?php $Integer1 =10
?>
<?php $Integer2 =15
    ?>
<?php $Float1 =0.5
    ?>
<?php $Float2 =2.7
    ?>
<?php echo($Integer1).var_dump(is_int($Integer1))
    ?>
<br>
<?php echo($Integer2).var_dump(is_int($Integer2))
    ?>
<br>
<?php echo($Float1).var_dump(is_int($Float1))
    ?>
<br>
<?php echo($Float2).var_dump(is_int($Float2))
    ?>
<br>
<hr>
<?php echo($Integer1).var_dump(is_float($Integer1))
    ?>
<br>
<?php echo($Integer2).var_dump(is_float($Integer2))
    ?>
<br>
<?php echo($Float1).var_dump(is_float($Float1))
    ?>
<br>
<?php echo($Float2).var_dump(is_float($Float2))
    ?>
<br>
<?php $marcin ="59.85"+100
    ?>
<?php var_dump(is_numeric($marcin))
    ?>
<?php echo PHP_INT_MAX ?><br>
<?php echo PHP_INT_MIN ?><br>
<?php echo PHP_INT_SIZE ?><br>
<?php echo PHP_FLOAT_MAX ?><br>
<?php echo PHP_FLOAT_MIN ?><br>
<?php echo PHP_FLOAT_DIG ?><br>
<?php echo PHP_FLOAT_EPSILON ?><br>