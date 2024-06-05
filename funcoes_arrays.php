<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
      /*
       
        is array - Verifica se o parâmetro é um array
       
        $array = array ('notebook', 'teclado');
        $retorno = is_array($array);

        if($retorno) {
            echo 'Sim, é um array';
        }else {
            echo 'Não, não é um array';
        }
      */ 
      
      /*
         
        array_keys - Retorna todas as chaves de um array

        $array = [1 => 'a', 7 => 'b', 18 => 'c'];  
        echo '<pre>';
        print_r($array);
        echo  '</pre>';

        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo  '</pre>';

     */
     
     /*

        sort - Ordena um array e reajusta seus indices

        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte tx', 'notebook');
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        sort($array);
        echo '<pre>';
        print_r($array);
        echo '</pre>';

     */

     /*

        asort - Ordena um array preservando os indices   

        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte tx', 'notebook');
        echo '<pre>';
        print_r($array);
        echo '</pre>';

        asort($array);
        echo '<pre>';
        print_r($array);
        echo '</pre>';

     */

     /*

        Count - conta a quantidade de elementos de um array

     $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte tx', 'notebook');
     echo '<pre>';
        print_r($array);
        echo count($array);
     echo '</pre>';

     */

     /*

        array_merge - Funde um ou mais arrays

     $array1 = ['osx', 'windows'];
     $array2 = ['linux'];
     $array3 = ['solaris'];

     $novo_array = array_merge($array1, $array2, $array3);
     echo '<pre>';
     print_r($novo_array);
     echo '</pre>';

     */

     /*

        explode - Divide uma string baseada em um delimitador

        $string = '26/04/2018';
        $array_retorno = explode('/', $string);
        echo '<pre>';
            echo $string;
            print_r($array_retorno);
            echo $array_retorno[2].'/'.$array_retorno[1].'/'.$array_retorno[0];
        echo '</pre>';

     */

        #implode - Junta os elementos de um array em uma string

        $array = ['a', 'b', 'x', 'y'];
        $string_retorno = implode(',', $array);
        echo $string_retorno;

    ?>

</body>
</html>