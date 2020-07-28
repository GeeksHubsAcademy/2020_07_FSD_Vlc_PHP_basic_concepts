<?php
  echo("HOLA MUNDO");

?>





<?php

    /*comprobar versión de Php 

    php -v */


    //phpinfo();

    


  //   $nombre ='David';//las variables siempre llevan el dólar delante
  //   $apellido = 'Ochando';
  //   $email = "david@david.com";

  //   //Asignación por valor

  //   $bebida = "7UP";

  //   //Asignación por referencia

  //   $bebidaFavorita = &$bebida;

  //   echo($bebidaFavorita);

  //   //Primer tipo de comentario

  //   /*Segundo tipo de comentario
  //   que incluye varias líneas*/
    
  //   # Tercer tipo de comentario

  //   #Creamos un booleano

  //   $bool1 = False;

  //   echo $bool1;

  //   $decimal = 1234; // número decimal
  //   $negativo = -123; // un número negativo
  //   $octal = 0123; // número octal (equivale a 83 decimal)
  //   $hexadecimal = 0x1A; // número hexadecimal (equivale a 26 decimal)
  //   $binario = 0b11111111; // número binario (equivale al 255 decimal)

  //   $puntoFlotante = 1.25;
  //   //No sería correcto declararlo como 1,25 la forma correcta está en la línea de arriba;

  //   $cadena = "Ponte la mascarilla, se buen ciudadano";

  //   echo($cadena);
  //   //echo "Hola, $nombre <br/>";//concatenamos con comillas dobles
  //   //echo "Hola ". $nombre." ".$apellido;

  //   //echo "Hola, $nombre $apellido $email";

  //    $a=7;
  //    $b=3;
  //    $resMult = $a*$b;

  //    echo '<br/>';
  //    echo '<br/>';
  //    echo '<br/>';
  //    echo $a*$b;
  //    echo "<div>".$resMult."</div>";
  //    echo '<br/>';
  //    echo '<br/>';
     

  //    //MÁS FORMAS DE CONCATENAR

  //   $saludo ="Hola";
  //   $saludo.=" Mundo";
  //   echo($saludo);

  //   for($i = 1; $i < 5; $i++){
  //     $saludo.= "<br>";
  //     $saludo.= " Feliz";
  //   }

  //   $saludo = $saludo." Amoroso";
  //   echo $saludo;

  //   // $b=$b."Mundo ";
    
  //   $alumno = "Kiko";
  //   var_dump ($alumno);

  //   //Usamos var_dump para comprobar de forma condicional
  //   //Nos devuelve Bool(False) porque se toma la condicion como un booleano
  //   //que puede ser true o false;
  //   var_dump("2" === 2);


  //   echo('<br>');
  //   echo gettype("2" === 2);
  //   echo('<br>');

  //   //gettype() sería el equivalente a typeof() de JavaScript
  //   echo gettype($saludo);

  //   echo 'Esto es una cadena sencilla';

  //   echo 'También se pueden incluir nuevas líneas en
  //   un string de esta forma, ya que es
  //   correcto hacerlo así
  //   porque no
  //   pasaria
  //   nada';
  //   echo('<br>');
  // // Resultado: Arnold una vez dijo: "I'll be back"
  // echo 'Arnold una vez dijo: "I\'ll be back"';


  // // $malasPracticas = 1 + "10 pequeños cerdos";

  // // echo($malasPracticas);


  // //ARRAYS

  // $arrayPrueba = array("Christian,Adrián,Jose Miguel","Oscar,Kiko,Jessica");

  // var_dump($arrayPrueba);

  // var_dump($arrayPrueba[0]);

  // $arr=[1,2,3];

  
  // //var_dump($arr);

  // $array2=['nombre'=>'Pedro','apellido'=>'Rodríguez','edad'=>13];// array asociativa
  // echo('<br>');
  // //echo($array2['apellido']);
  // echo('<br>');
  
  // //print_r('hola estoy pintando en pantalla');

  // $array3=['nombre'=>'Pablo','email'=>'pedro@pedro.com','phone'=>987645321];

  // $nuevoArray=[$array2,$array3];

  // echo($nuevoArray[0]['nombre']);

  // // var_dump($nuevoArray);


  // // $arrayKiko = ['nombre'=>'Kiko','apellido'=>'Esteve','edad'=>38];

  // // $arrayDavid = ['nombre'=>'David','apellido'=>'Ochando','edad'=>34];

  // // //               index= 0 , index= 1
  // // $arrayAmigos = [$arrayKiko,$arrayDavid];
  // // //Indexar y concatenar ambos arrays..... 

  // // echo($arrayAmigos[1]['edad']);


  // $arrayX = [1 => 10, 2 => 4, 50=>19];

  // $arrayX["matricula"] = 12345679;

  // unset($arrayX[50]);

  // //unset general borraría todo el contenido del array 
  // unset($arrayX);

  // var_dump($arrayX);

    //foreach en un asociativo 

    $asociativo = [10=>123,20=>234, 30=>345, 'cualidad'=>'tonto',40=>456];
   

    foreach($asociativo as &$value){
      //$value = $value * 5;
      if($value == 'tonto'){
        echo("TE PILLE");
        return;
      }else{
        echo("SALES GANANDO <br>");
      }
    }
    
    var_dump($asociativo);

  

?>



