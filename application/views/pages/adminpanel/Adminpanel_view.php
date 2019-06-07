<html>
<head>
<title>Admin Panel</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/Adminpanel_css.css">
</head>


<body>

  <div class="nav">
        <ul>
        <li><a href="<?php base_url('adminpanel/adminpanel') ?>"><img src="<?php echo base_url(); ?>assets/images/demo/admin_icon.png"></a></li>
        <li> <a href="#"><h3>Welcome to Admin Panel</h3></a> </li>
        </ul>
      </div>


<div id="sidemenu">
 <ul>
    <li><a href="<?php echo base_url('adminpanel/Add') ?>" > Add Post </a></li>
	<li><a href="<?php echo base_url('adminpanel/Delete') ?>" > Delete Post </a></li>
	<li><a href="<?php echo base_url('adminpanel/Update') ?>"> Update Post </a></li>
  <li> <a href="<?php echo base_url();?>/adminpanel/adminpanel/logout">Log out</a> </li>
  <li><a href="<?php echo base_url('adminpanel/Register') ?>"> Register new admin </a></li>
 </ul>
</div>

<div id="data">
<br><br>
<center><h1>Data available</h1></center>

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

</div>

</body>
</html>
