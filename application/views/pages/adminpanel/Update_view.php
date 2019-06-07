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
 </ul>
</div>

<div id="data">
<br><br>
<center><h1>Data available</h1></center>
Table:
<form method="post" action="<?php echo(base_url('/adminpanel/update/show')); ?>">
  <select name="section">
    <option value="recent">Recent articles</option>
    <option value="top">Top articles</option>
    <option value="choosed">Choosed by admin</option>
  </select>
  <br><br>
  Id:
  <br>
  <input type="number" name="id" value="ID"><br><br>
  <input type="submit" name="show" value="Show"><br><br>
</form>


<form  action="<?php echo(base_url('/adminpanel/update/update')); ?>" method="post">
<?php

if (isset($_POST['show'])) {
  ?>
  <table>
    <tr>
      <th>
        Title
      </th>
      <th>
        Preview
      </th>
      <th>
        Article
      </th>
    </tr>
    <?php foreach ($table as $row) { ?>
      <tr>
        <td>
          <input type="text" class="t1" name="title" value="<?php echo $row->title;?>"required>
        </td>
        <td>
          <input type="text" class="t1" name="title" value="<?php echo $row->title;?>" required>
        </td>
        <td>
        <input type="text" class="t1" name="title" value="<?php echo $row->title;?>"required>
        </td>
      </tr>

    <?php } ?>

  </table>
    <input type="submit" name="update" value="Update">
  </form>

  <?php } ?>
  <br><br>
</div>

</body>
</html>
