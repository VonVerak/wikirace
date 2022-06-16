<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Wiki Race</title>
    <meta name="description" content="Alpha - Wiki Race">
    <meta name="author" content="VonVerak">

    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<iframe src="https://en.wikipedia.org/wiki/Odd-eyed_cat" title="description" height="800" width="800" onLoad="alert(this.contentWindow.location);"></iframe>

<p id="test">-1</p>

<script>
    function alert(iframe)
    {
        current = parseInt(document.getElementById("test").innerHTML)
        document.getElementById("test").innerHTML = current + 1;
    }
</script>

</body>
</html>
