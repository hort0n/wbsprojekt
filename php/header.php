<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/openpicjs.css">
    <link href="css/helpers.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <link href="css/texttyping.css" rel="stylesheet"/>
    <title><?php echo $pageData['title']?></title>
</head>
<body>
<?php
    spl_autoload_register(function($class){
        $file = "php/" . $class . ".php";
        if(file_exists($file))
          include($file);
      });

    
    Navigation::ShowAll();
?>