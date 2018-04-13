<?php


      //1.3) Функция : substr_count()

        class SimpleCount
        {
            // число вхождений слова в $text
            public function WordCount($text, $search)
            {
                // разбиваем строку по произвольному числу запятых и пробельных символов,
                // которые включают в себя " ", \r, \t, \n и \f 
                // $text -> массив[]
                $words = preg_split("/[\s,.]/", $text);
                
                // переменная для вывода и  подсчета кол-ва вхождений искомого слова
                $count = 0;
                foreach ($words as $val) {
                    if ($search == $val){
                        $count++;
                    }
                }
                return $count;
            }
            
            // число вхождений буквы в $text
            public function LetterCount($text, $search)
            {
                // Разбиваем строку на составляющие символы
                $letters = preg_split ( '//' , $text , - 1 , PREG_SPLIT_NO_EMPTY );                
                $count = 0;
                foreach ($letters as $val) {
                    if ($search == $val){
                        $count++;
                    }
                }
                return $count;
            }
        }
        
        $text = "Hi, I'm a PHP script ! PHP : Hypertext Preprocessor";
        $search_word = 'PHP';
        $search_letter = 's';
        
        $obj = new SimpleCount;
        echo $obj->WordCount($text, $search_word);
        echo '<br>';
        echo $obj->LetterCount($text, $search_letter);


























?>