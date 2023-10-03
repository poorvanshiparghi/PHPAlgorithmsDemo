<?php

    class PrimeOrComposite {
        function isPrime($num){
            $i = 0;
            while($i < $num){
                $j = $i + 1;
                $prime = true;
                for($k = 2; $k < $j; $k++){
                    if ($j % $k == 0) {
                        $prime = false;
                        break;
                    }
                }
                if ($prime) {
                    echo "$j is a prime number. \n";
                } else {
                    echo "$j is a composite number. \n";
                }
                $i++;
            }
        }
    }

    $test = new PrimeOrComposite();
    $solution = $test->isPrime(20);

?>