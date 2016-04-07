<html>
<head><title>Äcceso de usuarios:</title></head>
    <body>
    <h1>Login </h1>
    <form action="index.php?modo=login" method="post">
        <label>User:</label>
        <input type="text" name="user"/>
        <br/>
        <label>Password:</label>
        <input type="text" name="password"/>
        <input type="hidden" name="login" value="1"/>
        <input type="submit" value="Iniciar Session"/>
    </form>
    </body>
</html>