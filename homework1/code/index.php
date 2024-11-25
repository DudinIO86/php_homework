<?php
#$a=5;
#$b='05';
#var_dump($a==$b);
#echo("\n");
#var_dump((int)'012345');
#echo("\n");
#var_dump((float)123.0 === (int)123.0);
#echo("\n");
#var_dump(0 == 'hello, world');
$a=1;
$b=2;
echo("До преобразования\n");
echo("a={$a}\n");
echo("b={$b}\n");
echo("После преобразования\n");
[$b,$a]=[$a,$b];

echo("a={$a}\n");
echo("b={$b}\n");

?>