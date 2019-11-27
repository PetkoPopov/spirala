

<h1>
ВТОРА ЗАДАЧА
изведи 1-2-3-4-5-6-7-8-9-10
условие преди едно и след десет да няма тире 
</h1>
<?php
 echo '<hr color=blue />';
for($i=0;$i<=9;$i++){
if(($i+1)==10){
    echo $i+1;
}else{
    echo ($i+1).'-';
}
}
//second way 
 echo '<hr color=blue />';
echo '<br/>ВТОРИ НАЧИН ';
$i=1;
while($i<=9){
    echo $i;
    echo'-';
    $i++;
}
echo 10;// :P при сложен код може да се обърка или да се покаже ненужнo
         // трябва да се ползва IF
 echo '<hr color=blue />';
echo '<br/>трети начин ';
$e=0;
do{
         $e++;
         if($e==10){
            
             echo $e;
             break;
         }
        echo $e.'-';
        
  }
       while($e<10);
        
       
        
        
        
        
        