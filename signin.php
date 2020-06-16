<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="style_signin.css">
</head>
<body>
    <h1>Log In</h1>
    <form name="sign-in" id="form_ajax" action="signin_processing.php" method="POST">
        <input type="text" name="login" placeholder="Login"  require/>
        <input type="password" name="password" placeholder="Password" require/>
        <button type="submit" id="complite_signin" name="complite">Enter</button>
    </form>
    <h4>Don't have an account? <a href="signup.php">Registrate</a></h4>
    <div id="result_ajax_signin"></div>
</body>
</html>