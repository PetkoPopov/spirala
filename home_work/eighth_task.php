
<h2 >ДА СЕ ПОКАЖАТ ТРИЪГЪЛНИЦИТЕ НА фЛОЙД</h2>
<h>за 5 10 21 реда</h>
<p></p>

<?php
echo 'най напред се определя отколко започва даден ред и до колко свършва <br/>'
. 'ред1 започва от едно и свършва с едно <br/>'
        . 'ред 2 започва от две и има два елемента тоест свършва на +2<br/>'
        . 'ред 3 започва от числото 4=((1+2)дотук+едно)  и свършва с 3 по голямо число тоест 7<br/> '
        . 'ред 4 започва с едно повече от свършилото последния ред и завършва плюс 4<br/> '
        . 'значе завършващото число ще бъде сумата от числата на номера на реда <br/>'
        . 'а началното число ще бъде завършащото от предходния ред плюс едно <br/>'
        . 'което знч че ще се формира след вътрешния цикъл <br/>';
echo '
<p>  <mark>  ето и програмата                                                  </mark> </p>
<p>  <mark>  $start_number=1;//формираме начало на реда                        </mark> </p>
<p>  <mark> $finish_number=0;//може и да не го задаваме тук                    </mark></p>
<p>  <mark> for($num_of_row=0;$num_of_row<=11;$num_of_row++){                  </mark></p>
<p>  <mark> echo {new line} ;                                                  </mark></p>
<p>  <mark> $finish_number=$start_number+$num_of_row;//формираме край на реда  </mark></p> 
<p>  <mark> for($i=$start_number;$i<=$finish_number;$i++) {echo$i;}            </mark></p>

<p>  <mark> $start_number=$finish_number+1;  } //формифаме ново начало на реда </mark></p>
';
for($many_triangles=0;$many_triangles<=22;$many_triangles++)
{
    echo'<br/>СЛЕДВАЩИЯ ТРИЪГЪЛНИК ЩЕ ИМА '.($many_triangles+1).' РЕДА<br/>';

    $start_number=1;//формираме начало на реда 
$finish_number=0;//може и да не го задаваме тук

for($num_of_row=0;$num_of_row<=$many_triangles;$num_of_row++)
{
   
 
 
 $finish_number=$start_number+$num_of_row;//формираме край на реда 
 

    for($i=$start_number;$i<=$finish_number;$i++)
    {
    if($i<100)/////////////////
    {                        // 
                             //
        if($i<10)            //
        {                    // 
            echo$i."^^";     //ИДЕЯТА Е ДА ЗАМЯЗА НА ИСТИНСКИ ТРИЪГЪЛНИК  
                             //
        }else                //  
        { echo$i.'^';}       //
                             //       
                             //
    }                        //
    else{                    //
        echo$i;////////////////              
    }
        }
 $start_number=$finish_number+1;   //формифаме ново начало на реда 
if((($many_triangles==4)||($many_triangles==7))||($many_triangles==9)){
     echo'<hr color=bluelight />';
 }    
 echo'<br/>';
}
}




