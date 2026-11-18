<?php
$string="the string is good";
echo "-->".$string;
echo "<br>";
echo "the words  in string is ".str_word_count($string);
echo "<br>";
echo str_repeat($string,3);
echo "<br>";
echo str_replace("string" ,"array",$string);
echo strpos($string ,"is");
echo strrev($string);
$arr=array("banana","apple","tomato");

foreach ($arr as $value)
{
  echo $value."<br>";
  
}
$arr2=["banana","apple","tomato"];
$arr2[]="walnut";

foreach ($arr2 as $value)
{
  echo $value."<br>";
  
}

$student=["name"=>"sahil","city"=>"sopore","code"=>193201];


foreach ($student as $key=> $value)
{
  echo" $key:$value"."<br>";
  
}
?>