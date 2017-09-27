<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title>Cập nhật dữ liệu nước</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <form action = "quanly/thongtinnv-them-thongbao.php?username=admin" method = "POST">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <div class="row">
                <div class="col-md-12">
                  <h4 class="modal-title" style="padding-left: 200px">Cập nhật dữ liệu Nước</h4>
                </div>
              </div>
            </div> <!-- end header -->

            <div class="modal-body">
              <div class="row form-group">
                <div class="col-md-2 col-md-offset-2">
                  <p><b>CO </b></p>
                </div>
                <div class="col-md-5">
                  <input type="file" name="co">
                </div>
              </div> <!-- co-->

              <div class="row form-group">
                <div class="col-md-2 col-md-offset-2">
                  <p><b>NO </b></p>
                </div>
                <div class="col-md-5">
                  <input type="file" name="no">
                </div>
              </div> <!-- no -->

              <div class="row form-group">
                <div class="col-md-2 col-md-offset-2">
                  <p><b>SO2 </b></p>
                </div>
                <div class="col-md-5">
                  <input type="file" name="so2">
                </div>
              </div> <!-- so2 -->

              <div class="row form-group">
                <div class="col-md-2 col-md-offset-2">
                  <p><b>O3: </b></p>
                </div>
                <div class="col-md-5">
                  <input type="file" name="o3">
                </div>
              </div> <!-- O3 -->


            </div>

            <div class="modal-footer">
              <input type="submit" value="Cập nhật" class="btn btn-success" name="capnhat" >

              <a class="btn btn-default" href="quanly/dashboard.php?username=admin&active=capnhatdulieunuoc"> Hủy</a>
            </div> <!-- end footer -->

          </div> <!-- end content -->

        </div>
      </div> <!-- end modal -->
  </form>>

</body>
</html>
<script type="text/javascript">
    $(window).on('load',function(){
      $('#myModal').modal('show');
    });
  </script> <!-- auto modal -->

  <script type="text/javascript">
    jQuery('#myModal').modal('show').on('hide.bs.modal', function (e) {
      e.preventDefault();
  });
  </script>