<?php
    function fibonacci($n){
        if($n == 0){
            return 0;
        }
        else if($n == 1 || $n == 2){
            return 1;
        }
        else{
            return fibonacci($n - 1) + fibonacci($n - 2);
        }
    }

        $input = $_POST['input'];
        $fibonacci = fibonacci($input);
        echo "Hasil Fibonacci dari $input adalah $fibonacci";
?>