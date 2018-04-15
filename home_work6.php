<?php

//1.1) Строки -> функция : strpos()     
        
        class MyStrpos
        {
            public function findmy_letter($string, $search)
            {
                    //Разбиваем строку на составляющие символы
                    $arr = preg_split ( '//' , $string , - 1 , PREG_SPLIT_NO_EMPTY );
                    foreach ($arr as $key => $val) {
                        if ($search == $val){
                            return $key;
                        }
                    }          
            }
            
            public function findmy_word($string, $search)
            {
                    //Разбиваем строку на составляющие элементы
                    $arr = preg_split("/[\s,.]/", $string);
                    foreach ($arr as $key => $val) {
                        if ($search == $val){
                            return $key;
                        }
                    }                
            }
        }
        
        $string = "Hi, I'm a PHP script !";
        $search_letter = 'm';
        $search_word = 'script';
        
        $obj = new MyStrpos;
        echo $obj->findmy_letter($string, $search_letter);
        echo '<br>';
        echo $obj->findmy_word($string, $search_word);



















?>