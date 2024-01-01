<?php

function Table_of($user){  // function which i want to call 
$i=1;  // initilizer 

echo "Table_of($user) is: \n"; //want to print it as it is 

while($i<=10){ // finilizer condition 
  echo "$user*$i =",$user*$i; // product of user and intilizer 
  echo "\n";// new line 
  $i++;//incremental
}

}
//function which i want to call 
Table_of(2);   
echo "\n";  //for new line
Table_of(3);

?>