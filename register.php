Here's a simple login page using **PHP + HTML**. It checks a hardcoded username and password.

### `login.php`

```php
<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Demo credentials
    $valid_username = "admin";
    $valid_password = "12345";

    if ($username === $valid_username && $password === $valid_password) {
        $message = "Login successful!";
    } else {
        $message = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 320px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #0056b3;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Login</button>
    </form>

    <?php if ($message): ?>
        <div class="message <?php echo ($message == 'Login successful!') ? 'success' : ''; ?>">
            <?php echo $message; ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
```

### How to run

1. Save the file as `login.php`.
2. Place it in your PHP server directory (e.g., `htdocs` for XAMPP).
3. Start Apache.
4. Open `http://localhost/login.php`.

**Demo credentials**

* Username: `admin`
* Password: `12345`

For a real application, use a database (e.g., MySQL), password hashing with `password_hash()`/`password_verify()`, and PHP sessions.
