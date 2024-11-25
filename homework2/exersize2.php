<?php
//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
//В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation(int $arg1, int $arg2, string $operation){
    switch($operation){
        case '+':
            echo $arg1+$arg2;
            break;
        case '-':
            echo $arg1-$arg2;
            break;
        case '*':
            echo $arg1*$arg2;
            break;
        case '/':
            echo $arg1/$arg2;
            break;
        default:
            echo "Error";
            break;
    }
}

echo mathOperation(2,6,'/');
echo("\n");
