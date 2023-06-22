<?php
    namespace app\core;
    class Form{
        public static function begin($action, $method){
            echo sprintf('<form method="%s" action="%s">', $action, $method);
            return new Form();
        }
        public static function end(){
            return '</form>';
        }
        public function field($attribute){
            return new Field($attribute);
        }
    }
?>