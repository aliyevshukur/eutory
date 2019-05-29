<!DOCTYPE html>
<!--
Template Name: Glozzom
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>EuTory</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all"> -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/layout.css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('<?php echo base_url();?>assets/images/demo/backgrounds/01.png');">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">EuTory</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="<?php echo site_url('eutory')?>">Home</a></li>
          <!-- <li><a class="drop" href="#">Dropdown</a>
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li> -->
          <li><a href="<?php echo site_url('login') ?>">Login</a></li>
          <li><a href="<?php echo site_url('register') ?>">Register</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h2 class="heading">History of Europe</h2>
        <p>This website discovers the history of Modern Europe, starting at the Hundred Years War and ending at the present time.</p>
        <footer><a class="btn" href="#">See more</a></footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Recent posts</h6>
    </div>
    <div class="group">
      <div class="one first">
      <div class="one">
        <ul class="nospace group shukur">
          <?php foreach ($recent as $row) { ?>
            <li class="one_half first btmspace-50">
              <article>
                <h6 class="heading font-x1"><a href="#"><?php echo $row->title; ?></a></h6>
                <p class="nospace"><?php echo $row->preview; ?>&hellip;</p>
              </article>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url();?>assets/images/demo/backgrounds/02.png');">
  <article class="hoc container clear center">
    <!-- ################################################################################################ -->
    <div class="sectiontitle" style="margin-bottom:30px;">
      <h6 class="heading">Subscribe by email</h6>
      <p>Subscribe to podcasts via email for new episode releases</p>
    </div>
    <p><a class="btn medium" href="#">Get in Contact &raquo;</a></p>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Top articles</h6>
    </div>
    <div class="group">
      <div class="one first">
      <div class="one">
        <ul class="nospace group shukur">
          <?php foreach ($top as $row) { ?>
            <li class="one_half first btmspace-50">
              <article>
                <h6 class="heading font-x1"><a href="#"><?php echo $row->title; ?></a></h6>
                <p class="nospace"><?php echo $row->preview; ?>&hellip;</p>
              </article>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('<?php echo base_url();?>assets/images/demo/backgrounds/city.png');">
  <article class="hoc container clear center">
    <!-- ################################################################################################ -->
    <div class="sectiontitle" style="margin-bottom:30px;">
      <h6 class="heading">History of cities</h6>
      <p>Read about history of Europan cities</p>
    </div>
    <p><a class="btn medium" href="#">Read Now &raquo;</a></p>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear">
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <h6 class="heading">Choosed by admin</h6>
    </div>
    <div class="group">
      <div class="one first">
      <div class="one">
        <ul class="nospace group shukur">
          <?php foreach ($choosed as $row) { ?>
            <li class="one_half first btmspace-50">
              <article>
                <h6 class="heading font-x1"><a href="#"><?php echo $row->title; ?></a></h6>
                <p class="nospace"><?php echo $row->preview; ?>&hellip;</p>
              </article>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
    <!-- ################################################################################################ -->
  </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear">
    <!-- ################################################################################################ -->
    <div class="one_half first">
      <h6 class="heading">Ipsum accumsan mauris semper</h6>
      <p class="btmspace-30">Nec tortor nec ultrices donec lobortis orci vitae arcu.</p>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Tempor sollicitudin</h6>
      <ul class="nospace linklist">
        <li><a href="#">Sollicitudin sapien tortor</a></li>
        <li><a href="#">Vestibulum condimentum</a></li>
        <li><a href="#">Feugiat suspendisse rhoncus</a></li>
        <li><a href="#">Pharetra erat sed commodo</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Justo iaculis donec</h6>
      <p class="nospace btmspace-15">A condimentum odio.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url();?>assets/scripts/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/scripts/jquery.backtotop.js"></script>
<script src="<?php echo base_url();?>assets/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
 <!-- TODO:Do something -->
