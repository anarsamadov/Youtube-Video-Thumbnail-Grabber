<!DOCTYPE html>
<html>
<head>
	<title>Youtube Thumbnail</title>
</head>
<body>

<label>Video URL</label>
<input type="text" name="url" id="url">
<label>Thumbnail Size</label>
<select name="thumbSize" id="thumbSize">
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
<input type="submit" value="Gönder" id="gonder">


<div class="result"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</body>
</html>