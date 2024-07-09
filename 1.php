<?php

function num($n){
echo "1. <br><br>"; 
for($i=1; $i<$n; $i++){
    echo $i. '-';
}echo $i;
echo '<br><br>';
}num(10);


echo "2. <br><br>";

function sumiation($n1,$n2){
$sum = 0;
for($i=$n1; $i<=$n2; $i++){
$sum +=$i;
}
echo "The sum of the numbers is $sum";
echo '<br><br>';
}sumiation(1,30);





echo "3. <br><br>"; 

    for ($i=0; $i < 5; $i++) { 
        for ($x=4; $x >=0; $x--) { 
            if ($x <= $i) {
                echo  chr(ord('A')+$i)."&nbsp;&nbsp; ";
            }else{
                echo "A"."&nbsp;&nbsp; ";
            }
        }
        echo "<br>";
    }

echo '<br><br>';








echo "4. <br><br>"; 


    for ($i=0; $i < 5; $i++) { 
        for ($x=4; $x >=0; $x--) { 
            if ($x <= $i) {
                echo  (1+$i)."&nbsp;&nbsp; ";
            }else{
                echo "1"."&nbsp;&nbsp; ";
            }
        }
        echo "<br>";
    }


echo '<br><br>';


echo "5. <br><br>"; 

for($i=1; $i<6; $i++){
    for($x=1; $x<6; $x++){
        if($x==$i){
        echo $i. " ";}else{
            echo '0'. " ";
        }
    }
    echo '<br>';
    }
echo "<br><br>";
    


echo "6. <br><br>";

function factor($num){
$factorial = 1;
for($i=0 ; $i<$num ; $i++)
{
    $factorial*=$i+1; 
}
echo "Factorial of $num = $factorial"."<br><br>";
}factor(5);
echo "<br><br>";



echo "7. <br><br>";

function Fibonacci($num){

    $n1 = 0;
    $n2 = 1;
    $count = 0;
    while ($count < $num){
        echo $n1. ' ';
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        $count++;
    }
}
Fibonacci(11);
echo "<br><br>";



echo "8. <br><br>";

function countChar($string,$char){
    $counter=0;
    for($i=0;$i<strlen($string);$i++){
        if(strtoupper (substr($string,$i,1)) ==$char)
        {$counter=$counter+1;}
    }
echo "The letter ( $char ) is repeated ( $counter ) times in this sentence : ( $string ) ";

}
countChar("Orange Coding Academy",'C');
echo "<br><br>";



echo "9. <br><br>";


echo '<table border="solid" cellpadding="3px" cellspacing="0px" >';

for($i=1;$i<7;$i++){

echo "<tr>";

for ($x=1;$x<6;$x++)
  {echo "<td >$i * $x = ".$i*$x."</td>";}

  echo "</tr>";
  }

  echo '</table>';
  echo "<br><br>";




echo "10. <br><br>";
for ($i = 1; $i <51; $i++)
{
  if ($i%3 == 0 && $i%5 == 0  ){echo  "FizzBuzz ";}
  else if ($i%3 == 0 ){echo  "Fizz ";}
  else if ($i%5 == 0 ){echo  "Buzz ";}
  else {echo  $i. " ";}
 }
 echo "<br><br>";



echo "11. <br><br>";

$sum=0;
for($i=0; $i<5; $i++)
{
for($x=0; $x<=$i; $x++)
{
$sum++; 
echo  $sum." ";
}
echo '<br>';
}
echo "<br><br>";



echo "12. <br><br>";



?>



