<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
  <h2>商品展示</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php echo base_url('./images/car1.jpg'); ?>" alt="Lamborghini" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3>Lamborghini</h3>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url('./images/car2.jpg'); ?>" alt="Ferrari" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3>Ferrari</h3>
        </div>
      </div>

      <div class="item">
        <img src="<?php echo base_url('./images/car3.jpg'); ?>" alt="Koenigsegg" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3>Koenigsegg</h3>

        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
