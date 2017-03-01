<?php

$arr = array(7, 3, 4, 5, 5, 6, 2);
$n = sizeof($arr)/sizeof($arr[0]);
function show($arr, $size)
{
	
	echo"Repeating element is";

	for($i = 0; $i < $size; $i++)
	{
		if($arr[abs($arr[$i])-1] > 0)
			$arr[abs($arr[$i])-1] = -$arr[abs($arr[$i])-1];
		else
			echo abs($arr[$i]);
	}

	echo " Missing element is" ;
	for($i=0; $i<$size; $i++)
	{
		if($arr[$i]>0)
			echo $i+1;
	}
}

	show($arr, $n);
	return 0;

?>