<<!DOCTYPE HTML>
<html lang = "pt-br">
<head>
   <title>Calculadora simples</title>
   <meta charset = "UTF-8">
</head>
<body>
     <form action="" method="post">
        Primeiro Numero: <input name="num1" type="text"><br>
        Segundo numero: <input name="num2" type="text"><br>
        <br> <br> <ber>
        <input type="submit" name="operacao" value="Soma">     
        <input type="submit" name="operacao" value="Subtração">     
        <input type="submit" name="operacao" value="Multiplicação">     
        <input type="submit" name="operacao" value="Divisão">     
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;

    echo "O resultado da operação é: $c";
   }
?>       
</body>
</html>