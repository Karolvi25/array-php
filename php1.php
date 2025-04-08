<?php

 echo"hola karol";
  $celululare=array("xiaomi","iphone", "samsung","motorola", "nokia", "honor", "huawei", "blackberry", "lenovo");
  print_r($celululare);
  
  $celululareEliminar = "nokia";
  $boton = array_search($celululareEliminar, $celululare);
  if($boton!==false){
    unset($celululare[$boton]);
  }
  print_r($celululare);
?>