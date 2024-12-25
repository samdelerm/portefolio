<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// Simple authentication check (replace with your own logic)
if ($username == 'admin' && $password == 'password') {
    $_SESSION['loggedin'] = true;
    header("Location: index.html");
    exit();
} else {
    echo "<script>
            alert('Nom d'utilisateur ou mot de passe incorrect.');
            window.location.href = 'index.html';
          </script>";
}
?>
