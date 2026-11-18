<?php
    $i=0;
function countMarks($marks){
   $sum=0;
    foreach ($marks as $value) {
        $sum+=$value;
        global $i;
         $i++;
         
    }
    return $sum;
}
$Shahid=[86,96,98,82,90];
$Adil=[96,56,98,50,90];
$marksShahid=countMarks($Shahid);
echo "the marks of shahid out of 500 is : ". $marksShahid."<br>";
$marksAdil=countMarks($Adil);
echo "the marks of Adil out of 500 is :". $marksAdil;
?>