<?php
  spl_autoload_register(function($class){
    $file = "php/".$class.".php";
    if(file_exists($file)){
      include($file);
    }
  });

    $val = "/htmlgrundkurs/tag10_11";
    Dir::ShowAll($val);

?>