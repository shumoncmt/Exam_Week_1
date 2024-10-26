
<?php
//Task 1
    for($x = 1; $x<=10; $x++) {
        if (($x % 2) != 0) {
            echo " $x ";
        }

        }
echo "\n";
//Task 2
function Greet($name) {
    echo "$name Refsnes . \n";
  }
  
  greet("Hege");

  echo "\n";



//Task-3


function factorial($n)
{
    if ($n == 0)
    {
        return 1;
    }
    else
    {
    
        return $n * factorial($n - 1);
    }
}

print_r(factorial(4) . "\n");

//Task 4
function fibonacciSeries($n){
    $num1 = 0;
    $num2 = 1;
  
      for ( $i = 0; $i < $n; $i++ ) {
        echo $num1 . ", ";
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
    }
}

$n = 12;
fibonacciSeries($n);
//Exam End





?>
        

