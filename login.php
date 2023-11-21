    
    <script>
        // Use AJAX to handle form submission
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Response from the server
                if (this.responseText.includes('success')) {
                    window.location.href = "home.php";
                } else {
                    alert('Username or Password is incorrect');
                }
            }
        };
        // Send the POST request to handle login
        xhr.open("POST", "process_login.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("username=<?php echo $username; ?>&password=<?php echo $password; ?>");
    </script>
    <?php

?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <!-- form  di bawah ini adalah form login yang akan di tampilkan di browser -->
    <form action="" method="POST">
        <table align="center">
            <tr>
                <th colspan="2"> Login Form</th>
            </tr>
            <tr>
                <td>Username</td>
                <td> <input type="text" name="username" placeholder="Enter Username" required> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td> <input type="password" name="password" placeholder="Enter Password" required> </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="proseslog" value="Login">
                </td>
            </tr>
        </table>
    </form>
    </body>

</html>
