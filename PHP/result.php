<?php 
$number = $_POST["number"]; 
$mark = $number;

if($number >=70 && $number <=79){
   echo 'Gread:A';
}
else if($number >=60 && $number <=69){
    echo 'Gread:A-';
}
else if($number >=50 && $number <=59){
    echo 'Gread:B';
}
else if($number >=40 && $number <=49){
    echo 'Gread:C';
}
else if($number >=80 && $number <=100){
    echo 'Gread:A+';
}
else if($number >=33 && $number <=39){
    echo 'Gread:D';
}
else{
    echo 'Gread:Fail';
}
?>