<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>
            Mi primera pagina con php
        </title>
    </head>
    <body>
        <h1>Hola mundo !</h1>
        <form name="form1" method="POST" action="index.php">

            Numero 1: <input type="text" name="txtnumero1">
            <br>
            Numero 2: <input type="text" name="txtnumero2">
            <br>

            <input type="submit" name="calcular" value="calcular">



        </form>




         
        <?php

        if(isset($_POST["calcular"])){

            $valor1 = $_POST["txtnumero1"];
            $valor2 = $_POST["txtnumero2"];

            if($valor1=="" || $valor2==""){

                echo "debes ingresar los valores";

                exit;
            }

            
            echo $valor1. "<br>";
            echo $valor2. "<br>";
            echo "<br><br><br>";



            echo "Hola esto es php";
            $numero1=$valor1;
            $numero2=$valor2;
    
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            $multiplicacion = $numero1 * $numero2;
            $division = $numero1 / $numero2;
            $residuo = $numero1 % $numero2;
    
            echo "<br><br>La suma de ".$numero1. "+". $numero2."=".$suma;
            echo "<br><br>La resta de ".$numero1. "-". $numero2."=".$resta;
            echo "<br><br>La multiplicacion de ".$numero1. "*". $numero2."=".$multiplicacion;
            echo "<br><br>La division de ".$numero1. "/". $numero2."=".$division;
            echo "<br><br>El residuo de ".$numero1. "%". $numero2."=".$residuo;
    
            if($numero1 > $numero2 && $numero1 > 0 ){
                echo "<br>La condicion es verdadera";
            }else{
                echo "<br>La condicion es falsa ";
            }
       
            if ($suma > $resta || $suma > $multiplicacion){
                echo "<br>Todavia sigo siendo verdadera";
            }else{
                echo "<br>Todavia sigo siendo verdaderaYa soy falsa";
            }
            $numero3=7;
            echo "<br>";
    
            if ($numero1>$numero2 && $numero1 > $numero3){
                echo "El mayor es ".$numero1;
    
            }elseif ($numero1>$numero2 && $numero1 > $numero3){
                echo "El mayor es ".$numero2;
    
            }else{
                echo "El mayor es ".$numero3;}
            
                echo "<br>";
    
                if (!(($numero3 % 2)==0)){
                    echo "El numero  ".$numero3."es par";
    
                }else{
                    echo "El numero  ".$numero3." es impar";
                }
                echo "<br>";
                
                $colorSemaforo ="VERDE ";
    
                switch(strtolower (trim($colorSemaforo))){
                    case "verde";
                    echo "avanzar";
                    break;
    
                    case "amarillo";
                    echo "por favor detenerse";
                    break;
    
                    case "rojo";
                    echo " no avanzar";
                    break;
    
                    default;
                    
                    echo "valor incorrecto";
                    break;
    
    
    
    
    
                }
                echo "<br>";
    
                $i=1;
                while($i<=5){
                    echo $i. "<br>";
                    $i++;
    
                }
                echo "<br>";
                $i=1;
                do{
                    echo $i. "<br>";
                    $i++;
    
                }while($i<=5);
    
                echo "<br>";
                $i=1;
                $y=5;
               
                while($i<=10){ $multi = $y * $i;
                    echo "<br><br>La multiplicacion de ".$y. "*". $i."=".$multi;
                    $i++;
                    
    
                }
    
    
    
    
    
        $array = array(1,2,3,4,5,6,7,8,9,10);
    
        $longitud=count($array);
        $y=5;
    
        echo "<br>";
    
        for ($i=1; $i<=$longitud; $i++){$multi = $i * $y;
            echo $y."x".$i."=".($y*$i)."<br>";
            echo "<br>";
    
    
        }
    
        echo "<br>";
    
        foreach($array as $valor){
    
            echo $valor . "<br>";
        }
        }



       

    





        ?>

    </body>
</html>