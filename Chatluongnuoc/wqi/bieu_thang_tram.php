
    <?php
        require("../../conn.php");
        $select_data= "SELECT * FROM $filename WHERE tentram = '$tentram'and  to_char(\"thoigian\",'yyyy/mm') ='$thang_tb'";
        $result_data = pg_query($conn, "$select_data");
        $count_rows_tenfile = pg_num_rows($result_data);
        if($count_rows_tenfile==0){
        ?>
            <script type="text/javascript">
                alert("Không tìm thấy dữ liệu tìm kiếm !");
            </script>
        <?php
        }else{
     ?>
	
		<div class="row" style="margin-top: 40px">
                <div class="col-md-8" >
                    <div id="container" style=" height: 450px; margin: 0 auto"></div>
                </div>
                <div class="col-md-4">
                    <div class="col-md-8 col-md-offset-2">
                        <p style="font-size: 15px"><b>Chú Thích WQI Trạm</b></p>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <td style="background:#fff2e6">Khoảng giá trị</td>
                            <td style="background:#fff2e6" >Chất lượng nước</td>
                        </tr>
                        <tr>
                            <td style="background-color:#f2f2f2" >91-100</td>
                            <td style="background-color:#66ccff">Sử dụng tốt cho mục đích cấp nước
                                sinh hoạt</td>
                            </tr>
                            <tr>
                                <td style="background-color:#f2f2f2" >76-90</td>
                                <td style="background-color:#66ff33">Sử dụng cho mục đích cấp nước
                                    sinh hoạt nhưng cần các biện pháp xử lý phù hợp</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#f2f2f2">51-75</td>
                                    <td style="background-color: #ffff33 " >Sử dụng cho mục đích tưới tiêu và các mục đích tương đương khác</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#f2f2f2">26-50</td>
                                    <td style="background-color:#ff8c1a">Sử dụng cho giao thông thủy và các
                                        mục đích tương đương khác</td>
                                </tr>

                                <tr>
                                    <td style="background-color:#f2f2f2" >0-25</td>
                                    <td style="background-color:#ff3333" >Nước ô nhiễm nặng, cần các biện pháp xử lý trong tương lai</td>
                                </tr>

                            </table>
                    </div>
            </div>

     <?php 
     	}
      ?>

      <script type="text/javascript">
    $(function () {    
    var defaultTitle = "Biểu đồ WQI trạm <?php echo $tentram.' '.$thang_tb?> " ; 
    var drilldownTitle = "Biểu đồ WQI thông số trạm <?php echo $tentram.' ngày '?> ";
    // Create the chart
    var chart = new Highcharts.Chart({
        chart: {
            
            renderTo: 'container',
            events: {
                drilldown: function(e) {
                    chart.setTitle({ text: drilldownTitle + e.point.name});
                },
                drillup: function(e) {
                    chart.setTitle({ text: defaultTitle });
                }
            }
        },
        title: {
            text: defaultTitle
        },
        xAxis: {
            type: 'category',
        },
        yAxis: {
            lineWidth: 1,
            tickWidth: 1,
            title:{
                text : 'Giá trị WQI',
                margin: 35
            }
        },

        legend: {
            enabled: false
        },

        tooltip: {
            headerFormat: '<div style="font-size:13px; margin-left:10px">{series.name}</div><br>',
            pointFormat: '<div style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b><br/>'
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                }
            }
        },

        series: [{
            color : '#b8b894',
            data: [<?php
            $select_databieudo = "SELECT * FROM $filename WHERE tentram = '$tentram'and  to_char(\"thoigian\",'yyyy/mm') ='$thang_tb'" ; 
            $result = pg_query($conn,"$select_databieudo");
            if($result==true){
                while($row = pg_fetch_array($result)){
                    $mau="";
                if($row['wqi_tram'] >=0 && $row['wqi_tram'] <= 25){
                    $mau= "#ff3333";
                }elseif ($row['wqi_tram'] >=26 && $row['wqi_tram'] <= 50) {
                    $mau= "#ffad33";
                }elseif ($row['wqi_tram'] >=51 && $row['wqi_tram'] <= 75) {
                    $mau= "#ffff1a";
                }elseif ($row['wqi_tram'] >=76 && $row['wqi_tram'] <= 91) {
                    $mau= "#66ff33";
                }else{
                    $mau= "#80d4ff";
                }
                        echo "{
                            name:'$row[4]',
                            y:$row[24],
                            type: 'line',
                            color: '$mau',
                            drilldown:'$row[4]'
                        },
                        ";
                    }
                }
                ?>]
            }],
            drilldown: {
                title: {
                    text: 'Biểu đồ WQI thông số tp.HCM',
                },
                series: [
                <?php 
                require("../../conn.php");
                $select_data= "SELECT * FROM $filename WHERE tentram = '$tentram'and  to_char(\"thoigian\",'yyyy/mm') ='$thang_tb'";
                $result = pg_query($conn,"$select_data");
                if ($result == true){
                    while ($row = pg_fetch_row($result)) {
                        echo "
                        {
                            type: 'column',
                            id: '$row[4]',
                            name: '$row[4]',
                            data:[
                            ['WQI_BOD',$row[15]],
                            ['WQI_COD',$row[16]],
                            ['WQI_N',$row[17]],
                            ['WQI_P',$row[18]],
                            ['WQI_TSS',$row[19]],
                            ['WQI_DO',$row[20]],
                            ['WQI_pH',$row[21]],
                            ['WQI_COLIFORM',$row[22]],
                            ['WQI_DODUC',$row[23]],

                            ]

                        },";
                    }
                }else{
                    echo "khong thanh cong";
                }
                ?>   
                ]   
            }

        })
 });
        </script>
     