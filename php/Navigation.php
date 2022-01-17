<?php
class Navigation {
        public static function ShowAll() {        

                if(empty(basename($_SERVER['REQUEST_URI']))){
                        $current = '/';  
                }else{
                        $current = basename($_SERVER['REQUEST_URI']);
                }

                echo 
                "<nav id='nav' class='container'>
                        <div id='icon'>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                        </div>
                        <ul class='menu clearfix'>";
                                self::ShowLink("/", "::about", $current);
                                self::ShowLink("guestbook", "::notes", $current);
                                self::ShowLink("works", "::works", $current);

                                if(!empty($_SESSION['rolle']) && $_SESSION['rolle'] == 'admin'){                      
                                self::ShowLink("user", "::users", $current);
                                }

                                if(empty($_SESSION['user'])){
                                self::ShowLink("login", "::login", $current);
                                }else{
                                        echo "<li class='menu_item fl-r mar-lr'><p style='color:#fff; line-height: 60px; font-size: 10px'>Angemeldet als [ ".$_SESSION['user'] ." ]</p></li>";

                                }

                                if(!empty($_SESSION['user'])){
                                        self::ShowLink("profile", "::profile", $current);                        
                                }

                                self::ShowLink("impressum", "::impressum", $current);
                                
                                if(!empty($_SESSION['user'])){
                                        self::ShowLink("profile/logout", "::logout", $current);                        
                                }

                echo 
                        "</ul>
                </nav>";
        }
        public static function ShowWorks() {

                self::ShowLinkWorks("works", "works");
                
        }


        private static function ShowLink($link, $label, $current) {
                //$class = "";
                $class = "class='menu_link text-light'";
                if ( $link == $current) {
                        $class = "class='menu_link current active'";
                }       
                
                echo "<li class='menu_item fl-l mar-lr'><a $class href='$link'>$label</a></li>";
        }
        private static function ShowLinkWorks($link, $label) {
                //$class = "";
/*                 $class = "class='border-white bg-white text-dark text-decoration-none pad-tb pad-lr'";  */    
                $class = "class='btn-works center'";
                echo "<a $class href='$link'>$label</a>";
        }
        
}
?>