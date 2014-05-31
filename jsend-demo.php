<!DOCTYPE html>
<html lang="en">
<head><title>jSEND demo</title>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="jsend.min.js"></script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>

<style type="text/css">
	textarea {height: 30%; margin-top: 10px; margin-bottom: 10px;}
</style>

<h1 class="text-center">jSEND Demo</h1>
<div class='container'>

	<div class='col-md-12'>
		Text Message ( <span id="msg-size"></span> chars )
		<textarea class="form-control" rows="3" id='msg'></textarea>
		<div class="text-center">
			<button class="btn btn-sm btn-info" id='js-com-jsend'>Compress and Send to Server</button>
		</div>
	</div>

	<div class='col-md-12'>
		Compressed by Client Script ( <span id="js-com-size">0</span> chars )
		<textarea class="form-control" rows="3" id='js-com' readonly=""></textarea>
	</div>

	<div class='col-md-12'>
		Decompressed by Server Script
		<textarea class="form-control" rows="3" id='php-dec' readonly=""></textarea>
	</div>	

</div>

<script type="text/javascript">

$(document).ready(function(){

	// javascript manipulate DOM

	$('#js-com-jsend').click(function(){

		// compress it
		var com = $.jSEND($('#msg').val());

		// show compress string
		$('#js-com').val(com);
		countsize('#js-com');
		// send to server
		$.post(
			'dec-jSEND.php',
			{compress:com},
			function(data){ 
				//console.log(data);
				$('#php-dec').val(data);
			},
			'text'
		);
	});

	$('#msg').blur(function(){ countsize('#msg');});

	countsize('#msg');
	countsize('#js-com');
});

function countsize(field){ 
	$(field+'-size').html($(field).val().length);
}

</script
</body>
</html>
