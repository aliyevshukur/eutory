<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Adminpanel_css.css">
</head>


<body>



  <ul id="header" id="nav">
    <li><a href="<?php echo base_url('adminpanel/adminpanel'); ?>"><img src="<?php echo base_url(); ?>assets/images/demo/admin_icon.png"></a></li>
    <li><h3>Welcome to Admin Panel</h3></li>
  </ul>

<div id="sidemenu">
 <ul>
   <li><a href="<?php echo base_url('adminpanel/Add') ?>" > Add Post </a></li>
   <li><a href="<?php echo base_url('adminpanel/Delete') ?>" > Delete Post </a></li>
   <li><a href="<?php echo base_url('adminpanel/Update') ?>"> Update Post </a></li>
 </ul>
</div>

<div id="data">
<br><br>

<form method="post" action="<?php echo(base_url('/adminpanel/add/add')); ?>">
  Title:
  <br><br>
   <input type="text" name="title"><br><br>
 Preview:
 <br><br>
   <textarea name="preview" rows="3" cols="30"></textarea><br><br>
   Article:
   <br><br>
   <textarea name="article" rows="8" cols="80"></textarea><br><br>
   <br><br>
   <select name="section">
     <option value="">null</option>
     <option value="recent">Recent articles</option>
     <option value="top">Top articles</option>
     <option value="choosed">Choosed by admin</option>
   </select>
   <br><br>
   <input type="submit" name="upload" value="Upload">
</form>

<?php

?>
</div>

</body>
</html>
