<?php
	$x = 5;
    $y = 10;
    $z = 2;
    $first = 0;
    $second = 0;
    $third = 0;

    if($x <= $y)
    {
        if($x <= $z)
        {
            $first = $x;
            if($y <= $z)
            {
                $second = $y;
                $third = $z;
            }
            else
            {
                $third = $y;
                $second = $z;
            }
        }
        else
        {
            $second = $x;
            if($y <= $z)
            {
                $first = $y;
                $third = $z;
            }
            else
            {
                $third = $y;
                $first = $z;
            }
        }
    }
    else
    {
        if($x <= $z)
        {
            $second = $x;
            if ($y <= $z)
            {
                $first = $y;
                $third = $z;
            }
        }
        else
        {
            $third = $x;
            if ( $y <= $z)
            {
                $first = $y;
                $second = $z;
            }
            else
            {
                $second = $y;
                $first = $z;
            }
        }
    }
    echo $first . "<<" . $second . "<<" . $third ;

?>