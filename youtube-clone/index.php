<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>YouTube Clone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>YouTube Clone</h1>
    <a href="upload.php">Upload Video</a>
</header>

<div class="container">

<?php
$result = $conn->query("SELECT * FROM videos ORDER BY id DESC");

while($row = $result->fetch_assoc()){
?>
    <div class="card">
        <a href="watch.php?id=<?php echo $row['id']; ?>">
            <video width="250">
                <source src="uploads/<?php echo $row['filename']; ?>">
            </video>
            <h3><?php echo $row['title']; ?></h3>
        </a>
    </div>
<?php } ?>

</div>

</body>
</html>
