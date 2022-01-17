<?php
class Navigation {

        public static function ShowAll() {        

                $current = basename($_SERVER['PHP_SELF']);
                $request_uri = basename($_SERVER['REQUEST_URI']);

                echo "<br>
                        <nav id='nav'>
                        <div id='icon'>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                        </div>
                        <ul class='menu clearfix'>";
                self::ShowLink("index.php", "Start Seite", $current, $request_uri);                        
                self::ShowLink("htmlinfo.php", "html", $current, $request_uri);

                self::ShowLink("phpinfo.php", "php", $current, $request_uri);                        
                self::ShowLink("javascriptinfo.php", "javascript", $current, $request_uri);                        
                self::ShowLink("ajaxinfo.php", "ajax", $current, $request_uri);                        
                self::ShowLink("jqueryinfo.php", "jquery", $current, $request_uri);                        
                self::ShowLink("typo3.php", "typo3", $current, $request_uri);                        
                //self::ShowLink("phppruefung.php", "PHP-Prüfung", $current, $request_uri);                        
                self::ShowLink("phplaravel.php", "Laravel", $current, $request_uri);                        
                echo "</ul>
                        </nav>";
        }
        
        private static function ShowLink($link, $label, $current, $request_uri) {

                $class = "class='menu_link'";
                if ( $link == $current || $link == $request_uri) {
                        $class = "class='menu_link current active'";
                }

                
                echo "<li class='menu_item fl-l mar-lr'><a $class href='$link'>$label</a></li>";


        }
}
?>