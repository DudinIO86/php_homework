<?php
//Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. 
//Обязательно использовать оператор return.

function calc(int $a,int $b=0, string $oper){
    if ($oper=='+'){
        echo("{$a}{$oper}{$b}=");
        return $a+$b;
    }
    if ($oper=='-'){
        echo("{$a}{$oper}{$b}=");
        return $a-$b;
    }
    if ($oper=='*'){
        echo("{$a}{$oper}{$b}=");
        return $a*$b;
    }
    if ($oper=='/'){
        echo("{$a}{$oper}{$b}=");
        return $a/$b;
    }
    else{
        return 'wrong';
    }
    

} 

echo calc(10,2,'*');
echo ("\n");