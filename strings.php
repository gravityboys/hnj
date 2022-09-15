<!doctype html>
<html lang="pl">
<head>
    <title>variables</title>
</head>
<body>
<a href="index.php">Strona główna</a>
<?php define("DOBRA_RADA", 'Bez chleba, to sie nie najesz.');
?>
<br>
<?php print (DOBRA_RADA)
    ?>
<br>
<?php print strlen(DOBRA_RADA)
    ?>
<br>
<?php print str_word_count(DOBRA_RADA)
    ?>
<br>
<?php print strrev(DOBRA_RADA)
    ?>
<br>
<?php print strpos(DOBRA_RADA,"to")
    ?>
<br>
<?php print str_replace("chleba","miesa",DOBRA_RADA)
    ?>
<br>
<?php print strtolower(DOBRA_RADA)
    ?>
<br>
<?php print strtoupper(DOBRA_RADA)
    ?>
<br>
<?php print ucwords(DOBRA_RADA)
    ?>
<br>
<?php print trim(DOBRA_RADA,)
    ?>
<br>
<?php print strstr(DOBRA_RADA,"nie")
    ?>
<br>
<?php print substr(DOBRA_RADA,"10","5")
    ?>
<br>
<?php print str_pad(DOBRA_RADA,36,"-_-",STR_PAD_BOTH)
    ?>

