<!DOCTYPE html>
<html>
<head>
    <title>Hash Password</title>
</head>
<body>
<form method="POST">
    <input name="password" placeholder="Mot de passe">
    <button type="submit" name="generate">Valider</button>
</form>

<?php
if (isset($_POST['generate']) && !empty($_POST['password'])) {
    $pwd = $_POST['password'];
    $hash = password_hash($pwd, PASSWORD_DEFAULT);
    echo "<p>Hash: <b>" . $hash . "</b></p>";
}
?>
</body>
</html>
