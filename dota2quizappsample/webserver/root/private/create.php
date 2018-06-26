<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
 *
 */

if (isset($_POST['submit']))
{
	
	require "/config.php";
	require "/common.php";

	try 
	{
		$connection = new PDO($dsn, $username, $password, $options);
		
		$new_user = array(
			"TOPIC_ID" => $_POST['TOPIC_ID'],
			"TOPIC_POST"  => $_POST['TOPIC_POST'],
			"TOPIC_NAME"     => $_POST['TOPIC_NAME'],
			"USER_NAME"     => $_POST['USER_NAME'],
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"topics",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
		);
		
		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
	}

	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>

<?php require "templates/header.php"; ?>

<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>

	<blockquote style="text-align: center;"><?php echo $_POST['USER_NAME']; ?> successfully added.</blockquote>
<?php 
} ?>

	<h2>Add a Topic</h2>
	<form method="post" style="text-align: center;">
		<label for="TOPIC_NAME">Topic Name</label>
		<input type="text" name="TOPIC_NAME" id="topicName">
		<label for="TOPIC_POST">Body</label>
		<input type="text" name="TOPIC_POST" id="topicPost">
		<label for="USER_NAME">User Name</label>
		<input type="text" name="USER_NAME" id="userName">
		<label for="TOPIC_ID">Topic ID</label>
		<input type="text" name="TOPIC_ID" id="topicID">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<button><a href="index.php">Back to home</a></button>




<?php require "templates/footer.php"; 