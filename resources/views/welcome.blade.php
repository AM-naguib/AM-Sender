<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



    <title>Pusher Test</title>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('d20b36b25e12b6cc7ca7', {
            cluster: 'mt1'
        });

        var channel = pusher.subscribe('user.{{auth()->user()->id}}');
        channel.bind('sessionstatus', function(data) {
            console.log(data);

            alert(JSON.stringify(data));
        });
    </script>
</head>

<body>

</body>

</html>
