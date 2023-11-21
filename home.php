<?php
include "./connection.php";
include "./session.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        h1 {
            text-align: center;
        }
        a {
            text-decoration: none;
            color: blue;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang <?php echo $_SESSION['username']; ?></h1>
    <a href="#" onclick="logout()">Logout</a>

    <script>
        function logout() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        alert('User logged out');
                        window.location.href = 'login.php';
                    } else {
                        alert('Logout failed');
                    }
                }
            };
            xhr.open('GET', 'logout.php', true);
            xhr.send();
        }
    </script>
</body>
</html>
session 
<?php
session_start(); 
if (!isset($_SESSION['username'])) { 
    header("location:login.php");
}
?>