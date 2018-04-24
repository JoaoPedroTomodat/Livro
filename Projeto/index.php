<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<pre>
    <?php
        require_once 'Video.php';
        require_once 'Assinante.php';
        require_once 'Visualizacao.php';
        $v[0] = new Video("Aula 1 de POO");
        $v[1] = new Video("Aula 12 de PHP");
        $v[2] = new Video("Aula 10 de HTML");

        $a[0] = new Assinante("João", 17, "M", "joaoPedro");

        $vis[0] = new Visualizacao($a[0], $v[2]);
        $vis[0]->avaliarPorc(90);


        print_r($vis);
    ?>
</pre>
</body>
</html>