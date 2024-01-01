Write a program which checks different numbers equivalent to a variable and gives number as output. 
Perform it using ifelse and switch case. 
Try to print table of 2 using for loop.
Write detailed comments in your code.

<?php

$i=70;
$a=100;
$b=200;
$c=300;
$d=60;

if($i==$a){         //check if i==a print a if condition is true
  echo $a;
}
else if ($i==$b){ //if  "if" statement is false then it check i=b and print b if condition is true
  echo $b;
}
else if ($i==$c){//if  "if and elseif" statement is false then it check i=c and print c if condition is true
  echo $c;
}
else{// if all above statement are false then it  print i
echo $i;
}

                              Switch Case:

  $i=70;

switch ($i) { //as i != 100 so loop check next case
  case "100":
     echo "100";
     break;
  case "200": // as 1st case is false so it check i==200 
      echo "200";
      break;
  case "300"://as above case is false so it check i==300 so it check further case
      echo "300";
      break;
  case "60"://as above case is false so it check i==60 
      echo "60";
      break;
  default:// as all the above conditions are false so this cell is excuted.
   echo "70";

}

                 Table:2

$i=2;//assign a variable a value
for ($x=1;$x<=10 ;$x++) {// initilizer=1;finalizer=10,incremental=1
	echo "$i* $x =",$i*$x;//print initilizer*variable = and product of initilizer and vaiable
	echo "\n";
} 
           2nd method
echo "\n";
for ($x=1;$x<=10 ;$x++) {
	echo "2* $x =",2*$x;
	echo "\n";
}

?>