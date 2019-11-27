<?php

function show($arr,$rows)
{
    
   $count=count($arr);
   for($show_key=1;$show_key<=$count;$show_key++)
   {
       if($arr[$show_key]<10){
           echo '|^^'.$arr[$show_key].'|';
       }
       else
       {
           if($arr[$show_key]<100)
           {
               echo'^|'.$arr[$show_key].'|';
           }
           else
           {
               echo '|'.$arr[$show_key].'|';
           }
       
       }
       if($show_key%$rows==0)
       {
           echo'<br/>';
       }
   }
    
    
    
    
    
    
    
    
    
    
    
}
