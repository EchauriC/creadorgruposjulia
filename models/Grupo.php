<?php

namespace models;

class Grupo {

    private $con;

    public function __construct() {
        $this->con = mysqli_connect("localhost","root","","creador_grupos");

        // Check connection
        if (mysqli_connect_errno())
        {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }
    }
  
    public function buscar($cantSolicitada, $especialidad){

        //creamos un array vacio 
        $especialistas = $this->con->query("SELECT * FROM persona WHERE id_especialidad = (SELECT id_especialidad FROM especialidad WHERE nombre = $especialidad);");

        if ($especialistas !== false) {
            //SI HEMOS OBTENIDO RESULTADOS
            //si hay gente suficiente entre tus especialistas , reordenamos el array y sacamos tantos como hemos pedido
            //Si no hay suficientes, lo indicamos y mostramos los disponibles.
            $cantEspecialistas = count($especialistas);
            if($cantEspecialistas > $cantSolicitada){
            
                echo "Estas son las personas escogidas de entre las {$cantEspecialistas} disponibles.";
                shuffle($especialistas);

                $contador = 1;

                foreach($especialistas as $persona){

                    if($contador<=$cantSolicitada){
                        echo $persona['nombre'].'<br>';
                    }

                    $contador++; 
                }

            //Si no hay gente suficiente sale este mensaje
            }
            elseif($cantEspecialistas == $cantSolicitada){
                echo 'Este proyecto requerirá la participacion de todos los espcialistas de la rama escogída.';
            }
            else{
                echo 'No hay gente suficiente para formar este grupo.';
            }


        } else {
            //SI LA BASE DE DATOS NO HA DEVUELTO RESULTADOS
            echo 'No hay personas con la especialidad indicada.';
        }
        


    }




//fin de la calse
}