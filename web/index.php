<?php
if(!empty($_GET['id'])) {
    $url = "http://mandm.plearnjai.com/API/detailMovie.php?idmovie=".$_GET['id'];
    $json = file_get_contents($url);
    $array =json_decode($json,true);
    $urlpic = $array['response'][0]['detailMovie'][0]['Poster'];
    $imageData = base64_encode(file_get_contents($urlpic));
    echo '<img src="data:image/jpeg;base64,'.$imageData.'">';





}