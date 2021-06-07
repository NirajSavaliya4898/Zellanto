<link rel="stylesheet" type="text/css" href="assets/css/border.css">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Media</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="panel-heading">
          <ul class="nav nav-tabs">
            <!-- <li class="active" ><a href="#Tabs-1" data-toggle="tab" class="btn-9"><i class="fa fa-camera" aria-hidden="true"></i> Media Upload</a></li> -->
            <li><a href="#Tabs-2" data-toggle="tab" class="btn-9"><i class="fa fa-file-text" aria-hidden="true"></i>Your Media</a></li>
          </ul>
        </div>
      </div>
      <div class="modal-body" style="height: 500px; overflow: scroll;">
        <div class="panel-body">
          <div class="tab-content">
            <!-- <div class="tab-pane fade in active" id="Tabs-1">
              <div class="row">
                <form id="form1" action="upload_insert.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <div class="group">
                        <input type="file" id="imgInp" name="mediaurl"><br>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Upload Your Media </label>
                        <img id="blah" alt="Media" src="#" height="100px" width="100px" /><br><br>
                      </div>
                      <div class="group">
                        <input type="text" required placeholder="" Name="mediatitle" value=""><br>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Media Title</label>
                      </div>
                      <div class="group">
                        <input type="text" rows="5" required Name="desc" value="">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label>Description</label>
                      </div>
                      <div class="modal-footer">
                          <button type="Submit" id="upload_media" name="Submit" class="btn btn-primary">Upload Media</button>
                          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
              </div>
            </div> -->
            <div class="tab-pane fade in active" id="Tabs-2">
              <div class="col-md-12">
                <form id="form2" method="POST" action="#">
                  <div class="form-group files">
                    <?php
                    include("connection.php");
                    $qry="select * from media";
                    $result=mysqli_query($con,$qry);
                    while($lst=mysqli_fetch_array($result))
                    {
                      $_SESSION['last_id'] = $lst['media_id'];
                    ?>
                    <div class="col-md-4 item">
                      <h7><?php echo $lst['media_title']; ?></h7>
                      <div class="image"><img style='height:100px;width:100px;' src="../Admin/media/<?php echo $lst['media_url']; ?>" class="img-fluid"></div>
                      <input type="radio" name="rdo_media" value="<?php echo $lst['media_id']; ?>" data-url="../Admin/media/<?php echo $lst['media_url']; ?>">
                    </div>
                    <?php 
                    }
                    ?>
                    <div class="modal-footer">
                      <button type="button" id="select_media" data-dismiss="modal" class="btn btn-primary">Select Media</button><br/>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
    </div>
  </div>
</div>

<!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

  <!--  Charts Plugin -->
  <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

  <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
  <script src="assets/js/demo.js"></script>

  <!-- For Editor-->
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> 
  <script type="text/javascript">
  //<![CDATA[
  bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>

</html>
<script type="text/javascript">
  $('#select_media').click(function()
  {
    var mid=$("input[name='rdo_media']:checked").val()
    $("#txtmid").val(mid);
    var imgsrc=$("input[name='rdo_media']:checked").data("url");    
    $("#media_image").attr("src",imgsrc)
    $("#media_image").css("visibility","visible")
  })
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>

