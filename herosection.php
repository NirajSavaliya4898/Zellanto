<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <?php
        $qry="SELECT 
              s.title,s.sub_title,s.btn_text,s.btn_url,m.media_url 
              FROM slider s,media m 
              WHERE s.media_id=m.media_id 
              LIMIT 3";
        $result=mysqli_query($con,$qry);
        $i = 1;
        while($lst=mysqli_fetch_array($result))
        {
      ?>
    <div class="carousel-item <?php if($i == 1){ ?> active <?php } ?>">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-2 order-5">
              <h4><?php echo $lst['title']; ?></h4>
              <h4><?php echo $lst['sub_title']; ?></h4><br/>
              <a target="_blank" title="view more" href="<?php echo $lst['btn_url']; ?>"><?php echo $lst['btn_text']; ?></a> 
           </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="../zellanto/Admin/media/<?php echo $lst['media_url']; ?>" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <?php $i++; } ?>
</div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> 
  </div>