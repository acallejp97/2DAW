<?php
for($i=1;$i<=100;$i++)
{
	if(primo($i))
		echo "El número ".$i." es primo";
	else
		echo "El número ".$i." NO es primo";
}

function primo($num)
{
	$cont=0;
	for($i=2;$i<=$num;$i++)
	{
		if($num%$i==0)
		{
			if(++$cont>1)
				return false;
		}
	}
	return true;
}
?>