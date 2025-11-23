<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h2>Upload File</h2>
        <input type="file" name="user_file" multiple id="">
        <button>Upload</button>
        <a href='./gallery.php'>Open the Gallery</a>
    </form>
    <?php
    if (isset($_FILES['user_file']) && $_FILES['user_file']['error'] == UPLOAD_ERR_OK) {
        $file = $_FILES['user_file'];
        $folder = "./image/";
        if (!file_exists($folder)) {
            mkdir($folder);
        }
        print_r($file);
        $path = $folder . $file['name'];
        if (move_uploaded_file($file['tmp_name'], $path)) {
            echo 'file was uplouded';
        } else {
            echo 'error';
        }
    }
    ?>
</body>

</html>