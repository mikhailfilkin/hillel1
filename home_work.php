<?php

// 4) Заменить в массиве все элементы большие заданного числа - z 
//    ( заменить эл-ты на z, подсчитать кол-во замен ) :  
  
            function change_num ($arr, $z)
            {
                //переменная подсчета замен
                $count = 0;
                foreach ($arr as $num) {
                    if ($num > $z) {
                        $num = $z;
                        $count++;
                    }                 
                }
              // вывод кол-ва замен
                return $count;
            }
            
            $arr = [1, 2, 3, 4, 5, 6, 7, 8 ];
            $z = 5;  
            echo change_num($arr, $z);
            
?>
