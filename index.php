<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Form censura parole</title>
</head>
<body>
  <form action="process.php" method="get">
    <label for="paragrafo">Paragrafo:</label>
    <textarea name="paragrafo" id="paragrafo" rows="10" cols="50"></textarea>
    <br>
    <label for="parola">Parola da censurare:</label>
    <input type="text" name="parola" id="parola">
    <br>
    <input type="submit" value="Invia">
  </form>
</body>
</html>
