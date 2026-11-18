<?php

$arr = array("banana", "apple", "grapes");
for ($i = 0; $i < count($arr); $i++) {
    echo "$arr[$i] <br>";
    

}
echo "Using for_each loop <br>";
foreach ($arr as $key => $value) {
   echo "$value <br>";
}
