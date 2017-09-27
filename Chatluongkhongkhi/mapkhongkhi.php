<?php 

 if(isset($_GET["ts"]) && isset($_GET["ngay"]))
 {
  $ts = $_GET["ts"];
        $ngay = $_GET["ngay"];
        $username = $_GET["username"];
 }
   else{
    $ts = "O3";
      $ngay ="01-03-2011";
   }
      

 ?>


<div id= " container-map-chart" style="margin-top: 30px">

<div class="col-xs-6" style="height:600PX; " >

<div id="info"></div>

<div id='map'></div>
<button id ="button-source">
<span class="glyphicon glyphicon-adjust" ></span>
</button>

<div class='map-overlay top' id = "opacity">
    <div class='map-overlay-inner'>
        <label>Layer opacity: <span id='slider-value'>100%</span></label>
        <input id='slider' type='range' min='0' max='100' step='0' value='80' style=" width: 120px; height: 1px; border-radius: 3px;" />
    </div>
</div>
		<div  class="" style="margin: 0px auto" id ="chuthich">
                <div >
                      
                     <div  class="ct" id = "O3" style="display: none;">
                      
                      <div style="font-family:cursive; font-size: 0.8em; text-align: center ">
                          [ μg/m³ ]
                      </div>
              
                      <div class="col-xs-1 boxes" style="background-color: white; margin-top:2px">
                              <div class="box" style=" background-color: rgba(120, 0, 0, 0.7);"></div>  
                              <div class="box" style=" background-color: #FF0700"></div>
                              <div class="box" style=" background-color: #FF5400"></div>
                              <div class="box" style=" background-color: #FF6B00"></div>
                              <div class="box" style=" background-color: #FF8201"></div>
                              <div class="box" style=" background-color: #FF9101"></div>            
                                           
                              <div class="box" style=" background-color: #FFA801"></div>              
                              <div class="box" style="background-color: #FFC600"></div>             
                              <div class="box" style=" background-color: #E3FF01"></div>              
                              <div class="box" style="background-color: #A6FF02"></div>              
                              <div class="box" style="background-color: #2BFF00"></div>         
                              
                              <div class="box" style="background-color: #01FF4F"></div>              
                              <div class="box" style="background-color: #01FFAB;"></div>              
                              <div class="box" style="background-color: #01FFE8;"></div>              
                              <div class="box" style="background-color: #01D1FF;"></div>              
                              <div class="box" style="background-color: #0144FD;"></div>
                              <div class="box" style="background-color: #0100FF;"></div>              
                      </div>
                      <div class="col-xs-1 values" style="font-family:cursive; font-size: 0.6em; margin-left:-10px">             
                                
                                <div>120</div>
                                <div>100</div>
                                <div>95</div>
                                <div>90</div>
                     
                                <div>85</div>
                                <div>80</div>
                                <div>75</div>
                                <div>70</div>
                                <div>65</div>
                                <div>60</div>
                                <div>55</div>
                                <div>50</div>
                                <div>45</div>
                                <div>40</div>
                                <div>35</div>
                                <div>30</div>
                                <div>10</div>
                                <div>0</div>
                      </div>
                      
                      <div class="legend-empty" style="display: none;">
                                      No data loaded
                      </div>
                </div>
                <div  class="ct" id = "SO2" style="display: none;">
                      
                      <div style="font-family:cursive; font-size: 1em; text-align: center ">
                          [ μg/m³ ]
                      </div>
              
                      <div class="col-xs-1 boxes" style="background-color: white; margin-top:2px">
                              <div class="box" style=" background-color: rgba(120, 0, 0, 0.7);"></div>  
                              <div class="box" style=" background-color: #FF0700"></div>
                              <div class="box" style=" background-color: #FF5400"></div>
                              
                              <div class="box" style=" background-color: #FF8201"></div>
                              <div class="box" style=" background-color: #FF9101"></div>            
                                           
                              <div class="box" style=" background-color: #FFA801"></div>              
                                         
                              <div class="box" style=" background-color: #E3FF01"></div>              
                              <div class="box" style="background-color: #A6FF02"></div>              
                              <div class="box" style="background-color: #2BFF00"></div>         
                              
                              <div class="box" style="background-color: #01FF4F"></div>              
                              <div class="box" style="background-color: #01FFAB;"></div>              
                              <div class="box" style="background-color: #01FFE8;"></div>              
                              <div class="box" style="background-color: #01D1FF;"></div>              
                              <div class="box" style="background-color: #0144FD;"></div>
                              <div class="box" style="background-color: #0100FF;"></div>              
                      </div>
                      <div class="col-xs-1 values" style="font-family:cursive; font-size: 0.92em; margin-left:-10px">             
                                
                                <div>320</div>
                                <div>300</div>
                                <div>280</div>
                                <div>260</div>                     
                                <div>240</div>
                                <div>220</div>
                                <div>200</div>
                                <div>180</div>
                                <div>160</div>
                                <div>140</div>
                                <div>120</div>
                                <div>100</div>
                                <div>75</div>
                                <div>50</div>
                                <div>25</div>
                                <div>0</div>
                                
                      </div>
                      
                      <div class="legend-empty" style="display: none;">
                                      No data loaded
                      </div>
                </div>
                
                <div class="ct" id = "NO" style="">
                      
                      <div style="font-family:cursive; font-size: 1em; text-align: center ">
                          [ μg/m³ ]
                      </div>
              
                      <div class="col-xs-1 boxes" style="background-color: white; margin-top:2px">
                              <div class="box" style=" background-color: rgba(120, 0, 0, 0.7);"></div>  
                              <div class="box" style=" background-color: #FF0700"></div>
                            
                              <div class="box" style=" background-color: #ff5400"></div>

                              <div class="box" style=" background-color: #FF8201"></div>
                                    
                              <div class="box" style=" background-color: #FFA801"></div>              
                                         
                              <div class="box" style=" background-color: #E3FF01"></div>              
                              <div class="box" style="background-color: #A6FF02"></div>              
                           
                              <div class="box" style="background-color: #01FF4F"></div>              
                              <div class="box" style="background-color: #01FFAB;"></div>              
                                         
                              <div class="box" style="background-color: #01D1FF;"></div>              
                           
                              <div class="box" style="background-color: #0100FF;"></div>              
                      </div>
                      <div class="col-xs-1 values" style="font-family:cursive; font-size: 0.92em; margin-left:-10px">             
                                
                                <div>110</div>
                                <div>100</div>
                                <div>90</div>
                                <div>80</div>
                     
                                <div>70</div>
                                <div>60</div>
                                <div>50</div>
                                <div>40</div>
                                <div>30</div>
                                <div>20</div>
                                <div>10</div>
                                <div>0</div>
                                
                                
                      </div>
                      
                      <div class="legend-empty" style="display: none;">
                                      No data loaded
                      </div>
                </div>
                <div class="ct" id = "NO2" >
                      
                      <div style="font-family:cursive; font-size: 1em; text-align: center ">
                          [ μg/m³ ]
                      </div>
              
                      <div class="col-xs-1 boxes" style="background-color: white; margin-top:2px">
                              <div class="box" style=" background-color: rgba(120, 0, 0, 0.7);"></div>  
                              <div class="box" style=" background-color: #FF0700"></div>
                              <div class="box" style=" background-color: #FF5400"></div>
                              
                              <div class="box" style=" background-color: #FF8201"></div>
                                  
                              <div class="box" style=" background-color: #FFA801"></div>              
                                         
                              <div class="box" style=" background-color: #E3FF01"></div>              
                              <div class="box" style="background-color: #A6FF02"></div>              
                                  
                              
                              <div class="box" style="background-color: #01FF4F"></div>              
                                       
                              <div class="box" style="background-color: #01D1FF;"></div>              
                              <div class="box" style="background-color: #0144FD;"></div>
                                        
                      </div>
                      <div class="col-xs-1 values" style="font-family:cursive; font-size: 0.92em; margin-left:-10px">             
                                
                                <div>40</div>
                                <div>36</div>
                                <div>32</div>
                                <div>28</div>
                     
                                <div>24</div>
                                <div>20</div>
                                <div>16</div>
                                <div>12</div>
                                <div>8</div>
                                <div>4</div>
                                <div>0</div>
                               
                      </div>
                      
                      <div class="legend-empty" style="display: none;">
                                      No data loaded
                      </div>
                </div>
                      
                     
                </div>
    </div>
<!--  -->

    <div id="title-soure">
      
      <div>
        <input id='chuthich-check' type='checkbox' checked='checked'>
        <label for='basic'>Chú thích</label>
      </div>
      <div>
        <input id='opacity-check' type='checkbox' checked='checked'>
        <label for='basic'>Opacity</label>
      </div>
    </div>
<!-- stop play -->
<div class="Stop_Play" style="float: left; margin-right: 10px">  
  <input type="checkbox" value="None" id="Stop_Play" name="check"  style="visibility: hidden;" />
  <label for="Stop_Play"></label>
</div>
</div>
<!-- Button trigger modal -->
<div  class="col-xs-6" style =" float: right; width: 50%; font-family: itim;" >


<div class="col-xs-12" >
<ul class="nav nav-tabs bg-danger" role="tablist" id="myTab">
  <li class="active bg-danger" id="thongtin"  ><a id="showchart" href="#tab-info" role="tab" data-toggle="tab" onclick="show()">Thông tin vị trí</a></li>
  <li class="bg-danger"><a href="#tab-search" role="tab" data-toggle="tab" onclick="hide()">Tìm kiếm</a></li>
  <li class="bg-danger"><a href="#tab-save" role="tab" data-toggle="tab" onclick="hide()">Lưu trữ</a></li>
  <li class="bg-danger"><a href="#tab-option" role="tab" data-toggle="tab" onclick="hide()">Lựa chọn dữ liệu</a></li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content col-xs-12" >
    <div class="tab-pane fade in  active" id="tab-info">
        <button   id="Button_highchart" class="btn btn-primary btn-lg" style="display:none">
    
  
        </button>

      <div id= "before"  >
            <div style="height: 30px; margin:20px 20px 10px 30px; color: #0618a1; font-size: 16px; font-weight: bold"> Click chuột vào vị trí bất kì trên Map để tìm kiếm dữ liệu </div>  
            <div class="panel panel-danger">
                  <div class="panel-heading"> <strong> Các hướng dẫn cơ bản khi truy xuất biểu đồ!</strong></div>
                  <div class="panel-body">
                    <p>	
                    	- Bạn có thể tìm kiếm dữ liệu và vẽ biễu đồ theo 2 cách:
                    	<br>
                    	<div style="padding-left: 20px; margin-bottom: 10px">
						+ Cách 1: Click chuột vào bất kì một điễm trên bản đồ (phía bên trái).

						<br>
						+ Cách 2: Tìm kiếm thông qua Tab Tìm kiếm, tại đây bạn nhập thông tin vị trí bao gồm kinh độ và vĩ độ (ví dụ: 106.22 , 10.66).
						</div>
						<div style="margin-bottom: 5px">

						- Bạn có thể tương tác với Map như: Phóng to, Thu nhỏ, Di chuyễn, Bật/tắt các layer... Cũng như có thể sữ dụng chúng trong việc: tìm kiếm địa điểm, tìm kiếm đường đi.
						</div>
						<div style="margin-bottom:5px">
						- Bạn có thể lưu các điểm tìm kiếm lại để tiện việc sữ dụng, các điểm lưu được quản lí thông qua Tab Lưu trữ.
						</div>
						<div style="margin-bottom: 5px">
						- Bạn có thể lựa chọn loại dữ liệu cần tìm kiếm trong Tab "Lựa chọn dữ liệu".
						</div>
						<div style="margin-bottom: 5px">
						- Bạn có thể Download biễu đồ sau khi truy xuất bằng cách nhấn biểu tượng <span class="glyphicon glyphicon-camera">  </span> trên góc trên biễu đồ.
						</div>

                    </p>
                  </div>
            </div>

      </div>

      <div id="after" style="display: none">

            <div class="col-xs-12" >
                  <div class="col-xs-10">
                        <form class="form-style-4" action="" method="post" >            
                            
                            <label for="field1">
                            <span>Tên vị trí</span><input type="text" name="field1"  id="point-name"  />
                            </label>
                             
                            <label for="field2">
                            <span>Kinh độ</span><input type="text" name="field2"  id = "long"  />
                            </label>
                            <label for="field3">
                            <span>Vĩ độ</span><input type="text" name="field3"  id = "lat"  />
                            </label>         
                          
                        </form>
                  </div>
                  <div class="col-xs-2" style="margin-top: 10px; padding-top: 20px">
                     <button class="button-tab" id="save-point" data-toggle = "tooltip" title="Lưu" style="margin-top: 20px" >
                       <span class="glyphicon glyphicon-save"> </span>
                     </button>
                     <button class="button-tab" id="remove-point" data-toggle = "tooltip" title="Xóa" style="display: none">
                       <span class="glyphicon glyphicon-trash"></span>
                     </button>
                     <button class="button-tab" id="edit-point" data-toggle = "tooltip" title="Sửa" style="display: none">
                       <span class="glyphicon glyphicon-pencil"></span>
                     </button>
                     <button class="button-tab" id="save-again" data-toggle = "tooltip" title="Lưu lại" style="display: none">
                       <span class="glyphicon glyphicon-refresh"></span>
                     </button>
                     <button class="button-tab" id="cancle" data-toggle = "tooltip" title="Hủy bỏ" style="display: none">
                       <span class="glyphicon glyphicon-repeat"></span>
                     </button>
                  </div>
            </div>

            <button id = "modal-alert" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" style="display: none">
                
        </button>
      </div>
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel" style="font-size: 20px; font-weight: bold">Xin lỗi ! </h4>
                </div>
                <div class="modal-body">
                  Dữ liệu không được tìm thấy !<br>
                  Vị trí bạn tìm kiếm nằm ngoài phạm vi nghiên cứu. Các vị trí hợp lệ là các vị trí nằm trong bản đồ chuyên đề.
                  <br>
                  Vui lòng tìm kiếm một vị trí khác !
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
        
    </div>
  <div class="tab-pane fade" id="tab-search" >
      <div      >
      
            <div class="container" style="width: 100%; margin: 20px 0px">
                  <div class="col-xs-6">
                        <div> Kinh độ</div>
                        <div class="input-group">
                            <span class="input-group-addon"> Kinh độ </span>
                            <input type="text" class="form-control" 
                                    id = "long2" name="long_point2"  >
                        </div>
                        
                      
                  </div>
                  <div class="col-xs-6">
                        <div> Vĩ độ</div>
                        <div class="input-group">
                            <span class="input-group-addon"> Vĩ độ</span>
                            <input type="text" class="form-control" 
                                    id = "lat2" name="lat_point2"  >
                        </div>
                        
                  </div>
            </div>

            <div style="margin: 20px 0px">

                <div  class="alert alert-danger alert-dismissable" id="chuanhap"
                      style="margin: 0px 20px 1px 20px; height:35px;line-height:35px;  padding:0px 35px; display: none;">
                          <a href="#" class="close" style="margin-top: 8px">&times;</a>
                          <strong>Chưa nhập thông tin !</strong> Bạn phải điền đầy đủ thông tin.
                </div>
                <div class="alert alert-danger alert-dismissable" id="nhapsai"
                style="margin: 0px 0px;height:35px;  line-height:35px;  padding:0px 35px;display: none;">
                          <a href="#" class="close" style="margin-top: 8px">&times;</a>
                          <strong>Thông tin chưa đúng !</strong> Phải là số thập phân và phải có 2 số hạng ở hàng thập phân
                </div>
            </div>
            <div style="width:100%; margin: auto; text-align: center;">
            <button   id="Button_highchart_search" >
            Tìm kiếm         
        
            </button>
            </div>
      </div>
     

      
       <button id = "modal-alert2" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal2" style="display: none">
            
      </button>

          <!-- Modal -->
          <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title" id="myModalLabel">Xin lỗi! </h4>
                </div>
                <div class="modal-body">
                  Dữ liệu không được tìm thấy. Vị trí bạn chọn nằm ngoài vùng nghiên cứu. Vui lòng thử một vị trí khác
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  
                </div>
              </div>
            </div>
          </div>
      
       <div id="container_highchart_search" style="width: 550px; height: 380px; margin: 0 auto"></div>
  </div>
  <div class="tab-pane fade" id="tab-save">
  		<div id="chualuu" style="margin-top: 20px; font-weight: bold; text-align: center;"> Vẫn chưa có thông tin nào được lưu</div>
       <div class="list-group" id="list-group-point" style="margin-top: 20px">
         

       </div> 
        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Thay đổi thông tin</h4>
                  </div>
                  <div class="modal-body">


                      <form class="form-horizontal" role="form">
                            <div class="form-group">
                              <label for="name-edit" class="col-sm-2 control-label">Tên vị trí</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="name-edit" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="long-edit" class="col-sm-2 control-label">Kinh độ</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="long-edit" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="lat-edit" class="col-sm-2 control-label">Vĩ độ</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="lat-edit" placeholder="Email">
                              </div>
                            </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="save-edit">Save changes</button>
                  </div>
                </div>
              </div>
            </div>

  </div>
  <div class="tab-pane fade" id="tab-option">

      <div class="container" style="width: 100%; margin: 20px 0px; font-size: 16px">
                  <div class="col-xs-6">
                        <div> Thông số</div>
                        <div class="input-group">
                            <span class="input-group-addon glyphicon glyphicon-star-empty"> </span>
                            <select class="form-control input-md" id= "lc_ts">
                                <option value="AQI">Chỉ số CLKK AQI</option>
                                <option value="O3">Nồng độ O3</option>
                                <option value="CO">Nồng độ CO</option>
                                <option value="NO2">Nồng độ NO2</option>
                                <option value="NO">Nồng độ NO</option>
                                <option value="SO2">Nồng độ SO2</option>
                            
                            </select>
                        </div>
                        
                      
                  </div>
                  <div class="col-xs-6">
                        <div> Ngày</div>
                        <div class="input-group">
                            <span class="input-group-addon glyphicon glyphicon-star-empty"> </span>
                            <select class="form-control input-md" id="lc_ngay">                             
                                <option value="01-03-2011">Ngày 01/03/2011</option>
                                <option value="02-03-2011">Ngày 02/03/2011</option>
                                <option value="03-03-2011">Ngày 03/03/2011</option>
                                <option value="04-03-2011">Ngày 04/03/2011</option>
                                <option value="07-03-2011">Ngày 07/03/2011</option>
                                <option value="08-03-2011">Ngày 08/03/2011</option>
                                <option value="09-03-2011">Ngày 09/03/2011</option>
                            </select>
                            
                        </div>
                        
                  </div>


      </div>
      <div style="width:100%; margin-top: 30px; text-align: center;">
                      <button   id="luachon" >
                            Lựa Chọn        
                  
                      </button>
      </div>

  </div>
  
</div>


 <div id="container_highchart" style="width: 550px; height: 300px; margin: 0 auto">
   
 </div>
 
<form id="point_test" method="POST" action="" >
    <!-- <input type="text" id = "long" name="long_point" 
           onchange="show(this.value)"
        value ="<?php ; ?>">
            
    value ="<?php ; ?>"> -->
    
    <input type="text" id ="myDiv" name="" style="display: none">
    
</form>

</div>

</div>
</div>







<!-- lua chọn thông số -->

<script type="text/javascript">

$("#luachon").click(function(){
  var  lcts= $('#lc_ts').val();
  var lcngay =$('#lc_ngay').val();
  var name = "<?php echo $username ?>";
  window.location.href = 'index-user.php?&page=clkhongkhi&ts='+lcts+'&ngay='+lcngay+ '&username='+name;

});

</script>




<!-- mapbox -->

<script type="text/javascript" >


mapboxgl.accessToken = 'pk.eyJ1IjoidHJvbmd0aW5odGwiLCJhIjoiY2lzcXl0c2d5MDI1cDJucGhtem1rMjQ0OSJ9.-Jet1WIy1E-6z5Xv1SVd5A';

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/bright-v9',
    maxZoom: 18,
    minZoom: 1,
    zoom: 7,
    center: [106.7, 10.7],
    attributionControl: false,
    preserveDrawingBuffer: true
});




// thêm Control



map.addControl(new MapboxGeocoder({
    accessToken: mapboxgl.accessToken
}),"top-left");

map.addControl(new mapboxgl.FullscreenControl());
map.addControl(new mapboxgl.GeolocateControl());
map.addControl(new mapboxgl.NavigationControl(),'top-left');
map.addControl(new mapboxgl.ScaleControl({
    maxWidth: 100,
    unit: 'metric'
}),"bottom-right");
var slider = document.getElementById('slider');
var sliderValue = document.getElementById('slider-value');




// thêm image

function add(){ 


var Image = new Array ("00","01","02","03","04","05","06","07","08","09","10",

             "11","12","13","14","15","16","17","18","19","20","21","22","23"); 
var   imgCount = 24;


var   imgRoot = "Chatluongkhongkhi/Data/" + "<?php echo $ts.'/'.$ngay.'_' ?>";
var   imgType = ".jpg";


    for (var i = 0; i < imgCount; i++) {
        var urlimg  = imgRoot+Image[i]+imgType;
        map.addLayer({
            id: 'radar' + i,
            source: {
                type: 'image',
                url: urlimg,
                coordinates: [
                    [106.2225189, 11.20765591],
                    [107.1362381, 11.20765591],
                    [107.1362381, 10.31071186],
                    [106.2225189, 10.31071186]
                ]
            },
            type: 'raster',
            paint: {
                'raster-opacity': 0,
                'raster-opacity-transition': {
                    duration: 0
                }
            }
        });
    }



var frame = imgCount -1;

setInterval(function() 

      {     
           
            x =  document.getElementById("slider").value;
       
            map.setPaintProperty('radar' + frame, 'raster-opacity',0);        
          
            if(document.getElementById("Stop_Play").checked==true){
              frame =frame;
            }
             else{
                frame = (frame + 1) % imgCount;
            }
           
            

            document.getElementById('info').innerHTML ="<?php 
                  if($ts!='AQI'){
                    echo 'Giá trị nồng độ '.$ts.' khu vực thành phố Hồ Chí Minh ngày '.$ngay.' ';
                  }
                  else{
                    echo ('Giá trị '.$ts.' khu vực thành phố Hồ Chí Minh ngày '.$ngay.' ');
                  }
                  
             ?>" + frame +":00";

            map.setPaintProperty('radar' + frame, 'raster-opacity',parseInt(x,10)/100);

            
    
        },400); 
   
slider.addEventListener('input', function(e) {
       
        sliderValue.textContent = e.target.value + '%';
    });

 };  
    
    









map.on('load' ,function(){
  
  add();
});



map.on('load', function() {
    map.addSource('single-point', {
        "type": "geojson",
        "data": {
            "type": "FeatureCollection",
            "features": []
        }
    });

    map.addLayer({
        "id": "point",
        "source": "single-point",
        "type": "circle",
        "paint": {
            "circle-radius":4,
            "circle-color": "#000000"
        }
    });

    // Listen for the `geocoder.input` event that is triggered when a user
    // makes a selection and add a symbol that matches the result.
    
    map.on('click', function(e){
            wrapped = e.lngLat.wrap();
            map.getSource('single-point').setData({
                "type": "FeatureCollection",
                "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [wrapped.lng,wrapped.lat]
                    },
                    "properties": {
                        "title": "jfsfjh",
                        "icon": "monument"
                    }
                }]



            });
            document.getElementById("before").style.display ="none";
            document.getElementById("after").style.display ="block";
            
            document.getElementById("remove-point").style.display ="none";
            document.getElementById("edit-point").style.display ="none";
            document.getElementById("save-point").style.display ="block";
            document.getElementById("showchart").click();
            document.getElementById("point-name").readOnly=false;
            document.getElementById("long").readOnly=true;
            document.getElementById("lat").readOnly=true;
            document.getElementById("point-name").value ="Point"+n, n++;
            document.getElementById("long").value = wrapped.lng.toFixed(2);
            document.getElementById("lat").value = wrapped.lat.toFixed(2);
            document.getElementById("Button_highchart").click();
           
;
    });
    

});

</script>

<script>
var n=1;
 
function hide(){
  document.getElementById('container_highchart').style.display = "none"
 }

function show(){
  document.getElementById('container_highchart').style.display = "block"
}

function addCookie(){
    var name = document.getElementById('point-name').value;
    var log =  document.getElementById('long').value;
    var lat =  document.getElementById('lat').value;
    document.cookie=name+"="+name+","+log+","+lat;
}


$("#save-point").click(function(){
    addCookie();
    var name = document.getElementById('point-name').value;    
    var c = document.getElementById(name);
    
      if(name == ""){
        alert("Vui lòng nhập tên vị trí");
      }
      else if(c !== null)
      {
        alert("Tên vị trí đã tồn tại, Vui lòng nhập tên khác");
      }
      else
      {
      
        var button = document.createElement("div");        
        button.setAttribute("class", "list-group-item  save-info");
        button.setAttribute("id", "div"+name);
    var text = document.createElement("span");
        text.setAttribute("id",name);
    var close = document.createElement("button");
        close.setAttribute("style", "float:right; margin-top: -5px" );
        close.setAttribute("data-toggle", "tooltip" );
        close.setAttribute("data-placement", "top" );
        close.setAttribute("title", "remove" );
        close.setAttribute("class", "btn btn-link remove");
    var view = document.createElement("button");
        view.setAttribute("style", "float:right; margin-top: -5px" );
        view.setAttribute("data-toggle", "tooltip " );
        view.setAttribute("data-placement", "top" );
        view.setAttribute("title", "View" );
        view.setAttribute("class", "btn btn-link view");

    var edit = document.createElement("button");
        edit.setAttribute("style", "float:right; margin-top: -5px" );
        edit.setAttribute("data-toggle", "modal" );
        edit.setAttribute("data-placement", "top" );
        edit.setAttribute("title", "Edit" );
        edit.setAttribute("data-target", "#ModalEdit" );
        edit.setAttribute("class", "btn btn-link edit");
            
    var spanclose = document.createElement("span");
        spanclose.setAttribute("class", "glyphicon glyphicon-trash");
        close.appendChild(spanclose);
    var spanview = document.createElement("span");
        spanview.setAttribute("class", "glyphicon glyphicon-eye-open");
        view.appendChild(spanview);
    var spanedit = document.createElement("span");
        spanedit.setAttribute("class", "glyphicon glyphicon-pencil");
        edit.appendChild(spanedit);    
    var node = document.createTextNode(name);
        text.appendChild(node);
        button.appendChild (text);
        button.appendChild (close);
        button.appendChild(edit);
        button.appendChild(view);
        
        

    var element = document.getElementById("list-group-point");
    element.appendChild(button);

    $('#remove-point').show();
    $('#edit-point').show();
    $('#save-point').hide();
    document.getElementById("point-name").readOnly=true;
    document.getElementById("long").readOnly=true;
    document.getElementById("lat").readOnly=true;
    document.getElementById("chualuu").style.display="none";
   
    }
    
    
    
 
});

$("#remove-point").click(function(){
  var name = document.getElementById('point-name').value;
  document.getElementById("div"+name).remove();
    $('#remove-point').hide();
    $('#edit-point').hide();
    $('#save-point').show();
    
});

$("#edit-point").click(function(){
  document.getElementById('point-name').readOnly=false;
  document.getElementById('point-name').focus(); 
  document.getElementById('long').readOnly=false;
  document.getElementById('lat').readOnly=false;
    $('#remove-point').hide();
    $('#edit-point').hide();
    $('#save-point').hide();
    $('#save-again').show();
    $('#cancle').show();


  var text = document.getElementById('point-name').value;
  var cookie = getCookie(text);
  var res = cookie.split(",");
    $("#save-again").click(function(){
        var a = document.getElementById("point-name").value;
        var b = document.getElementById("long").value;
        var c = document.getElementById("lat").value;
        var d = document.getElementById(a);
        var text = $("#"+a).text();
        if(a==""||b==""||c==""){
          alert("Vui lòng điền đầy đủ thông tin")
        }
        else if(d !== null && text !== res[0]){
          alert("Tên vị trí đã tồn tại. Vui lòng nhập một tên khác!");
        }
        else{
          $("#"+res[0]).html(a);
         	$('#div'+ res[0]).attr('id', 'div'+a)    ;
          document.cookie= a+"="+a+","+b+","+c;          
          document.getElementById('point-name').readOnly=true;           
          document.getElementById('long').readOnly=true;
          document.getElementById('lat').readOnly=true;
            $('#remove-point').show();
            $('#edit-point').show();
            $('#save-point').hide();
            $('#save-again').hide();
            $('#cancle').hide();

        }
    });
    $("#cancle").click(function(){
      document.getElementById("point-name").value = res[0];
      document.getElementById("long").value = res[1];
      document.getElementById("lat").value = res[2];
      document.getElementById('point-name').readOnly=true;           
          document.getElementById('long').readOnly=true;
          document.getElementById('lat').readOnly=true;
            $('#remove-point').show();
            $('#edit-point').show();
            $('#save-point').hide();
            $('#save-again').hide();
            $('#cancle').hide();
    });
    
}); 

$(document).on('click','.save-info', function() { 
    



});

$(document).on('click','.remove', function() { 
   $(this).parent('.save-info').remove();


});


$(document).on('click','.edit', function() { 
  var text = $(this).parent().text();
   var cookie = getCookie(text);
   var res = cookie.split(",");
   
  
   document.getElementById("name-edit").value = res[0];
   document.getElementById("long-edit").value = res[1];
   document.getElementById("lat-edit").value = res[2];
     $('#ModalEdit').on('shown.bs.modal', function (e) {
           $("#save-edit").click(function(){
               var a = document.getElementById("name-edit").value;
               var b = document.getElementById("long-edit").value;
               var c = document.getElementById("lat-edit").value;
               $("#"+res[0]).html(a);
               document.cookie= a+"="+a+","+b+","+c;

               
           })
     });

});



function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


$(document).on('click','.view', function() {

   var text = $(this).parent().text();
   var cookie = getCookie(text);
   var res = cookie.split(",");
   document.getElementById("showchart").click();
    $('#remove-point').show();
    $('#edit-point').show();
    $('#save-point').hide();
   document.getElementById("point-name").readOnly = true;
   document.getElementById("point-name").value = res[0];
   document.getElementById("long").value = res[1];
   document.getElementById("lat").value = res[2];
   document.getElementById("Button_highchart").click();
   map.getSource('single-point').setData({
                "type": "FeatureCollection",
                "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [res[1],res[2]]
                    },
                    "properties": {
                        "title": "jfsfjh",
                        "icon": "monument"
                    }
                }]



            });

});

$(document).on('click','#exportchart', function() { 
highchartsExport.highchartsSVGtoImage($("#container_highchart"),function(uri){
   window.open(uri);
});
});



 
$("#Button_highchart").click(function () {


    
var xmlhttp;
var data_highchart ="";
var long = document.getElementById('long').value;
var lat = document.getElementById('lat').value;

if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
 xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
};
     xmlhttp.onreadystatechange=function()
{
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
        document.getElementById("myDiv").value=xmlhttp.responseText;        
       
        data_highchart = xmlhttp.responseText;
       

        var title = {
              text: "Biểu đồ thể hiện giá trị" +" <?php 
                                  if ($ts!='AQI') {
                                    echo 'nồng độ '.$ts.' của khu vưc TP.HCM ngày '.$ngay;
                                  }
                                  else{
                                    echo $ts.'của khu vưc TP.HCM ngay'.$ngay;
                                  } 

                           ?>",
                    style: {
                              
                            fontFamily: 'Itim'


                          } 
            }; 

        var xAxis = {
            title: {
			        enabled: true,
			        text: 'Thời gian [giờ]'
			    },
      			 xAxis: {
              type: 'datetime',
              tickInterval: 3600 * 1000
             
                    }
            };

        var yAxis = {
               title: {
                  text: 'Nồng độ (microgram/m3)'
               },
               plotLines: [{
                  value: 0,
                  width: 1,
                  color: '#808080'
               }]
            };  
        var tooltip = {
               valueSuffix: '  microgram/m3'
            };
        var legend = {
               layout: 'vertical',
               align: 'right',
               verticalAlign: 'middle',
               borderWidth: 0
            };
        var series =  [
               {
                  name: "<?php echo $ts ?>",
                  data: []
                                   
               }, 
               
            ];

        var items = data_highchart.split(',');

        $.each(items, function(itemNo, item) {
            if(itemNo==0){
                if(item==""){
                  document.getElementById("modal-alert").click();

                }
            }
                    
                    series[0].data[itemNo] = parseFloat(item);                    
                    
                    
                
            });

        
        var json = {};

            json.title = title;

            json.xAxis = xAxis;
            json.yAxis = yAxis;
            json.tooltip = tooltip;
            json.legend = legend;

            json.series = series;    

        

        
         
        $('#container_highchart').highcharts(json);
            
        
    }
  };


xmlhttp.open("GET","Chatluongkhongkhi/Query_khongkhi.php?long="+long+"&lat="+lat+"<?php echo '&ts='.$ts.'&ngay='.$ngay?>",true);
xmlhttp.send();


});




$(document).on('click','.close', function() { 
    
    $(this).parent('.alert').hide();


});

$("#Button_highchart_search").click(function () {

var error =false;
var regex = /^-?\d+(\.\d{2})?$/;    
var xmlhttp;
var data_highchart_search ="";
var long2 = document.getElementById('long2').value;
var lat2 = document.getElementById('lat2').value;
if ( long2=="" || lat2 =="") {
  document.getElementById('nhapsai').style.display = "none";
  document.getElementById('chuanhap').style.display = "block";
  error=true;


}
else if(regex.test(long2)==false || regex.test(lat2)==false ){
    document.getElementById('chuanhap').style.display = "none";
    document.getElementById('nhapsai').style.display = "block";
    error=true;
}

if(!error){

          document.getElementById('chuanhap').style.display = "none";
          document.getElementById('nhapsai').style.display = "none";
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
             xmlhttp=new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            };
                 xmlhttp.onreadystatechange=function()
            {
                if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                         
                   
                    data_highchart_search = xmlhttp.responseText;
                   

                    var title = {
                          text: "Biểu đồ thể hiện giá trị" +" <?php 
                                  if ($ts!='AQI') {
                                    echo 'nồng độ '.$ts.' của khu vưc TP.HCM ngày '.$ngay;
                                  }
                                  else{
                                    echo $ts.'của khu vưc TP.HCM ngay'.$ngay;
                                  } 


                           ?>"  
                        }; 

                   var xAxis = {
                            title: {
                              enabled: true,
                              text: 'Thời gian [giờ]'
                          },
                       xAxis: {
                        type: 'datetime',
                        tickInterval: 3600 * 1000,
                        min: Date.UTC(2013,4,22),
                        max: Date.UTC(2013,4,23),
                              }
                            };

                    var yAxis = {
                           title: {
                              text: 'Nồng độ (microgram/m3)'
                           },
                           plotLines: [{
                              value: 0,
                              width: 1,
                              color: '#808080'
                           }]
                        };  
                    var tooltip = {
                           valueSuffix: '  microgram/m3'
                        };
                    var legend = {
                           layout: 'vertical',
                           align: 'right',
                           verticalAlign: 'middle',
                           borderWidth: 0
                        };
                    var series =  [
                           {
                              name: "<?php echo $ts ?>",
                              data: []                
                           }, 
                           
                        ];

                    var items = data_highchart_search.split(',');

                    $.each(items, function(itemNo, item) {
                        if(itemNo==0){
                          if(item==""){
                             document.getElementById("modal-alert2").click();
                          }
                            
                        }
                                
                                series[0].data[itemNo] = parseFloat(item);                    
                                
                                
                            
                        });

                    
                    var json2 = {};


                        json2.title = title;

                        json2.xAxis = xAxis;
                        json2.yAxis = yAxis;
                        json2.tooltip = tooltip;
                        json2.legend = legend;

                        json2.series = series;
                        

                    

                    
                         
                    $('#container_highchart_search').highcharts(json2);
            
        
    }
  };


xmlhttp.open("GET","Database/Query_highchart.php?long="+long2+"&lat="+lat2+"<?php echo '&ts='.$ts.'&ngay='.$ngay?>",true);
xmlhttp.send();
map.getSource('single-point').setData({
                "type": "FeatureCollection",
                "features": [{
                    "type": "Feature",
                    "geometry": {
                        "type": "Point",
                        "coordinates": [long2,lat2]
                    },
                    "properties": {
                        "title": "jfsfjh",
                        "icon": "monument"
                    }
                }]



            });


}


});


        

     






</script>


<script type="text/javascript">

function Opentab(evt, tabName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
} ;

$(document).ready(function(){
    $("#title-soure").hide();
    $("#button-source").click(function() {
        $("#title-soure").slideToggle();
    });

});
$(document).ready(function(){

  $("#tenbd").on("click",function() {
    $("#info").toggle(this.checked);
  });
  $("#chuthich-check").on("click",function() {
    $("#chuthich").toggle(this.checked);
  });
  $("#opacity-check").on("click",function() {
    $("#opacity").toggle(this.checked);
  })
});




 (function(window){
    
    function ExportInitializator(){
        var exp = {};
        
 
        var EXPORT_WIDTH = 1000;  // Exportation width
        
    
    /**
     * This method requires the highcharts_export.js file 
     */
        exp.highchartsSVGtoImage = function(chart,callback) {
            var svg = chart.highcharts().getSVG();
            var canvas = document.createElement('canvas');
            canvas.width = chart.width();
            canvas.height = chart.height();
            var ctx = canvas.getContext('2d');

            var img = document.createElement('img');

            img.onload = function() {
                ctx.drawImage(img, 0, 0);
                callback(canvas.toDataURL('image/png'));
            };

            img.setAttribute('src', 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svg))));
        };
        
        /**
     * This method requires the highcharts_export.js file 
     */
        exp.highchartsCustomSVGtoImage = function(chart,callback){
            if(!chart){
                console.error("No chart given ");
            }
            var render_width = EXPORT_WIDTH;
            var render_height = render_width * chart.chartHeight / chart.chartWidth;

            var svg = chart.getSVG({
                exporting: {
                    sourceWidth: chart.chartWidth,
                    sourceHeight: chart.chartHeight
                }
            });
            
 
            
            var canvas = document.createElement('canvas');
            canvas.height = render_height;
            canvas.width = render_width;
            var image = new Image();
            image.src = 'data:image/svg+xml;base64,' + btoa(unescape(encodeURIComponent(svg)));
            console.log(image);
            image.addEventListener('load', function() {
                console.log(chart);
                canvas.getContext('2d').drawImage(this, 0, 0, render_width, render_height);
                callback(canvas.toDataURL('image/png'));
            }, false);

            image.src = 'data:image/svg+xml;base64,' + window.btoa(svg);
        };
         
    
    /**
     * This method requires the highcharts_export.js file 
     */
        exp.nativeSVGtoImage = function(DOMObject,callback,format){
            if(!DOMObject.nodeName){
                throw new error("Se requiere un objeto DOM de tipo SVG. Obtener con document.getElementById o un selector de jQuery $(contenedor).find('svg')[0]");
            }
                    
            var svgData = new XMLSerializer().serializeToString(DOMObject);
            var canvas = document.createElement("canvas");
            canvas.width = $(DOMObject).width();
            canvas.height = $(DOMObject).height();
            var ctx = canvas.getContext( "2d" );
            var img = document.createElement("img");
            img.setAttribute( "src", "data:image/svg+xml;base64," + btoa(unescape(encodeURIComponent(svgData))) );
            img.onload = function() {
                ctx.drawImage( img, 0, 0 );
                
                if(format === "jpeg" || format === "jpg"){
                    callback(canvas.toDataURL("image/jpeg"));
                }else{
                    callback(canvas.toDataURL("image/png"));
                }
            }; 
            return true;
        };
        
        return exp;
    }
    
    if(typeof(highchartsExport) === 'undefined'){
        window.highchartsExport = new ExportInitializator();
    }
})(window);
</script>

<script>

$(document).ready(function(){

  $(".ct").css("display", "none");
  $("<?php echo ('#'.$ts) ?>").css("display", "block");
});





</script>