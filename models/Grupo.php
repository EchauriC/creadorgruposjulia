<?php

class Grupo {
  
public function buscar(){

    $gente=[
        ["Jorge","HTML5/CSS3"],
        ["Julia", "Javascript"],
        ["Jose", "PHP"],
        ["Mateo", "Json/XML"],
        ["Jaume","Python"],
        ["Christian", "Java"],
        ["Adrian", "Sass/Less"],
        ["Lolo", "Laravel"],
        ["Fran", "PHP"],
        ["Alejandro", "PHP"],
        ["Petro", "Laravel"],
        ["Toni","Laravel"],
        ["Jordi", "Java"],
        ["Alexis", "Java"],
        ["David", "Sass/Less"],
        ["Luis", "Javascript"]
        
        ];

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
        echo 'Tu equipo se compone de: '.'<br>';
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