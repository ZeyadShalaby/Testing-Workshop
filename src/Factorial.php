<?php

class Factorial
{
    public function factorial($n)
    {
        
        if (is_int($n) && $n >= 0) {
            $factorial = 1;
            for ($i = 2; $i <= $n; $i++) {
                $factorial *= $i;
            }
            return $factorial;
        } elseif(is_bool($n)) {
            return $n;
        } elseif($n=== false){
            return $n;
        }
        
    }
}
?>