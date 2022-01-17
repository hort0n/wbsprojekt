<!doctype html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Formularaufbau</title>
    <style>
        label {
            min-width: 100px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <h1>Ausgabe</h1>
    <?php
        function print_arr($arr){
            echo "<pre>";
                print_r($arr);
            echo "</pre>";
        }
        // einzeiliger kommentar
        # einzeiliger kommentar
        /*
        $str="Test";
        echo "<h2>$str</h2>";
        var_dump($str);
        */
        //print_arr($_POST);

        //$username=$_POST["user"];
        //echo "<p>User Name: " . $username . " ist da</p>";
        $data=$_POST;
        print_arr($data);
    ?>
    
</body>

</html>