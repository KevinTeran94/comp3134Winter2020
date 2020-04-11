
<html>
<head>
</head>
<body>
<h1>Login</h1>
<?php

session_start();
$session = $_SESSION['confirmation'];
$post = $_POST['confirmation'];

$display=true;
$username=isset($_POST['username']) ? $_POST['username'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';

$success="successful login";
$fail="unsuccessful login";

if($username==='host' && $password==='pass' && $session === $post){
    $display=false;
    echo "<div>".$success."</div>";
  }
  else {
      if(!empty($_POST)){
        echo "<div>".$fail."</div>";
      }
 }

if($display){
?>
<form method="post">
        <input type="text" placeholder="Enter Username" name="username">
        <input type="password" placeholder="Enter Password" name="password">
    <input type="submit">
</form>
<?php
}
?>

</body>
</html>


