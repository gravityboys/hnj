<html lang="pl">
<head>
    <title>gfhfasdas</title>
    <link rel="stylesheet" href="css.css"
</head>
<body>
<?php
$login = $email = $website = $city =$gender = '';
$loginError = $emailError = $websiteError = $cityError = $genderError = '';
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["login"])) {
        $loginError = "Login jest wymagany!";
    } else {
        $login = $_POST["login"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    if (empty($_POST["email"])) {
        $emailError ="Email jest wymagany!";
    } else {
        $email = $_POST["Email"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    if (empty($_POST["website"])) {
        $websiteError = "Strona jest wymagana!";
    } else {
        $website = $_POST["website"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    if (empty($_POST["city"])){
        $cityError = "Miasto jest wymagane!";
    } else {
        $city = $_POST["city"];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    if (empty($_POST["gender"])){
        $genderError = "Plec jest wymagana!";
    } else {
        $gender = $_POST["gender"];
    }
}


?>
<label>
<fieldset>
    <legend> Formularz z walidacja </legend>
    <form action="/form.php" method="post">

        <label for="login">Login: </label><span style="color: red">*<?= $loginError ?></span><br>
        <input type="text" id="login" name="login" value="<?= $login ?>"<br><br>

        <label for="email">Email: </label><span style="color: red">*<?= $emailError ?></span><br>
        <input type="email" id="email" name="email" value="<?= $email ?>"><br><br>

        <label for="Strona internetowa">Strona internetowa: </label><span style="color: red">*<<?= $websiteError ?>/span><br>
        <input type="text" id="Strona internetowa" name="Strona internetowa" value="<?= $website ?>"><br><br>
        <label for="Wybierz miasto/miasta">Wybierz miasto/miasta: </label><span style="color: red">*<?= $cityError ?></span><br>
        <select name="Wybierz miasto/miasta" id="Wybierz miasto/miasta" multiple value="<?= $city ?>">
            <option value="Warszawa">Warszawa</option>
            <option value="Poznan">Poznan</option>
            <option value="Gdansk">Gdansk</option>
            <option value="Szczecin">Szczecin</option>
            </select><br><br>
            <label>Wybierz jedna opcje: </label><span style="color: red">*<?= $genderError ?></span><br>
            <input type="checkbox" id="o1" name="o1[]" value="<?= $gender ?>">
            <label for="o1">Kobieta</label><br>
            <input type="checkbox" id="o2" name="o2[]" value="<?= $gender ?>">
            <label for="o2">Mezczyzna</label><br>
            <input type="checkbox" id="o3" name="o3[]" value="<?= $gender ?>">
            <label for="o3">Nie chce podawac</label><br><br>

            <input type="submit" value="Wyslij">

    </form>
</fieldset>
</label>
</body>
</html>
<pre>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    print_r($_POST);
}
?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST["LOGIN"])) {
            echo "Login:" . ($_POST["LOGIN"]);
        } else {
            echo "Brak loginu";
        }
    }
    ?>
<br>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST["EMAIL"])) {
        echo "Email:" . ($_POST["EMAIL"]);
    } else {
        echo "Brak emailu";
    }
}
?>
<br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST["strona"])) {
            echo "Strona internetowa:" . ($_POST["strona"]);
        } else {
            echo "Brak strony";
        }
    }
    ?>
<br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST["miasto"])) {
            echo "Wybierz miasto/miasta: ".implode(", ", $_POST["miasto"]);
        } else {
            echo "Brak miasta";
        }
    }
    ?>
<br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty($_POST["plec"])) {
            echo "Płeć:".implode(",",$_POST["plec"]);
        }
    }
    ?>


</pre>



</body>
</html>
