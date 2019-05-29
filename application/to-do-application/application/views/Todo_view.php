<!DOCTYPE html>
<html>
<head>
	<style>

		body{
			background-color: black;
			color: white;
		}

		.titleInput
		{
			width: 800px;
			margin-left: 370px;
		}

		table,th,td{
			border:1px solid white;

		}

		td{
			padding: 10px;
		}

		table {
			border-collapse: collapse;
  			width: 100%;
  			text-align: center;
  			margin-top: 50px;
		}

		th {
 			 height: 50px;
		}

		a{
			text-decoration: none;
			color: red;
		}

	</style>
	<title>To Do</title>
</head>
<body>
<h2 style="text-align: center;">ToDo List</h2>
<form action="<?php echo(base_url('Todo/insert')) ?>" method="post">

	<input type="text" name="title" class="titleInput">
	<input type="submit" name="send" value="add">

</form>

<table>
	<tr>
		<th>Title</th>
		<th>Status</th>
		<th>Delete</th>
	</tr>

	<?php foreach ($table as $row) { ?>

		<tr>
			<td><?php echo $row->title; ?></td>
			<td><a href="<?php echo base_url("Todo/update/$row->id/$row->status"); ?>"><?php echo $row->status; ?></a></td>
			<td><a href="<?php echo base_url("Todo/delete/$row->id"); ?>">DELETE</a></td>

		</tr>

	<?php } ?>
</table>


</body>
</html>
