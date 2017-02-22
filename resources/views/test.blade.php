
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
</head>
<body>
	<p id="power">0</p>


	<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous"></script>
	<script src="{{url('/js/socket.io.js')}}"></script>

    <script>
    $(document).ready(function(){
	    var socket = io('http://localhost:3000');
	    socket.on("test-channel:App\\Events\\broadcastEvent", function(message){
        // increase the power everytime we load test route
        	console.log(message.data.power);
        	$('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));

    	});
     });
    </script>

</body>
</html>