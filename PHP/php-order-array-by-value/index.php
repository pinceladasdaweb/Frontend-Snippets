<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP Order Array by value</title>
    </head>
    <body>
        <?php

        $dados = array (
            array ('id'=>1, 'label' => 'Administracao' ),
            array ('id'=>3, 'label' => 'Zootecnia' ),
            array ('id'=>4, 'label' => 'Direito' ),
            array ('id'=>5, 'label' => 'Biologia' ),
            array ('id'=>6, 'label' => 'Arquitetura' ),
            array ('id'=>7, 'label' => 'Biologia' )
        );

        function build_sorter($key) {
            return function ($a, $b) use ($key) {
                return strnatcmp($a[$key], $b[$key]);
            };
        }
        usort($dados, build_sorter('label'));
        echo "<pre>";
        var_dump($dados)

        ?>
    </body>
</html>