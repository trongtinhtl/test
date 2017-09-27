<?php
  $username ='';
  if(isset($_GET['username'])){
    $username= $_GET['username'];
  } 
?>

<div id= " container-map-chart" style="margin-top: 30px">

<div class="col-xs-6" style="height:600PX; " >

<div id="info"> Bạn chưa chọn dữ liệu...</div>

<div id='map'></div>
</div>

<!-- Button trigger modal -->
<div  class="col-xs-6" style =" float: right; width: 50%; font-family: itim;" >


<div class="col-xs-12" >
<ul class="nav nav-tabs bg-danger" role="tablist" id="myTab">
  <li class="bg-danger" id="thongtin"  ><a id="showchart" href="#tab-info" role="tab" data-toggle="tab" onclick="show()">Thông tin vị trí</a></li>
  <li class="bg-danger"><a href="#tab-search" role="tab" data-toggle="tab" onclick="hide()">Tìm kiếm</a></li>
  <li class="bg-danger"><a href="#tab-save" role="tab" data-toggle="tab" onclick="hide()">Lưu trữ</a></li>
  <li class=" active  bg-danger"><a href="#tab-option" role="tab" data-toggle="tab" onclick="hide()">Lựa chọn dữ liệu</a></li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content col-xs-12" >
    <div class="tab-pane fade in " id="tab-info"  style="padding-top: 20px ">
        Bạn chưa chọn dữ liệu...

        
        
    </div>
  <div class="tab-pane fade" id="tab-search" style="padding-top: 20px ">
      Bạn chưa chọn dữ liệu...
  </div>
  <div class="tab-pane fade" id="tab-save"  style="padding-top: 20px ">
  		Bạn chưa chọn dữ liệu...

  </div>
  <div class="tab-pane fade in active" id="tab-option">

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


</div>

</div>
</div>


<script type="text/javascript">

$("#luachon").click(function(){
  var  lcts= $('#lc_ts').val();
  var lcngay =$('#lc_ngay').val();
  var name = "<?php echo $username ?>";
  window.location.href = "index-user.php?page=clkhongkhi&ts="+lcts+"&ngay="+lcngay+"&username="+name;

});

</script>

<script type="text/javascript" >


mapboxgl.accessToken = 'pk.eyJ1IjoidHJvbmd0aW5odGwiLCJhIjoiY2lzcXl0c2d5MDI1cDJucGhtem1rMjQ0OSJ9.-Jet1WIy1E-6z5Xv1SVd5A';

var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/bright-v9',
    maxZoom: 18,
    minZoom: 1,
    zoom: 8,
    center: [106.7, 10.7],
    attributionControl: false,
    preserveDrawingBuffer: true
});


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






</script>

<script>

$(document).ready(function(){

  $(".ct").css("display", "none");
  $("<?php echo ('#'.$ts) ?>").css("display", "block");
});





</script>