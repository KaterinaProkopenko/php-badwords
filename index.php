<?php 
    $text = 'When you define a sequence of characters in the charlist argument make sure that you know what characters come between the characters that you set as the start and end of the range.';
    $search = $_GET['word'];
    $changedText = str_replace($search, "***", $text);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <h1>Testo e lunghezza</h1>
        <p>
            <?php
                echo $text;
            ?>
        </p>
        <p>
            La lungezza del paragrafo: <?php echo strlen($text); ?>
        </p>
    </section>
    <section>
        <h1>Censura</h1>
        <p>
            <?php
                echo $changedText;
            ?>
        </p>
        <p>
            La lungezza del paragrafo: <?php echo strlen($changedText); ?>
        </p>
    </section>

</body>
</html>