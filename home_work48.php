<?php

// 1.4) ������� ������ � ��������� : sort() 
           
           
    class MySort
    {
        public function SortNum($arr)
        {
            // ������� ���-�� ��������� �������           
            $count = count($arr);
            for($i = 0; $i < $count; $i++){
                // $i -> $arr[0], $x -> $arr[1] = ��������� ���� $arr                     
                for($x = ($i + 1); $x < $count; $x++){
                    if($arr[$i] > $arr[$x]){
                    // $var ���������� ��� �������� ��������       
                        $var = $arr[$x];
                        // ���������� �������� ��� �������
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