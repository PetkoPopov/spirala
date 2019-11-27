<h2>изведете числата за умножение </h2>
<hr color=greenyellow/>


<?php
for($rows=1;$rows<=10;$rows++)
{
    
    
    for($n_times=1;$n_times<=10;$n_times++)
    {
        $multi_play=$rows*$n_times;//млптиплай е излишна спестява писане и е по четливо 
        if(($multi_play)==100)
        {
            echo $multi_play.'||';
        }else{
        if(($multi_play)<10)
        {
            echo '^'.($multi_play).'^||';
            //колибка за да изравня числата да са едно под друго 
            //двете черти са за да прилича на таблица 
        }
        else
          {
            echo '^'.$multi_play.'||';
          }
        }
        
    }
    echo '<hr color=olive />';
}
