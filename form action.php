<!doctype html>
<html lang="en">
<head>
    <title>formulasz</title>
</head>
<body>
<fieldset>
    <legend> Elementy tablicy GET</legend>
    <ul>
        <?php
        foreach ($_GET as $key=>$value){
            echo '<li>'.$key = $value. '</li>';
        }
        ?>
    </ul>
</fieldset>

<fieldset>
    <legend> Elementy tablicy POST</legend>
    <ul>
        <?php
        foreach ($_POST as $key=>$value){
            echo '<li>'.$key = $value. '</li>';
        }
        ?>
    </ul>
</fieldset>

</body>
</html>