<?php

// 4) «аменить в массиве все элементы большие заданного числа - z 
//    ( заменить эл-ты на z, подсчитать кол-во замен ) :  
  
            function change_num ($arr, $z)
            {
                //переменна€ подсчета замен
                $count = 0;
                foreach ($arr as $num) {
                    if ($num > $z) {
                        $num = $z;
                        $count++;
                    }
                    echo $num. '<br>';
                }
                return '<hr>Number of replacements: '. $count;
            }
            
            $arr = [1, 2, 3, 4, 5, 6, 7, 8 ];
            $z = 5;  
            echo change_num($arr, $z);
            
?>