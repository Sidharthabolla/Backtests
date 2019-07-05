<?php

    class Model{          
            function __construct(){
                $str1 = file_get_contents('result1.json');
                $this->a = json_decode($str1);
                $str2 = file_get_contents('result2.json');
                $this->b = json_decode($str2);
            }
    }