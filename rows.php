<?php

include 'colls.php';
include 'show.php';
include './table.php';

function rows($arr = [], $rows = 8, $colls = 9, $key_start = 1, $start_number = 1, $many_times = 1) {

    $diff = $rows - $many_times + 1;
    if ($many_times % 2 !== 0) {
        //имаме инкремент 
        for ($i = 0; $i < $diff; $i++) {
            $arr[$key_start][0] = $start_number;
            $arr[$key_start]['color'] = '00ff22';
            $key_start++;

            $start_number++;
        }
        $key_start = $key_start + $rows - 1;
        //echo $key_start;die;//-------------------------------
    } else {     //имаме декримент ///|---------------------------------------|
        for ($i = 0; $i < $diff; $i++) {                                     //|                                                    // | 
            $arr[$key_start][0] = $start_number;               //||
            $arr[$key_start]['color'] = '009900';                                                // | 
            $key_start--; //<------------------------------------|

            $start_number++;
        }
        $key_start = $key_start - $rows + 1;
    }

    //echo$many_times;
    //echo'<br/>';
    if ($many_times == $colls) {
        //echo'FIVE';
        //show($arr,$rows);
        table($arr, $rows);
        exit;
    }         // echo $key_start;die;
//           if($many_times==2)
//           {
//           
//  echo '<br/>';
//           echo'<pre>';
//      print_r($arr);
//      
//           echo'</pre>';die;}
    // if($many_times==2){ echo $key_start;die;}
    colls($arr, $rows, $colls, $key_start, $start_number, $many_times);


    //return$arr ;
}

//test rows()
        
        //$r=rows();//-------------------------разработка за изтриване
        //$arr=[];
      // rows($arr);