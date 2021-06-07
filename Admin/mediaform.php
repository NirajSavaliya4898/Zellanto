<?php include("header.php");?>
<div class="wrapper">
    <?php include("sidebar.php");?>
    <div class="main-panel">
		<?php include("navbar.php");?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Insert MediaDetails</h4>
                            </div>
                            <div class="content">
                                <form action="media_insert.php" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                      <div class="col-md-8">
                                        <div class="group">
                                          <input type="file" id="imgInp" name="mediaurl" media="mediaurl" id="images"><br/>
                                          <img id="blah" src="#" alt="Media" height="100px" width="100px" />
                                          <span class="highlight"></span>
                                          <span class="bar"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input type="text" Name="mediatitle" required>
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Media Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="group">      
                                              <input rows="5" required placeholder="" Name="desc" value="">
                                              <span class="highlight"></span>
                                              <span class="bar"></span>
                                              <label>Description</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-dark pull-right">Insert</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php");?>
    </div>
</div>
    <?php include("bootomfooter.php");?>
</body>
