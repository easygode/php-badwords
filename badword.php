
<?php

//echo $_GET;
//var_dump($_GET);
// die;

$badword = $_GET['badword'];
$text = $_GET['text-start'];
$lenght_text = strlen($text);
$text_clean = str_ireplace($badword, '***', $text);
$lenght_text_clean = strlen($text_clean);

//echo $text_clean;
//die;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Badwords</h1>
    <p>Parola da sostituire: <?php echo $badword; ?></p>
    <p>Testo: <?php echo $text; ?> con <?php echo $lenght_text; ?> caratteri</p>
    <h2>Testo ripulito</h2>
    <p>Risultato: <?php echo $text_clean; ?></p>
    <p>Testo: <?php echo $text_clean; ?> con <?php echo $lenght_text_clean; ?> caratteri</p>
</body>
</html>