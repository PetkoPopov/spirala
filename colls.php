<?php

//$r = 0xAA;
//$b = 0x00;
//$g = 0x00;
//
//$r++;
//
//'style="background: rgb('.$r.','.$g.','.$b.');"'

 function colls($arr=[],$rows,$colls,$key_start,$start_number,$many_times)//тази функция да сеизползва САМО за тази програма ако не внимание с параметрите
        {
     
            $diff=$colls-$many_times;
          // if($many_times==2){echo $key_start;die;}// idwa 51 
        if($many_times%2!==0)
        {///INCREMENT
            
            for($e=0;$e<$diff;$e++)
            { 
                
                $arr[$key_start][0]=$start_number;
                $arr[$key_start]['color']='0022dd';
                $key_start=$key_start+$rows;
            
               $start_number++;
               
            }
            if($many_times==$rows)
                {
//                echo  $arr[$key_start];
//                echo'<br/>';
                    table($arr,$rows);die;//тук да се внимава не прикл'ва добре когато е на последен етап 
                    
                }
            $key_start=$key_start-$rows-1;
//           if($many_times==2){
//            echo'<pre>';
//            print_r($arr);
//            echo'</pre>';
//           die;}//-------------
//            //echo $key_start;die;
        }
        else
        {//имаме менитаймс =2 значе декримент
            //echo $start_number//26 ;die;
           // echo $diff;die;
            
            for($e=0;$e<$diff;$e++)
            { 
                
                $arr[$key_start][0]=$start_number;
                $arr[$key_start]['color']='00aab3';////////////----------------
                $key_start=$key_start-$rows;
                
           
               $start_number++;
               
            }
            if($many_times==$rows)
                {
//                echo  $arr[$key_start];
//                echo'<br/>';
                    table($arr,$rows);die;//тук да се внимава не прикл'ва добре когато е на последен етап 
                    
                }
            //die;
            $key_start=$key_start+$rows+1;
//            echo'<pre>';
//            print_r($arr);
//            echo'</pre>';
//            echo $start_number;
//die;
        }
           $many_times++;//increment only in function colls
//if($many_times==3)
//           {
//           
//  echo '<br/>';
//           echo'<pre>';
//      print_r($arr);
//      
//           echo'</pre>';die;}
           rows($arr,$rows,$colls,$key_start, $start_number, $many_times);
           
        }
        //test colls()
        //print_r(colls(17,23,3));

