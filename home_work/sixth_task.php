
<h2> шеста задача
</h2>
<h>вретено от звезди</h>
<?php
for($rows=0;$rows<=5;$rows++)
{
    echo'<br/>';
    for($star_string=0;$star_string<$rows;$star_string++)
    {
        echo'*';
    }
    

}

$rows--;
for($rows;$rows!=0;$rows--){
    echo '<br/>';
    $td=null;
     for($star_string=0;$star_string<$rows;$star_string++)
    {
    $td=$td.'*';
    }
        echo'<table><tr><td color=yellow bgcolor="olivegreen">'.$td.'</td></tr></table>';
    
}
 