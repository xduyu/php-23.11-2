<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Photo-gallery</h1>
        <form action="./upload_photo.php" method="POST" enctype="multipart/form-data">
            <h3>Select Photo</h3>
            <input type="file" name="photos[]" multiple accept=".jpg, .jpeg, .png, .gif" id="">
            <div class="">
                you can select only <span>.jpg, .jpeg, .png, .gif</span>
            </div>
            <button>Upload Photos</button>
        </form>
    </div>
</body>

</html>