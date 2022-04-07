<?php
   $val =$_POST['num']; //Valor de entrada
  
   
   if($val>0){
     echo'Valor Positivo';
   }
   elseif($val<0){
     echo'Valor Negativo';
   }
   elseif($val==0){
     echo'igual a Zero';
   }
   


?>