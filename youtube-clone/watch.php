<?php
$conn = new mysqli("localhost", "root", "", "youtube_clone");
$id = $_GET['id'];

$result = $conn->query("SELECT * FROM videos WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2><?php echo $row['title']; ?></h2>

<video width="600" controls>
    <source src="uploads/<?php echo $row['filename']; ?>">
</video>
