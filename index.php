<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form action="" method="post">
            <label for="username">Username : </label>
            <input type="text" name="username" id="username"><br>

            <label for="password">Password : </label>
            <input type="password" name="password" id="password"><br>

            <input type="submit" value="login">
        </form>
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $given_username =  'davidles21';
                $given_password = 'baliknatayosahelloworldplease';

                $username = $_POST['username'];
                $password = $_POST['password'];

                if ($username === $given_username && $password === $given_password) {
                    session_start();

                    $_SESSION['username'] = $username;

                    header("Location: home.php");
                    echo "Login Succesful! Welcome, " .$username;
                    exit();
                } else {
                    echo "Invalid Username or Password!";
                }
            }
        ?>
    </body>
</html>