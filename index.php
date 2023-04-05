
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>PHP BadWords</title>
</head>
<body>
    <form action="badword.php" method="GET">
        <div>
        <label for="badword">Parola sa sostituire</label>
        <input type="text" name='badword' id='badword'>
        </div>
        <div>
        <label for="text-start">Inserisci testo</label>
        <input type="text-area" name='text-start' id='text-start'>
        <button type="submit">Invio</button>
        </div>
    </form>
</body>
</html>