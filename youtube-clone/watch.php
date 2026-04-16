<?php include 'config.php';

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM videos WHERE id=$id");
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2><?php echo $row['title']; ?></h2>

<video width="800" controls autoplay>
    <source src="uploads/<?php echo $row['filename']; ?>">
</video>

<br><br>
<a href="index.php">⬅ Back</a>

</body>
</html>
