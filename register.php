<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_SESSION['users']) && isset($_SESSION['users'][$username])) {
        echo json_encode(array("success" => false, "message" => "Username already exists. Please choose a different username."));
    } else {
        $_SESSION['users'][$username] = array("username" => $username, "password" => $password);
        echo json_encode(array("success" => true, "message" => "Registration successful. Please login.", "username" => $username, "password" => $password));
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>

<body>
    <h2>Registration Form</h2>
    <form action="" method="post">
        <table align="center">
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
                    <input type="submit" name="prosesreg" value="Register">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>