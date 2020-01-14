<?php

    function fibonacciNumber($amount) {
        $fibonacci = [0, 1];

        for ($i = 1; $i <= $amount; $i++) {
            $element = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
            array_push($fibonacci, $element);
        }
        
        return $fibonacci;
    }

    function getFibonacciNumber($amount) {
        if ($amount < 2) {
            return 0;
        } else {
            $fibonacci = fibonacciNumber($amount);

            for ($i = 0; $i <= $amount - 1; $i++) {
                if ($i != $amount - 1) {
                    echo $fibonacci[$i].', ';
                } else {
                    echo $fibonacci[$i];
                }
            }
        }
    }