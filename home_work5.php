<?php

//1.2) Функция : substr()
        
        class SimpleSubstr
        {
            public function SubStr($string, $start)
            {
                // массив для записи и вывода элементов
                $res = [];
                // формируем из строки массив
                $arr = str_split($string) ;
                // подсчет кол-ва элементов массива
                $count = count($arr);
                    foreach ($arr as $key => $val) {
                        if ($key == $start) {
                            $key = $start;
                            while ($key < $count ) {
                                $res[] =  $arr[$key];
                                $key++;
                            } 
                        }                     
                    }
                return implode("", $res);
            }
        }
        
        $string = "I'm a PHP script !";
        $start = 5;
        
        $obj = new SimpleSubstr;
        echo $obj->SubStr($string, $start);

















?>