<?php

//lists items the resturant sells 
$items = array("Spagetti" => "16.00", "Fried Rice" => "10.00", "Ice Cream" => "4.00" , "Burger" => "9.00");

echo "We have these items on the menu: ";
foreach($items as $dish => $price_num)
{
	echo "\n" . $dish . " " . $price_num;
}
echo "\n" . "There is a 10% discount for bills over $15";
$total1 = $items['Spagetti'] + $items['Ice Cream'];
echo "\n" . "The first bill is: " . "$". $total1 . " " . "which is for" . " " . "Spagetti and Ice cream";

$total2 = $items['Fried Rice'] + $items[3];
echo "\n" . "The second bill is: " . "$" . $total2 . " " . "which is for" . " " . "Fried Rice and a Burger";


if($total1 < 15)
{
	echo "Sorry Your Bill Does Not Meet the Requirements For Bill 1";
}
else
{
	$total1dis = $total1 * .10;
	$total1 = $total1 - $total1dis;
	echo "\n" . "The new first bill is" . " " . "$" . $total1;
}
if($total2 < 15)
{
	echo "\n" . "Sorry Your Bill Does Not Meet the Requirements For Bill 2";
}
else
{
	$total2dis = $total2 * .10;
	$total2 = $total2 - $total2dis;
	echo "\n" . "The new second bill is" . " " . "$" . $total2;
}




?>