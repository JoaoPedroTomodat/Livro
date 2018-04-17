<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<pre>
    <?php
        require_once 'Pessoa.php';
        require_once 'Aluno.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Aluno();
        $p2 = new Professor();
        $p3 = new Funcionario();

        $p1->setNome("João");
        $p1->setIdade(17);
        $p1->setSexo("M");
        $p1->setMatr(true);
        $p1->setCurso("Informática");
        $p1->cancelarMatr();

        $p2->setNome("Leonel");
        $p2->setIdade(45);
        $p2->setSexo("M");
        $p2->setEspecialidade("História");
        $p2->setSalario(5.000);
        $p2->receberAum(100);

        $p3->setNome("Eliane");
        $p3->setIdade("50");
        $p3->setSexo("F");
        $p3->setSetor("Programação");
        $p3->setTrabalhando(true);
        $p3->mudarTrabalho("Youtuber");


        print_r($p1);
        print_r($p2);
        print_r($p3);        
    ?>
</pre>
</body>
</html>