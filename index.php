<!DOCTYPE html>
<html>
<head>
	<title>Youtube Thumbnail</title>
</head>
<body>
<form action="" method="post">
	<label>Video URL</label>
	<input type="text" name="url" value="<?php if(isset($_POST["url"])) : echo strip_tags($_POST["url"]); endif?>">
	<label>Thumbnail Size</label>
	<select name="thumbSize">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="default">default</option>
		<option value="hqdefault">hqdefault</option>
		<option value="sddefault">sddefault</option>
		<option value="mqdefault">mqdefault</option>
		<option value="maxresdefault">maxresdefault</option>
	</select>
	<input type="submit" value="Gönder">
</form>

<?php
if (isset($_POST["url"]))
{
	$videoURL=strip_tags($_POST["url"]);
	$thumbnailSize=strip_tags($_POST["thumbSize"]);

	if (preg_match('%(?:youtube(?:-nocookie)?.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu.be/)([^"&?/ ]{11})%i', $videoURL, $id))
	{
        $videoId = $id[1];
    } 
    echo '<br><img src="http://img.youtube.com/vi/'.$videoId.'/'.$thumbnailSize.'.jpg">';

}
?>
</body>
</html>