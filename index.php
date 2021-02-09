<HTML>
<HEAD>
<TITLE></TITLE>
<META></META>
<SCRIPT></SCRIPT>
</HEAD>
<BODY>
<?php require_once 'process.php'; ?> 

	<div class="container">
<?php
	$mysqli = new mysqli('localhost', 'root', '123', 'crud');
	$result = $mysqli->query("SELECT * FROM product");
	?>
			<table class="table">
				<thead>
					<tr>
						<th>Name</th>
						<th colspan="2">Action</th>
					</tr>	
				</thead>
<?php
	while ($row = $result->fetch_assoc()) : ?>
		<tr>
			<td><?php echo $row['productname']; ?></td>
			<td> <a href="index.php?update=<?php echo $row['list']; ?>" 
					class="btn btn-info">Update</a>
				 <a href="process.php?delete=<?php echo $row['list']; ?>" 
				 	class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
			</table>
<div class="row justify-content-center">
    <form action="process.php" method="POST">
    	<div class"form-group">
        	<input type="text" name="name"
        	value="<?php echo $name; ?>" class ="form-control" placeholder ="Product Name">
    	</div>
		<div class="form-group">
			<button type="submit" name="save">Submit</button>
		</div>
	</form>
</div>
</div>
</BODY>
</HTML>