<?php
function change_color($a,$b,$color_a="00aa33")
{
    if(($a+1)==$b)
    {
        $color=$color_a;
        return $color;
    }else
    {
       
    
    if(($a-1)==$b)
    {
        $color='005502';
        return $color;
    }
 else {
        return $color='0100aa';
    }
}
}