<?php

#phpinfo();
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";
$date = new DateTime();

echo $date->format('Y-m-d H:i:s');
