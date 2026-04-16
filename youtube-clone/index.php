<?php
$conn = new mysqli("localhost", "root", "", "youtube_clone");
$result = $conn->query("SELECT * FROM videos");
?>

<link rel="stylesheet" href="style.css">

<h1>YouTube Clone</h1>

<?php while($row = $result->fetch_assoc()){ ?>
    <div class="video">
        <a href="watch.php?id=<?php echo $row['id']; ?>">
            <video width="300">
                <source src="uploads/<?php echo $row['filename']; ?>">
            </video>
            <p><?php echo $row['title']; ?></p>
        </a>
    </div>
<?php } ?>
