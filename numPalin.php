<?php
$n=(int)readline("enter a number ");
$temp=$n;
$sum=0;
while($temp!=0)
{
	$rem=$temp%10;
    $sum=($sum*10)+$rem;
    $temp=floor($temp/10);
}
if($sum===$n)
{
	print("the number is pallindrome");
}
else
{
	print("the number is not pallindrome");
}
?>