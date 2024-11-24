<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="process.php" method="post" id="registrationForm" enctype="multipart/form-data">
            <h2>Register</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required minlength="5" maxlength="20">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required >
            </div>
            <div class="form-group">
                <label for="age">Usia</label>
                <input type="numeric" name="age" id="age" autocomplete="off" required min="12" max="120">
            </div>
            <div>
                <label for="file">Unggah File (.txt)</label>
                <input type="file" id="file" name="file" accept=".txt" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required minlength="8" maxlength="15">
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
