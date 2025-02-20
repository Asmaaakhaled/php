
<?php 
// 1
   $name="programmer";
   echo "hello ".$name;
   echo"<br>-----------------------<br>";

// 2
$x=5;
$y=6;
$sum = $x + $y;
$mul = $x * $y;
$sub = $x - $y; 

echo "$x + $y = $sum<br>";
echo "$x * $y = $mul<br>";
echo "$x - $y = $sub<br>";

echo"<br>-----------------------<br>";
// 3
$A=1;
$B=2;
$C=3;
$D=4;
$difference= ($A * $B) - ($C * $D);
echo "difference: ",$difference;
echo"<br>-----------------------<br>";

// 4
$N=11;
$M=12;
$lastDigitN = $N % 10;
$lastDigitM = $M % 10;
$result = $lastDigitN + $lastDigitM;
echo "result= $result <br>";
echo"<br>-----------------------<br>";

//5

$number=234;
$firstDigit = $number;
while ($firstDigit >= 10) {
    $firstDigit /= 10;
}
$firstDigit = (int)$firstDigit;
if ($firstDigit % 2 == 0) {
   echo "EVEN<br>";
} else {
   echo "ODD<br>";
}
echo"<br>-----------------------<br>";

// 6
$a=15; $b=7; $k=3;
if ($a % $k == 0 && $b % $k == 0) {
   echo "Both<br>";
} elseif ($a % $k == 0) {
   echo "Memo<br>";
} elseif ($b % $k == 0) {
   echo "Momo<br>";
} else {
   echo "No One<br>";
}

echo"<br>-----------------------<br>";

// 7
$N=39;
$tens = $N / 10;
$ones = $N % 10;
if ($ones != 0 && $tens % $ones == 0) {
   echo "YES<br>";
} elseif ($tens != 0 && $ones % $tens == 0) {
   echo "YES<br>";
} else {
   echo "NO<br>";
}

?>

