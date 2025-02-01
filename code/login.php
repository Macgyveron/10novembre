<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="config.php" method="POST" name="move">
        <input type="text" name="username">
        <input type="password" name="code">
        <select name="role" id="role">
            <option value="admin">admin</option>
            <option value="user">user</option>
        </select>
        <input type="submit" name="action">
    </form>
</body>
</html>

