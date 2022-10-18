<html lang="pl">
<head>
    <title>jajo</title>
    <link rel="stylesheet" href="form.css"
</head>
<label>
<fieldset>
    <legend> Formularz prosty </legend>
    <form action="/form action.php" method="get">

        <label for="login">login:</label>
        <input type="text" id="login" name="login"><br><br>

        <label for="haslo">haslo:</label>
        <input type="password" id="haslo" name="haslo"><br><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="data">data urodzenia:</label>
        <input type="date" id="data" name="data"><br><br>

        <input type="submit" value="wyslij">

    </form>
</fieldset>
<label>
<label>
    <legend>Formularz do ogarniecia</legend>
    <label for="Wybierz samochod">Wybierz samochod:</label>
    <select name="Wybierz samochod" id="Wybierz samochod">
            <option value="Fiat">Fiat</option>
            <option value="Ford">Ford</option>
            <option value="Mercedes">Mercedes</option>
            <option value="BMW">BMW</option>
    </select><br><br>
    <label for="Rok i miesiac produkcji">Rok i miesiac produkcji:</label>
    <input type="date"><br><br>
    <input type="radio" id="Sedan" name="Sedan">
    <label for="Sedan"Sedan</label><br>
    <input type="radio" id="Kombi" name="Kombi">
    <label for="Kombi"Kombi</label><br>
    <input type="radio" id="Suv" name="Suv">
    <label for="Suv"Suv</label>
</fieldset>
</body>
</html>