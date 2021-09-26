<!DOCTYPE html>
<html>
<head>
	<title>User</title>
</head>
<body>
<table border="1" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>E-mail</th>
		</tr>
	</thead>
	<tbody>
	<?php

foreach ($data as $contact):
	?>
		<tr>
			<td><?php print htmlentities($contact->id); ?></td>
			<td><?php print htmlentities($contact->name_user); ?></td>
			<td><?php print htmlentities($contact->email); ?></td>
		</tr>
		 <?php endforeach; ?>
	</tbody>
</table>
</body>
</html>