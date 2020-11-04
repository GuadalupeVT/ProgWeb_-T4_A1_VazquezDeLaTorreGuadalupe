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


        ?>
</body>
</html>