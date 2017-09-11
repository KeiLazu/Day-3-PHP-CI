<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time In Server</title>
</head>
<body>
    <h1>Time Goes By</h1>
    <div id='result'></div>

    <script type="text/javascript">
    if (typeof(EventSource) !== "undefined") {
        var source = new EventSource("1gettimeserver.php");

        source.onmessage = function(event) {
            document.getElementById("result").innerHTML = event.data + "<br/>";
        };

    } else {
        document.getElementById("result").innerHTML = "Sorry mate, your browser does not have force to do this -Kei"

    }

    </script>

</body>
</html>