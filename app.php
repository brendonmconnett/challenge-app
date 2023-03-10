<!DOCTYPE html>
<html>
<head>
	<title>Photography Challenge</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#challenge-btn').click(function() {
				$.get('config.php', function(data) {
					$('#challenge').text(data);
				});
			});
		});
	</script>
</head>
<body>
	<h1>Photography Challenge</h1>
	<button id="challenge-btn">Get Challenge</button>
	<p id="challenge"></p>
</body>
</html>
