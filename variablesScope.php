<?php
//variable scope
function estudiante(){
      $edad =23;
      echo $edad;
}
  estudiante();
   //echo $edad; (No es [ermitido hacer eso])

   function padre($ano){
         echo $ano;
   }

   padre(45);

   //la tercera manera de crear funcoones con return

   function madre (){
         $vieja = 555;
         return $vieja;
   }

   echo madre();
   //variables goblar en mi funcion
 $tii =44;
   function tio(){
      global $tii;
      $tii = 90;
      echo $tii;

   }

   tio();
   echo $tii;
?>