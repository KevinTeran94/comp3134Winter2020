<html>
<head>
</head>
<body>
<?php
$fileData = readfile( "storedxss.txt" );
echo  $fileData;
?>
</body>
</html>

