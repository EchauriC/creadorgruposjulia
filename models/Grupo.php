<?php
class Grupo {
  
public function buscar(){

    //en el include no salto atras en la carpeta porque la funcion se ejecuta en grupo.php
    require_once 'datos/datos.php';

    //traemos los valores del formulario
    $numero = $_POST['numero'];
    $especialidad = $_POST['especialidad'];

    //creamos un array vacio 
    $especialistas =[];

    foreach($gente as $valor){
        if ($especialidad == $valor[1]){
            array_push($especialistas, $valor[0]);
        } //llenamos el array con la gente que cumple la condicion
    }

    //si hay gente suficiente entre tus especialistas , reordenamos el array y sacamos tantos como hemos pedido
    if(count($especialistas)>=$numero){
       
        shuffle($especialistas);

        $contador =1;

        foreach($especialistas as $lista){

            if($contador<=$numero){
                echo $lista.'<br>';
            }

            $contador= $contador +1; 
        }

    //Si no hay gente suficiente sale este mensaje
    }else{
        echo 'No hay gente suficiente para formar este grupo';
    }

}




//fin de la calse
}