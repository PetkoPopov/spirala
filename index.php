<?php

error_reporting(E_ALL);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color: #6699ff">
<form method="post" charset="utf8"/>
<input type="number" name="rows" value="<?php if(!empty($_POST['rows']))
{
    echo $_POST['rows'];
}
else{
    echo 12;
}
?>" style="background-color: #cccc00" />
<input type="number" name="colls" value="<?php if(!empty($_POST['colls']))
{
    echo $_POST['colls'];
}
else{
    echo 12;
}
?>"style="background-color: #cccc00"/>
<input type="submit" value="you can do it " style="background-color: #cccc22"/>
<button  name="mod" value="11" style="background-color: #ccdd00">цвет.модел охлюв </button>
        <?php
        include_once 'rows.php';
        
       If(!empty($_POST['rows']))
       {
           $rows=$_POST['rows'];
       }
       if(!empty($_POST['colls']))
       {
           $colls=$_POST['colls'];
       }
       echo $rows.'---------'.$colls.'====>'.$rows*$colls;
       echo'<br/>';
       $arr=[];
       if(isset($_POST['rows']))
       {
       rows($arr,$rows,$colls);
       
       }
        
        ?>
    </body>
</html>
