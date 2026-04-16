<?php
$conn = new mysqli("localhost", "root", "", "youtube_clone");

if(isset($_POST['upload'])){
    $title = $_POST['title'];
    $file = $_FILES['video']['name'];
    $tmp = $_FILES['video']['tmp_name'];

    move_uploaded_file($tmp, "uploads/".$file);

    $conn->query("INSERT INTO videos(title, filename) VALUES('$title','$file')");
    echo "Uploaded!";
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Video Title" required>
    <input type="file" name="video" required>
    <button name="upload">Upload</button>
</form>
