<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>il testo scritto è: '<?php echo $_GET['testo']?>' con lunghezza di <?php echo strlen($_GET['testo'])?> caratteri</p>
    <p>Però...ehhm '<?php echo $_GET['taboo']?>' non si può scrivere, '<?php echo $_GET['taboo']?>' sarà sostituito con ***  : '<?php echo str_ireplace($_GET['taboo'], "***", $_GET['testo'])?>' ed è lungo <?php echo strlen(str_ireplace($_GET['taboo'], "***", $_GET['testo']))?> caratteri</p>
</body>
</html>