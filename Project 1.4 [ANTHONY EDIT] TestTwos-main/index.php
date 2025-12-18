<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <img src="avatar.jpeg" alt="avatar" width="80px" height="auto">
        <h2>Login</h2>
        <form action="process_Login.php" method="post">
            <label for="user">Username</label><br>
            <input type="text"  class="user" name="user" id="username" required><br><br>
            <label for="password">Password</label><br>
            <div class="toggle">
                <input type="password"  class="pass" name="pass" id="password" required><br><br>
                <button type="button" onclick="togglePassword" id="toggle" class="eye">
                    &#128065;
                </button>
            </div>
            <button type="submit" value="Login" class="sub">Login</button>
        </form>
    </main>

    <script>
        const passwordInput = document.getElementById('password');
        const toggleButton = document.getElementById('toggle');

        const openEye = '\u{1F441}'; // Eye icon
        const closedEye = '\u{1F648}'; // Closed eye icon

        toggleButton.addEventListener('click', () => {
            if(passwordInput.value.length === 0)return;

            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            toggleButton.textContent = type === 'password' ? openEye : closedEye;
        });
    </script>
</body>
</html>
<?php
    session_start();
    if(@$_SESSION ["adminuser"]){
        header("Location:welcome.php");
    }
?>