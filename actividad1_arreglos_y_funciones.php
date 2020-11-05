<html>
   <body>
   <h3>=========== PROMEDIOS DE ALUMNOS ==========</h3>
   <!-- Con base en el ejericio hecho en clase donde se utilizaron vectores asociativos en PHP, realizar lo siguiente:
    
        1. Crear un vector estatico con 10 alumnos y 6 calificaciones para cada alumno (una por materia)
     
        2. Obtener los siguientes promedios: General del grupo, por alumno, por materia, 
           Mejor promedio por alumno y cuantos alumnos tienen promedio por encima del promedio general del grupo. 
        
        3. Mostrar un listado con los alumnos, sus calificaciones y sus promedios.
    
        4. Utilizar funciones para realizar dichos calculos.-->

        <?php

          //Vector bidimensional estatico asociativo
           $vector_alumnos_calificaciones= array(
               "Daniela Castillo" => array(80,71,90,78,51,90),
               "Luis Acevedo " => array(100,100,51,78,96,47),
               "Pedro Lopez" => array(78,69,42,48,91,100),
               "Ana Martinez" => array(78,51,67,42,87,96),
               "Antonio de la Cruz" => array(46,47,86,91,53,78),
               "Mariana Bermudez" => array(100,48,79,21,100,100),
               "Enrique Lara" => array(63,42,85,91,45,60),
               "Sofia Espinoza" => array(87,62,45,60,100,100),
               "Martin Sanchez" => array(78,51,100,36,45,87),
               "Ismael Fuentes" => array(40,63,97,82,74,67)
            );

            //Funcion ista de calificaciones
            function imprimir_calificaciones($vector){
                echo "<hr>  ############# Lista de calificaciones #############";
                foreach ($vector as $key => $value) {
                     echo "<br> Alumno(a) ".$key." :"."<br>";
                     $cont=1;
                     foreach ($value as $c) {
                         echo "<br> Calificacion materia ".$cont.": ".$c;
                         $cont=$cont+1;
                        }
                    echo "<br> ********************************";
                }
            }
            

            //Funcion para el promedio general del grupo
            
            //Funcion para el promedio por alumnos
            function promedio_por_alumno($vector){
                $promedios_alumnos=array();
                foreach ($vector as $key => $value) {
                     $promedio=0;
                     foreach ($value as $c) {
                         $promedio=$promedio+$c;
                        }
                        $promedio=$promedio/6;
                        $alumno=array($key=>$promedio);
                        array_push($promedios_alumnos,$alumno);
                }
                return $promedios_alumnos;
            }

            //Funcion imprimir promedios
            function imprimir_promedios($vector){
                echo "<hr>  ############# Lista de promedios #############";
                foreach ($vector as $key => $value) {
                     foreach ($value as $c => $n) {
                         echo "<br> Alumno(a): ".$c." -->Promedio: ".$n;
                        }
                    echo "<br> ********************************";
                }
            }

            //Funcion para el promedio por materia

            //Funcion para el mejor promedio

            //Funcion para saber cuantos alumnos son mayores al promedio general

            //Mostrar lista con calificaciones y promedios

            //------------Mostrando resultados -----------
            imprimir_calificaciones($vector_alumnos_calificaciones);
            imprimir_promedios(promedio_por_alumno($vector_alumnos_calificaciones));


        ?>
</body>
</html>