<!DOCTYPE>
<html lang="en">
<body>
<form method="post">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">
    <br/>
    <input type="submit">
</form>

<?php if ($_POST['username'] == 'host' && $_POST['password'] == 'pass'): ?>
    <div>Success!</div>
<?php else: ?>
    <div>Login failed!</div>
<?php endif; ?>
</body>
</html
