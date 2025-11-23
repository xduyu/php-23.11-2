<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['photos[]'])) {
    $files = $_FILES['photos[]'];
    print_r($file);
    $folder = "./image/";
    if (!file_exists($folder)) {
        mkdir($folder);
    }
    $TrueTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/jpg'];
    $maxSize = (1024 * 1024 * 2);
    $result = [];
    foreach ($file['name'] as $key => $name) {
        $error = $files['error'][$key];
        $size = $files['size'][$key];
        $iType = $files['type'][$key];
        $img_name = $files['img_name'][$key];
        if ($error != UPLOAD_ERR_OK) {
            $result[] = "Upload error with $file";
            continue;
        }
        if ($size > $maxSize) {
            $result[] = "Size error with $file [max - 2mbytes]";
            continue;
        }
        if (!in_array($iType, $TrueTypes)) {
            $result[] = "Image type error with $file";
            continue;
        }
    }
} else {
    header('Location: gallery.php');
    exit;
}
