<html>
<head>
</head>
<body>
<h1>Weak password</h1>
<?php

$passwordArray=array("123456","123456789","qwerty","password","111111","12345678","abc123","1234567","password1","12345");

$password=isset($_POST['password']) ? $_POST['password'] : 'no';

if(in_array($password,$passwordArray)){

print('Successfully authenticated');
} else{
?>
<form method="post">
        <label>Password</label>
        <input type="password" name="password">
        <br/>
        <input type="submit">
</form>
<?php
}

?>

</body>
</html>






