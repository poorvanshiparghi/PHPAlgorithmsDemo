// 0 1 0 1 1 0 1 1 1 0 1 1 1 1 

<?php 
    class Binary{
        public function binary($num){
            $i = 0;
            $j = 0;
            $k = 2;
            $numArray = [];
            while($i < $num){
                if($i == $j){
                    $numArray[] = 0;
                    $j = $j + $k;
                    $k += 1;
                }else{
                    $numArray[] = 1;
                }
                $i++;
            }
            echo implode("  ",$numArray);    
        }
    }

    $result = new Binary();
    $result->binary(20);
    
?>