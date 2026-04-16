<?php include 'config.php';

if(isset($_POST['upload'])){

    $title = $_POST['title'];
    $filename = $_FILES['video']['name'];
    $temp = $_FILES['video']['tmp_name'];

    move_uploaded_file($temp, "uploads/".$filename);

    $conn->query("INSERT INTO videos(title, filename)
                  VALUES('$title','$filename')");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Upload Video</h2>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="title" placeholder="Video Title" required><br><br>
    <input type="file" name="video" required><br><br>
    <button name="upload">Upload</button>
</form>

</body>
</html>
