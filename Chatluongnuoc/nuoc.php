<?php
$username ='';
  if(isset($_GET['username'])){
    $username= $_GET['username'];
  } 
?>
<div id= "container-map-chart" style="margin-top: 20px">

<div class="col-xs-6" style="height:500PX; " >

<div id="info"> Bạn chưa chọn dữ liệu...</div>

<div id='map'></div>
</div>

<!-- Button trigger modal -->
<div  class="col-xs-6" style =" float: right; width: 50%; font-family: itim;" >


<div class="col-xs-12" >
<ul class="nav nav-tabs bg-info" role="tablist" id="myTab">
  <li class="bg-info" id="thongtin"  ><a id="showchart" href="#tab-info" role="tab" data-toggle="tab" onclick="show()">Thông tin vị trí</a></li>
  <li class="bg-info"><a href="#tab-search" role="tab" data-toggle="tab" onclick="hide()">Tìm kiếm</a></li>
  <li class="bg-info"><a href="#tab-save" role="tab" data-toggle="tab" onclick="hide()">Lưu trữ</a></li>
  <li class=" active  bg-info"><a href="#tab-option" role="tab" data-toggle="tab" onclick="hide()">Lựa chọn dữ liệu</a></li>
 
</ul>

<!-- Tab panes -->
<div class="tab-content col-xs-12" >

    <!-- tab info -->
      <div class="tab-pane fade in " id="tab-info"  style="padding-top: 20px ">
          Bạn chưa chọn dữ liệu...       
          
      </div>


    <!-- tab search -->
      <div class="tab-pane fade" id="tab-search" style="padding-top: 20px ">
          Bạn chưa chọn dữ liệu...
      </div>

    <!-- tab save -->
      <div class="tab-pane fade" id="tab-save"  style="padding-top: 20px ">
      		Bạn chưa chọn dữ liệu...

      </div>
      <!-- tab option -->
  <div class="tab-pane fade in active" id="tab-option">

      <div class="container" style="width: 100%; margin: 20px 0px; font-size: 16px">
                  <div class="col-xs-6">
                        <div> Thông số</div>
                        <div class="input-group">
                            <span class="input-group-addon glyphicon glyphicon-star-empty"> </span>
                            <select class="form-control input-md" id= "lc_ts">
                                <option value="WQI">Chỉ số CLN WQI</option>
                                <option value="BOB">Nồng độ BOD</option>
                                <option value="COD">Nồng độ COD</option>
                                <option value="N">Nồng độ N</option>
                                <option value="CSS">Nồng độ CSS</option>
                                <option value="Coli">Nồng độ Coloform</option>
                            
                            </select>
                        </div>
                        
                      
                  </div>
                  <div class="col-xs-6">
                        <div> Ngày</div>
                        <div class="input-group">
                            <span class="input-group-addon glyphicon glyphicon-star-empty"> </span>
                            <select class="form-control input-md" id="lc_thang">                             
                                <option value="01">Tháng 1</option>
                                <option value="02">Tháng 2</option>
                                <option value="03">Tháng 3</option>
                                <option value="04">Tháng 4</option>
                                <option value="05">Tháng 5</option>
                                <option value="06">Tháng 6</option>
                                <option value="07">Tháng 7</option>
                                <option value="08">Tháng 8</option>
                                <option value="09">Tháng 9</option>
                                <option value="10">Tháng 10</option>
                                <option value="11">Tháng 11</option>
                                <option value="12">Tháng 12</option>
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
              var lcthang =$('#lc_thang').val();
              var name = "<?php echo $username ?>";
              window.location.href = 'index-user.php?page=clnuoc&ts='+lcts+'&thang='+lcthang +'&username='+ name;
            });


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


            $(document).ready(function(){
              $(".ct").css("display", "none");
              $("<?php echo ('#'.$ts) ?>").css("display", "block");
            });


</script>