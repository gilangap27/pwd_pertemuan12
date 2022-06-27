<?php
require 'function.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <?php
        if (isset($_GET['alert'])) {
            if (isset($_GET['alert']) == "gagal") {
                echo '<div class="alert alert-danger" role="alert">
                        Maaf username atau password salah
                    </div>';
            } else if (isset($_GET['alert']) == "belum login") {
                echo '<div class="alert alert-danger" role="alert">
                        Maaf anda harus login
                    </div>';
            }
        }
        ?>

        <h1 align="center">Form Login</h1>
        <table align="center">
            <form action="login.php" method="POST">
                <tr>
                    <td>
                        <label>Username</label>
                    </td>
                    <td>
                        <input class="form-control" type="text" name="username" placeholder="Username" required autocomplete="off">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Password</label>
                    </td>
                    <td>
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </td>
                </tr>
                <tr>
                    <td align="center" colspan="2">
                        <button class="btn btn-success" type="submit" class="tombol_login">Login</button>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body>

</html>