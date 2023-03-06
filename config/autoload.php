<?php

function loadClass($class) {
  require __DIR__. '/../Class/'.
  $class . '.php'; 
}

spl_autoload_register('loadClass'); 
?>
