<?php
 //2) ����� ������������� ���-�� ���������
        //    ������������������ ���������
        
        function fib_num($num)
        {
            // 1 �� ������� ���� (��� ������)
            $fib1 = 0;
            // 2 � ������� ����
            $fib2 = 1;
            for ($i = 0; $i < $num; $i++) {
            // ������ ����������� ����� ���� = ����� 2� ����������
                $fib_row = $fib2 + $fib1;
                $fib1 = $fib2;
                $fib2 = $fib_row;
                echo $fib_row. '<br>';
            }
        }
        // $num - �������� ���-�� ��������� ��� ������
        fib_num(5);
        
        
        //        // 1.1) ������� ������ � ��������� : array_sum ();
        
        function myArray_sum($arr) 
        {
            // ���������� ��� ������������ ��������� �������
            $sum = 0;
            foreach ( $arr as $num ) {
                $sum += $num;
            }
            return $sum;
        }
         
        $arr = [1, 2, 3, 4, 5 ];      
        echo myArray_sum($arr);
        
        
        
        
        
         //1.2) ������� ������ � ��������� : in_array();
        
        function myIn_array ($arr, $search) 
        {
            // ���������� ��� ������ � ������ ���������� ��������
            $name = 0;
            foreach ( $arr as $value ) {  
            // (===) ��� ������� �������� ���������  
                if ( $value === $search ) {
                    $name = $value;
                } 
            }
                if($name) {
                    return 'You looking for : '. $name;
                } else {
                        return FALSE;
                    }
        }
        
        $arr = [1, 2, "3", 4, 5];
        $search = 5;
        echo myIn_array( $arr, $search);
        
        
        
        // 1) ����� ������� ������� ��� �������������
        //    ������ ����� ������� ��������� : 
        
        function positive_num ($num)
        {
            // ������������� ������� ��� ������ ��������
            $arr = [];
            // �������� �� ����� �������������
            if($num > 0) {
                for ($i = 1; $i < $num; $i++) {  
                    // �������� �� �������� �����
                    if ($i % 2 == 0) {
                    // ������ ������ ����� � ������
                        $arr[] = $i;
                      }  
                }        
                    foreach ($arr as $num) {
                    // ����� �����
                            echo $num. '<br>';
                          }      
               } else {
                        return FALSE;
                      }
        }     
                   
        echo positive_num(10);  
        
        
        
        
        
        
        
        
?>