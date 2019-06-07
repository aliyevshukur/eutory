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
 <li><a href="<?php echo base_url('adminpanel/Register') ?>"> Register new admin </a></li>
 </ul>
</div>

<div id="data">
<br><br>

<form method="post" action="<?php echo(base_url('/adminpanel/Delete/delete')); ?>">
  Id:
  <br><br>
   <input type="number" name="id"><br><br>

   <select name="tablename">
     <option value="">null</option>
     <option value="recent">Recent articles</option>
     <option value="top">Top articles</option>
     <option value="choosed">Choosed by admin</option>
   </select>
   <br><br>
   <input type="submit" name="delete" value="Delete">
</form>

<br><br>
<?php foreach ($tables as $table) { ?>

  <table>
    <tr>
      <th>
        ID
      </th>
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
          <?php echo $row->id;?>
        </td>
        <td>
          <?php echo $row->title;?>
        </td>
        <td>
          <?php echo $row->preview;?>
        </td>
        <td>
          <?php echo $row->article;?>
        </td>
      </tr>
    <?php } ?>
  </table>
  <br><br><br><br><br><br>
<?php } ?>
<?php

?>
</div>

</body>
</html>
