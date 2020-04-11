<?php

$value=(isset($_GET['q']) ? $_GET['q'] : '');
echo $value
?>
<html>
<head>
</head>
<body>
<form method="get">
        <input name="q" placeholder="Enter Text">
        <br/>
        <input type="submit" value="Go">
</form>
</body>
</html>

