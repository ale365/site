<?php 

include('../php/phpFlickr.php');

$apiKey = "005497ab9bb2931563a83fec2721cbed";
$secret = "b3409f5d03eab145";
$user_id = "128546575@N07"; // Policromo web @ yahoo.com.br
 
$f = new phpFlickr($apiKey, $secret);
$set = $f->photosets_getList($user_id);

foreach($set['photoset'] as $album){
    $fotos = $f->photosets_getPhotos($album['id']);
    return $fotos;
}



foreach($fotos['photoset']['photo'] as $foto){		
	echo "<a href='http://www.flickr.com/photos/".$user_id."/" .$foto['id'] . "/' target=\"_blank\">";
	echo "<IMG SRC='http://farm" . $foto['farm'] . ".static.flickr.com/" .$foto['server'] . "/" . $foto['id'] . "_" . $foto['secret'] . "_s.jpg' /></a>";
}

 ?>