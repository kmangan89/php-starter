<?php 
echo "Hello, World!\n";

$first_name = "Katie";
$last_name = "Mangan";
$language = "PHP";

echo "My name is $first_name $last_name and I'm learning all about $language today!\n";


function tipCalculator($total, $tip = 20) 
{
    return $total + ($total * ($tip/100));
}

echo tipCalculator(100, 25);

?>