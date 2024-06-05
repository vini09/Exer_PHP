<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $registros = array(
            array('Titulo' => 'Titulo noticia 1', 'conteudo' => 'conteudo noticia 1'),
            array('Titulo' => 'Titulo noticia 2', 'conteudo' => 'conteudo noticia 2'),
            array('Titulo' => 'Titulo noticia 3', 'conteudo' => 'conteudo noticia 3'),
            array('Titulo' => 'Titulo noticia 4', 'conteudo' => 'conteudo noticia 4'),

        );  
        /*
        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br /><br /><br />';
        */
        $idx = 0;
        echo ' O array possui: ' . count($registros) . ' registros';
        echo '<br />';
        /*
        while($idx < count($registros)) {

          echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>';
          echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;

          echo '<hr/>';

            $idx++;
        }
        */

        /*
        do {
            echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;

            echo '<hr/>';
  
              $idx++;
        } while ($idx < count($registros));
        */

        for ($idx = 0; $idx < count($registros); $idx++) { 
            echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '</p>' ;

            echo '<hr/>';
        }
    ?>

</body>
</html>