
<p> ЗАДАЧА 4</p>
<p >ДА СЕ НАПРАВИ ПРОГРАМА КОЯТО ДА ПОКАЗВА ФАКТОРИАЛ ОТ 5 8  и 10 </p>
<?php
$factorial=1;
for($e=1;$e<=11;$e++){
    
for($i=1;$i<=$e;$i++){
    $factorial=$factorial*$i;
}
echo 'факториала на '.$e.' е '.$factorial.'<br/>';


switch ($e){
        case 5:
            echo 'this is FAK. OF OUR 5';
            echo '<table><tr><td bgcolor=lightblue>'.$factorial.' </td></tr></table>';
            break;
        case 8:
            echo 'this is FAK. OF OUR 8';
            echo '<table><tr><td bgcolor=blueyellow>'.$factorial.' </td></tr></table>';
            break;
        case 10:
            echo 'this is FAK. OF OUR 10';
            echo '<table><tr><td bgcolor= lightgreen>'.$factorial.' </td></tr></table>';
            break;
        default :
            break;
    }

}




