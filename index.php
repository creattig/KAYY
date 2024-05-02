<!DOCTYPE html>
<html lang="en">
<head>
    <title>KAYYISA</title>
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <meta http-equiv="Content-Type" content="text/html; charset=shift_jis"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet" type="text/css">
    <link href="//use.fontawesome.com/releases/v5.7.0/css/all.css" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="padding-top:50px;">
<div class="container" style="width: 500px;">
	<div class="panel panel-default">
		<div class="panel-body">
            <textarea name="txt" cols="20" rows="15" id="txt" style="display:none;"><?php 
    $file = file_get_contents('./domain.txt');
    echo $file;
  ?></textarea>
		<div class="text-left">
			<div class="group-btn">
				<button class="btn btn-success" onclick="genz(txt.value);return false;" style="width: 120px;"><b>Generate Link</b></button>
				<font>&thinsp;</font>
			    <input type="hidden" id="sot" onclick="randl()">
                <!--<button type="button" class="btn btn-warning" onclick="ce()" id="short" style=""><b>Short URL</b></button>-->
				<font>&thinsp;</font>
			    <a onclick="window.open(document.getElementById('url').value);" class="btn btn-danger" style="cursor: pointer;">Test Link</a>
			    <div class="pull-right">
			    <button type="button" class="btn btn-xs btn-primary" id="command-add" data-row-id="0">
            <i class="fa fa-bell faa-ring animated"></i><strong> KAYYISA</strong></button>
				<font>&thinsp;</font>
			    <!--<a href="../" class="btn btn-info" style="cursor: pointer;">report</a>-->
		</div></p>
		    <div class="input-group">
			<input type="text" class="form-control input-sm" id="url" name="url" placeholder="#http://..." readonly="readonly">
            </p><span class="input-group-btn">
            <button type="button" class="btn btn-default btn-sm" onclick="copy(document.getElementById('url'),'url')"><b>Copy</b></button>
		</div></p>
		    <div class="input-group">
			<!--<input type="text" class="form-control input-sm" id="randomfield" name="randomfield" placeholder="#http://..." readonly="readonly">-->
            </p><span class="input-group-btn">
            <!--<button type="button" class="btn btn-default btn-sm" onclick="copy(document.getElementById('randomfield'),'randomfield')"><b>Copy</b></button>-->
		</div></p>
		    <div class="input-group">
			<!--<input type="text" class="form-control input-sm" id="keyword" name="keyword" placeholder="#http://..." readonly="readonly">-->
            </p><span class="input-group-btn">
            <!--<button type="button" class="btn btn-default btn-sm" onclick="copy(document.getElementById('keyword'),'keyword')"><b>Copy</b></button>-->
        </div>
    </div>
</div>
<script>
	$.getScript( "sistme.js");
</script>
</script>
</html>