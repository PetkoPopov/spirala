<?php
function table($arr,$rows)
{
//   echo '<br/>';
//           echo'<pre>';
//      print_r($arr);
//      
//           echo'</pre>';//die;
    $td='';
    $th="";
    $count_arr=count($arr);
    echo'<table border="1">';
   
   for($e=0;$e<$rows;$e++)
   {
          $th=$th.'<th>smile</th>';
   }
   echo '<tr>'.$th.'</tr>';  
  for($i=1;$i<=$count_arr;$i++)
  {
      //създаваме дифернце между стойностите на два съседни ключа от масива пълен провал не се получи четимо
              //ако е повече от единица значе че следва друга "посока"
           // $color= $arr[$i]['color'];
      //print_r($_POST['mod']);//  не забравяй че нямаш иф екзист и ще ти даде колс по роус варниинги
      
      
     // $color=$color+$color;
      ///Намиране на най големия елемент
      
      //echo  $count_arr;die;
      if($arr[$i][0]==$count_arr)
      {
          $color='aa0000';
      }else
      {
          if(!empty($_POST['mod']))
      {
          //$color=($arr[$i][0])+100;// snail mode//--------------work--------|
         // $color=880000+7700+$arr[$i][0];//this work very well//---work------|
          //var_dump($color);die;
              if($arr[$i]==100){
                 $color=330000-$arr[$i][0]+100;die;
              }else{
                  $color=330000-$arr[$i][0];
              }
         
//          if($color/1000000<1){
//              $color=$color%1000000;
//              $color=floor($color);
//          }
      }else
      {
       $color= $arr[$i]['color'];   
      }
  }
          
      $td_help='<td  style="background-color: #'.$color.'">'.$arr[$i][0].'</td>';
      $td=$td.$td_help;
//      if($i==$count_arr)//показва последния ред от масива  
//      {
//          $td=$td.'<td>'.$arr[$i].'</td>';
//           echo'<tr>'.$td.'</tr>';
//      }
      if($i%$rows==0)
      {
          
          echo'<tr>'.$td.'</tr>';
          $td='';
          $td_help='';
                  
      }
  }
  
  
  echo'</table>';
    
    
}