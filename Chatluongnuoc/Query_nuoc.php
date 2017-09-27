<?php 

    // ->Conn
       
       require("../conn.php");
        $long = $_GET['long'];

        $lat = $_GET['lat'];
        $tenbang =    $_GET['ts'];

        $thang= $_GET['thang'];
        
       require("../conn.php");


        if (!$conn ) {
          echo "An error occurred.\n";
          exit;
        }
        else
        {
              
        };

        $chuoitencot="";
        $giatringay=Array ("01","10","20","25","30");

        for($i = 0; $i< 5; $i++){
          $chuoitencot = $chuoitencot.'ng'.$giatringay[$i].$thang.',';
        }

        $tencot=substr($chuoitencot, 0, -1);
        
        $result = pg_query("SELECT $tencot
                            FROM $tenbang
                            WHERE vido LIKE '$lat%'  AND  kinhdo Like '$long%' ");
        $row = pg_fetch_row($result);

        for( $i = 0; $i< 5; $i++){             
                echo $row["$i"];
                echo ",";
               }; 

?>
