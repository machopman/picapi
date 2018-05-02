<?php

$image = 'http://www.majorcineplex.com/uploads/movie/1792/thumb_1792.jpg';
$imageData = base64_encode(file_get_contents($image));
echo '<img src="data:image/jpeg;base64,'.$imageData.'">';
?>