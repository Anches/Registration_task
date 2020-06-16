<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
    <link rel="stylesheet" href="style_signup.css">
</head>
<body>
    <h1>Registration</h1>
    <form name="sign-up" id="form_ajax" action="signup_processing.php" method="POST">
        <input type="text" name="name" placeholder="Name" require/>
        <input type="text" name="login" placeholder="Login"  require/>
        <input type="email" name="email" placeholder="E-mail" require/>
        <input type="password" name="password" placeholder="Password" require/>
        <input type="password" name="password_config" placeholder="Config Password" require/>
        <button type="submit" id="complite_signup" name="complite">Registrate</button>
    </form>
    <h4>Already have an account? <a href="signin.php">Log In</a></h4>

    <div id="result_ajax_signup"></div>
</body>
</html>