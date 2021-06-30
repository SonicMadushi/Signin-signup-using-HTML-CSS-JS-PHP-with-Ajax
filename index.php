<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION["name"])) {
?>
    <script src="script.js"></script>
    <script>
        gotohome();
    </script>
<?php
} else {
?>

    <head>
        <title>Sign In</title>
        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="style.css" />
    </head>

    <body class="b">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="ui">

                <h1>Sign In</h1>
                <p class="t" id="txt"></p>

                <p id="msg"></p>

                <span>Email</span>
                <input type="email" id="uemail"class="form-control" /><br /><br />

                <span>Password</span>
                <input type="password" id="upassword"  class="form-control"/><br /><br />

                <button class="btn btn-outline-primary" type="submit" onclick="signin();">Sign In</button>
                <button class="btn btn-outline-sucess" type="submit" onclick="reg();">Register</button>
            </div>
        </div>
        </div>
            <script src="script.js"></script>
    </body>

<?php
}
?>