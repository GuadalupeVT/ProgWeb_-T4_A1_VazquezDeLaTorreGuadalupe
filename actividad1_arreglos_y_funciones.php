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

            //Funcion lista de calificaciones
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
            function promedio_general($vector){ 
                $promedio=0;
                foreach ($vector as $key => $value) {
                     foreach ($value as $c => $n) {
                         $promedio=$promedio+$n;
                        }
                }
                return ($promedio/10);
            }


            
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
                }
            }

            //Funcion para el promedio por materia
            function promedios_por_materia($vector){
                echo "<hr>  ############# Promedios por materia #############";
                $calificacion1=0;
                $calificacion2=0;
                $calificacion3=0;
                $calificacion4=0;
                $calificacion5=0;
                $calificacion6=0;
                foreach ($vector as $key => $value) {
                        $calificacion1=$calificacion1+$vector[$key][0];
                        $calificacion2=$calificacion2+$vector[$key][1];
                        $calificacion3=$calificacion3+$vector[$key][2];
                        $calificacion4=$calificacion4+$vector[$key][3];
                        $calificacion5=$calificacion5+$vector[$key][4];
                        $calificacion6=$calificacion6+$vector[$key][5];
                }
                $prom=$calificacion1/10;
                echo "<br> Promedio materia 1: ".$prom;
                $prom=$calificacion2/10;
                echo "<br> Promedio materia 2: ".$prom;
                $prom=$calificacion3/10;
                echo "<br> Promedio materia 3: ".$prom;
                $prom=$calificacion4/10;
                echo "<br> Promedio materia 4: ".$prom;
                $prom=$calificacion5/10;
                echo "<br> Promedio materia 5: ".$prom;
                $prom=$calificacion6/10;
                echo "<br> Promedio materia 6: ".$prom;
            }

            //Funcion para el mejor promedio
            function mejor_promedio($vector){
                echo "<hr>  ############# Mejor promedio #############";
                $promedio=0;
                $cadena;
                foreach ($vector as $key => $value) {
                    foreach ($value as $c => $n) {
                        if($n>$promedio){
                            $promedio=$n;
                            $cadena = "<br>".$c." -->Promedio: ".$n;
                        }
                    }
               }
               echo $cadena;
            }

            //Funcion para saber cuantos alumnos son mayores al promedio general
            function alumnos_mayores_al_promedio_general($promedio,$vector){
                echo "<hr>  ############# Promedios mayores al promedio general #############";
                $cont=0;
                foreach ($vector as $key => $value) {
                    foreach ($value as $c => $n) {
                        if($n>$promedio){
                            $cont=$cont+1;
                            echo "<br>".$c." -->Promedio: ".$n;
                        }
                    }
               }
               echo "<br> Total: ".$cont;

            }

            //------------Mostrando resultados -----------
            imprimir_calificaciones($vector_alumnos_calificaciones);
            $vector_alumnos_promedios=promedio_por_alumno($vector_alumnos_calificaciones);
            imprimir_promedios($vector_alumnos_promedios);
            mejor_promedio($vector_alumnos_promedios);
            echo "<hr>  ############# Promedio general #############";
            $promedio_general=promedio_general($vector_alumnos_promedios);
            echo "<br>".$promedio_general;
            alumnos_mayores_al_promedio_general($promedio_general,$vector_alumnos_promedios);
            promedios_por_materia($vector_alumnos_calificaciones);
        ?>
</body>
</html>