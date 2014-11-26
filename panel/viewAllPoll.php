<?php
	session_start();
	require 'dashboard_header.php';
  	$db = new PDO('sqlite:../db/polls.db');
	$dbPrepared = $db->prepare('SELECT * FROM Poll WHERE IDuser = ?');
	$dbPrepared->execute(array($_SESSION['ID']));
	$item = $dbPrepared->fetchAll();
?>
	<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
		<table class="table table-hover">
		  <thead>
		  	<tr>
		  	<th>#</th>
		  	<th>Title</th>
		  	<th>Votes</th>
		  	<th>#</th> 
		  	</tr>
		  </thead>
		  <tbody>

	  		<?php foreach( $item as $row) { ?>
	  			<tr>
	  			<td> <?= $row["ID"] ?> </td>
	  			<td> <?= $row["Title"] ?> </td>
	  			<td> <?= $row["Votes"] ?></td>
	  			<td> <button type="button" class="btn btn-default" aria-label="Left Align">
  						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					</button></td>
	  			</tr>
	  		<?php } ?>
		  </tbody>
		</table>
	</div>
<?php require 'dashboard_footer.php'; ?>