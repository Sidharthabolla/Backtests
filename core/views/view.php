<?php

class View{

        public function render($file,$variable){
                $this->array = $variable;
                require_once 'core/views/'.$file.'.php';
        }
        
        public function error(){
                Echo "<h2>This page does not exist</h2>";
        }
}