<?php

$dob = "16-07-2019";
function cal_age($dob)
{
    $date_birth = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($date_birth);
    return $age;
}
$age = cal_age($dob);
echo " Your age is  : $age->y years $age->m months $age->d days ";  
?>
