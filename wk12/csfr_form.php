<?php
    session_start();
    $_SESSION['confirmation'] = 'salt';
?>
<html>
<head>
</head>
<body onload="sendLogin()">
<h1>Login</h1>
<form action="csfr_action.php" method="post">
    <input type="hidden" name="confirmation" value="salt">
	<input type="text" placeholder="Enter Username" name="username" value="host">
	<input type="password" placeholder="Enter Password" name="password" value="pass">
    <input type="submit" id="submit">
</form>
</body>
<script>
    function sendLogin(){
        document.getElementById("submit").click();
    }
</script>
</html>