<?php
header('Content-type: image/jpeg');

if(!empty($_GET['id'])) {
    $url = "http://mandm.plearnjai.com/API/detailMovie.php?idmovie=" . $_GET['id'];
    $json = file_get_contents($url);
    $array = json_decode($json, true);
    $urlpic = $array['response'][0]['detailMovie'][0]['Poster'];
   // $imageData = base64_encode(file_get_contents($urlpic));
   // $percent = 0.2; // percentage of resize
    // Get new dimensions
    list($width, $height) = getimagesize($urlpic);
    // = $width * $percent;
   // $new_height = $height * $percent;

    // Resample
    $image_p = imagecreatetruecolor($new_width, $new_height);
    $image = imagecreatefromjpeg($urlpic);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, 239, 239, $width, $height);

    // Output
    imagejpeg($image_p, null, 100);
}
?>
