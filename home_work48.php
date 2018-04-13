<?php

// 1.4) ”ункциЯ работы с массивами : sort() 
           
           
    class MySort
    {
        public function SortNum($arr)
        {
            // подсчет кол-ва элементов массива           
            $count = count($arr);
            for($i = 0; $i < $count; $i++){
                // $i -> $arr[0], $x -> $arr[1] = сравнение пары $arr                     
                for($x = ($i + 1); $x < $count; $x++){
                    if($arr[$i] > $arr[$x]){
                    // $var переменная для хранения значений       
                        $var = $arr[$x];
                        // перезапись значений при проходе
                        $arr[$x] = $arr[$i];
                        $arr[$i] = $var;
                    }          
                }
            }
            return $arr;
        }
        
    }
    
    $arr = [8, 2, 5, 7, 3, 6, 1, 4, 9];
    
    $obj = new MySort;
    echo '<pre>';
    print_r($obj->SortNum($arr));
    echo '</pre>';

























?>