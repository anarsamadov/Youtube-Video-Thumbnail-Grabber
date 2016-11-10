<?php
if (isset($_POST["url"]))
{
    $videoURL=strip_tags($_POST["url"]);
    $thumbnailSize=strip_tags($_POST["thumbSize"]);

    if (preg_match('%(?:youtube(?:-nocookie)?.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu.be/)([^"&?/ ]{11})%i', $videoURL, $id))
    {
        $videoId = $id[1];
        echo '<br><img src="http://img.youtube.com/vi/'.$videoId.'/'.$thumbnailSize.'.jpg">';
    } 
    else 
    {
    	return false;
    }
}
?>
    