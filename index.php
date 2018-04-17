<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Livro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<pre>
    <?php
    require_once 'Pessoa.php';
    require_once 'Livro.php';

    $l[0] = new Pessoa ("João", "17", "Masculino");

    $p[0] = new Livro ("Assim falou Zaratustra", "Nietzsche", 300, $l[0]);


    $p[0]->folhear(30);
    $p[0]->avancarPag();
    $p[0]->detalhes();

    ?>
</pre>
</body>
</html>