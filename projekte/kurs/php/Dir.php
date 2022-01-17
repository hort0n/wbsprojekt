<?php
    class Dir{
        public static function ShowAll($tag){
            
            // Öffnet ein Unterverzeichnis mit dem Namen "daten"
            $path = $_SERVER['DOCUMENT_ROOT'] . $tag;
            echo $path;
            $verzeichnis = openDir($path);
            
            echo "<ul>";
            // Verzeichnis lesen
            while ($file = readDir($verzeichnis)) {
                // Höhere Verzeichnisse nicht anzeigen!
                if ($file != "." && $file != "..") {
                    // Link erstellen
                    echo "<li>";
                    $file_extension = explode(".", $file);
                    switch ($file_extension[1]) {
                        case "html";
                            //echo "<img src=\"images/icons/html.png\">";
                            echo "<img src='images/icons/html.png'>";
                            echo "<a href='$tag/$file'>".$file."</a><br>";
                            break;
                        case "txt";
                            echo "<img src='images/icons/text.png'>";
                            echo "<a href='$tag/$file'>'$file'</a><br>";
                            break;
                        case "php";
                            echo "<img src='images/icons/php.jpg'>";
                            echo "<a href='$tag/$file'>'$file'</a><br>";
                            break;
                        case "css";
                            echo "<img src=\"images/icons/CSS.png\">";
                            echo "<a href=\"$tag/$file\">$file</a><br>\n";
                            break;
                        case "gif";
                            echo "<img src=\"images/icons/gif.gif\">";
                            echo "<a href=\"$tag/$file\">$file</a><br>\n";
                            break;
                        case "png";
                            echo "<img src=\"images/icons/png.png\">";
                            echo "<a href=\"$tag/$file\">$file</a><br>\n";
                            break;
                        case "jpg";
                            echo "<img src=\"images/icons/jpg.gif\">";
                            echo "<a href=\"$tag/$file\">$file</a><br>\n";
                            break;
                        case "";
                            echo "<img src='images/icons/folder.png'>";
                            echo "<a href='$tag/$file'>".$file."</a><br>";
                            break;

                        default;
                            echo $file;
                    }

                    echo "</li>";
                }
            }
            // Verzeichnis schließen
            closeDir($verzeichnis);
            echo "</ul>";
        

    }
}
?>