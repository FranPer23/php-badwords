<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
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



    <h2>Ciao! Questo è il paragrafo: <?php var_dump($paragraph); ?></h2>
    <h2>Questo è il paragrafo censurato: <?php $paragraph_replace = str_replace($word, '***', $paragraph);
                                            var_dump($paragraph_replace); ?></h2>



</body>

</html>