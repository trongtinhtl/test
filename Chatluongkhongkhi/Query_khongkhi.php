<?php 
require("../conn.php");

        $long = $_GET['long'];
        $lat = $_GET['lat'];
        $ts =    $_GET['ts'];

        // $ng1 co dang 01-03-2011
        $ng1 = $_GET['ngay'];

        //$ng2 co danf 01032011
        $ng2 =  str_replace( '-', '', $ng1);

        // $ngay có dạng 0103 ()
        $ngay = substr($ng2, 0, 4);

      
        $tenbang = $ts."ng0103";
        
        if (!$conn ) {
          echo "An error occurred.\n";
          exit;
        }
        else
        {
              
        };

        $chuoitencot="";
        $giatrigio=Array ("00","01","02","03","04","05","06","07","08","09","10",

             "11","12","13","14","15","16","17","18","19","20","21","22","23"); 


        for($i = 0; $i< 24; $i++){
          $chuoitencot = $chuoitencot.'ngay'.$ngay.'_'.$giatrigio[$i].',';
        }
        $tencot=substr($chuoitencot, 0, -1);
        
        $result = pg_query("SELECT $tencot
                                  
                            FROM $tenbang
                            WHERE kinhdo LIKE '$lat%'  AND  vido Like '$long%' ");

     
        $row = pg_fetch_row($result);

        for( $k = 0; $k<24; $k++){             
                echo $row["$k"];
                echo ",";
               }; 

?>
