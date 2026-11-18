<?php
echo "    welcome to the  world functions <br><br>";

function processMarks($marksarr)
{   $sum=0;
	foreach($marksarr as  $value)
	{
		$sum+=$value;
	}
	return $sum;
}
function avgMarks($marksarr)
{   $sum=0; $i=1;
	foreach($marksarr as  $value)
	{
		$sum+=$value;
		$i++;
	}
	return $sum/$i;
}
$sahil=[89,80,87,90,94,90];
$shahid=[13,45,80,33,91,90];
$sumsahil=processMarks($sahil);
$avgsahil=avgMarks($sahil);
$sumshahid=processMarks($shahid);
$avgshahid=avgMarks($shahid);
echo "the total marks of  sahil out of 600 is $sumsahil <br>";
echo "the average marks of  sahil out of 600 is $avgsahil <br>";
echo "the total marks of  shahid out of 600 is $sumshahid <br>";
echo "the average marks of  shahid out of 600 is $avgshahid <br>";
?>