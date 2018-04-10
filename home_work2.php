<?php
 //2) Вывод определенного кол-ва элементов
        //    последовательности Фибоначчи
        
        function fib_num($num)
        {
            // 1 ый элемент ряда (его начало)
            $fib1 = 0;
            // 2 й элемент ряда
            $fib2 = 1;
            // переменная (массив) для хранения и вывода значений
            $row = [];
            for ($i = 0; $i < $num; $i++) {
            // каждое последующее число ряда = сумме 2х предыдущих
                $fib_row = $fib2 + $fib1;
                $fib1 = $fib2;
                $fib2 = $fib_row;
                $row[] = $fib_row;
            }
            // преобразуем массив в строку 
            return implode(', ' ,$row);
        }
        // $num - заданное кол-во элементов для вывода
        fib_num(5);
        
        
        //        // 1.1) Функции работы с массивами : array_sum ();
        
        function myArray_sum($arr) 
        {
            // переменная для суммирования элементов массива
            $sum = 0;
            foreach ( $arr as $num ) {
                $sum += $num;
            }
            return $sum;
        }
         
        $arr = [1, 2, 3, 4, 5 ];      
        echo myArray_sum($arr);
        
        
        
        
        
         //1.2) Функции работы с массивами : in_array();
        
        function myIn_array ($arr, $search) 
        {
            // переменная для записи и вывода найденного значения
            $name = 0;
            foreach ( $arr as $value ) {  
            // (===) для строгой проверки элементов  
                if ( $value === $search ) {
                    $name = $value;
                } 
            }
                if($name) {
                    return  $name;
                } else {
                        return false;
                    }
        }
        
        $arr = [1, 2, "3", 4, 5];
        $search = 5;
        echo myIn_array( $arr, $search);
        
        
        
        // 1) Метод который выводит все положительные
        //    четные числа меньшие заданного : 
        
        function positive_num ($num)
        {
            // инициализация массива для записи значений
            $arr = [];
            // является ли число положительным
            if($num > 0) {
                for ($i = 1; $i < $num; $i++) {  
                    // проверка на четность числа
                    if ($i % 2 == 0) {
                    // запись четных чисел в массив
                        $arr[] = $i;
                      }  
                }    
                     // преобразуем массив в строку 
                    return implode(' , ', $arr);
               } else {
                        return false;
                      }
        }     
                   
        echo positive_num(10);  
        
        
        
        
        
        
        
        
?>
