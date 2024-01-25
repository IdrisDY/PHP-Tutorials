<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

$phoneNo = ' 070345';
$cars =  array('Venza','Bugatti','Muscle');
$x = $y = $z = 56; // cool af 
$sum = 1 /* +  2*/ + 3 /* inline comment */;

echo "Hello World <br>!";
echo 'Hello DY <br>';



echo( $phoneNo);
echo( $x);
echo( $y);
echo( $z);
echo $cars[0];
// things on things

// get data type 

var_dump($phoneNo);


// scopes
function test (){
 //only local scoped  variables in here , or use global keyword before
 global $x, $y;

 // use static if you want to use the values later
 static $g = 7;

 //
 $GLOBALS['x'] =  $GLOBALS['y'] +  $GLOBALS['x'];
echo 'gd';
echo $x;
$goat  = 'DY';

echo  $goat;
$g =  ' <br>'. (string) $g;

echo ' <br>' ,'Movement' , $x +1,var_dump($g);
echo ' <br>'. strlen('Boolean') ;
echo str_word_count('Boolean');
echo ' <br>'. strpos('Hello World','World');
echo strtoupper('motor');
$z= explode('i','miliki');
print_r($z) ;
echo substr('Pamilerin',5,2);
// strtolower, strrev, trim , str_replace and co...
}
test();
echo $x;
?>

</body>
</html>