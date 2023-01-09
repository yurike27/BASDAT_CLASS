<html>
    <head>
        <title>Menggunakan metode POST</title>
    </head>
    <body>
        <h1>Menggunakan Metode Post</h1>

        <form method="POST">
            <!--- passing data didalam body request tanpa menampilkan secara URL--->
            <div>
                <label>Email</label>
                <input type="email" name="email">
            </div>
            <div>
                <label>Password</label>
                <input type="pasword" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php
            $email =@$_POST['email'];
            $password=@$_POST['password'];

            echo "Email = {$email} <br>";
            echo "passwordnya = {$password}";
            ?>
        </form>
    </body>
</html>