<?php
    class Debugger{

        public static function print_pre($value){
            echo "<pre>";
            print_r($value);
            echo "</pre>";
        }

        

        public static function ShowAll(){
            echo "<div id='debug_all'>
                <h4>Request</h4>";
                self::print_pre($_REQUEST);
            echo "</div>";
        }





        public static function ShowItem($value, $str){
           
            echo "<div id='debug_item'>
                <h4>".$str."</h4>";
                self::print_pre($value);
            echo "</div>";
        }
    }

?>