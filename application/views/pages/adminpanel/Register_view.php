<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Adminpanel_css.css">
</head>


<body>



<ul id="header" id="nav">
  <li><a href="<?php echo base_url('adminpanel/adminpanel') ?>"><img src="<?php echo base_url(); ?>assets/images/demo/admin_icon.png"></a></li>
  <li><h3>Welcome to Admin Panel</h3></li>
</ul>

<div id="sidemenu">
 <ul>
   <li><a href="<?php echo base_url('adminpanel/Add') ?>" > Add Post </a></li>
 <li><a href="<?php echo base_url('adminpanel/Delete') ?>" > Delete Post </a></li>
 <li><a href="<?php echo base_url('adminpanel/Update') ?>"> Update Post </a></li>
 <li><a href="<?php echo base_url('adminpanel/Register') ?>"> Register new admin </a></li>
 </ul>
</div>

<div id="data">
<br><br>
<center><h1>Data available</h1></center>
Table:
<form method="post" action="<?php echo(base_url('/adminpanel/register/register')); ?>">

  <br><br>
  Full Name:
  <br>
  <input type="text" name="name"><br><br>
  Username:
  <br>
  <input type="text" name="username"><br><br>
  Password:
  <br>
  <input type="password" name="password"><br><br>
  <input type="submit" name="register" value="Register"><br><br>
</form>


</div>

</body>
</html>
