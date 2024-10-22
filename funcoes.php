<?php
    $num = 0;
    $num = 0;


    function somar($num1,$num2){
        return $num1 + $num2;
    }//fim do método


    function subtrair($num1, $num2){
        return $num1 - $num2;
    }//fim do método

    function multiplicar($num1, $num2){
        return $num1 * $num2;
    }//fim do método

    function dividir($num1, $num2){
        if($num2 >0){
            return $num1 / $num2;
        }else{
            return "Impossivel dividir por zero!";
        }
    }//fim do método

    function mostrarNumeros($num1,$num2){
        $resultado ="";
        for($i=$num1; $i <= $num2; $i++){
            $resultado .= "\n".$i; 
        }//fim do for 
        return $resultado;
    }//fim do método

    function numeroPositivo($num1)
    {
        if($num1 < 0){
            return "É Negativo";
        }else if($num1 > 0){
            return $num1." É Positivo";
        }else{
            return " Zero";
        }
    }//fim do método

    function tabuada($num1)
    {  
        $resultado = "";
        for($i= 0; $i <= 10; $i++){
            $resultado .= "\n".$num1." * ".$i." = ".($num1*$i);
        }
        return $resultado;
    }//fim do método







    






?>