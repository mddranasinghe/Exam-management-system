<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <div class="container">
		<h1>Add Notification</h1>
		<form method="post">
			<table>
				<tr>
				<td>
			<label for="title">Title:  </label></td>
			<td>
			<input type="text" id="title" name="title" required></td></tr>
<br>
<tr>
<td><label for="message">Message:</label></td>
<td><textarea id="message" name="message" required></textarea></td>

			<td><input type="submit" value="Add Notification"></td></tr>
</table>
		</form>
	</div>

    <?php

include 'db_connection.php';


if (!empty($_POST['title']) && !empty($_POST['message']))
{
$sql = "INSERT INTO notifications (title, message) VALUES ('$_POST[title]', '$_POST[message]')";
if ($conn->query($sql) === TRUE) {
    echo "Notification inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
</body>
</html> 