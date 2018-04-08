<?php

// 3) Найти второе по величине число в массиве :  
        
        function array_second_num ($arr)
        {
            
            // первый элемент массива
            $max1 = $arr[0];
            // второй элемент массива
            $max2 = $arr[1];
            $count = count($arr);
            
            if($count > 2 ) {
                foreach ($arr as $num) {
                    if ($num > $max1) {
                        // перезапись значений
                        $max2 = $max1;
                        $max1 = $num;                     
                    }
                }
                echo $max2;
                // случай когда два элемента массива
            } elseif ( $count == 2) {
                    if ($max1 > $max2) {
                        echo  $max2;
                    } elseif ($max1 < $max2) {
                        echo  $max1 ;
                    } else {
                        echo 'Numbers are equal';
                }
                // случай когда элемент 1
            } else {
                echo $max1;
            }
        }
        
        $arr = [12, 11, 2, 33, 55, 88 ];
        array_second_num($arr);
        
        
        
        
        // 1.3) Функция работы с массивами : array_diff() 
        
       function my_diff_array ($arr1, $arr2)
       {
           // переменная для хранения и вывода значений (массив)
           $array = [];
           foreach ($arr1 as  $item) {
            // поиск значения в массиве
               if (array_search($item, $arr2) == false) {
            // запись значений которые отсутствуют в массиве $arr2
                   $array[] = $item;
               }
           }
           return $array;
       }

  
    $arr1 = [1, 3, 5, 7];
    $arr2 = [2, 3, 6, 8];
    echo '<pre>';
    print_r(my_diff_array($arr1,$arr2));
    echo '</pre>';


























?>
