<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        width: 100vw;
        height: 100vh;
        background-color: rgb(201,207,193);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .div1 {
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 2em;
        width: 20em;
        height: 30em;
        background-color: rgb(233,235,230);
        box-shadow: 0.3em;
        overflow-x: hidden;
        opacity:0.8;

    }

    .img1 {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    img {
        width: 5em;


    }

    .text1 {
        background-color: rgb(167, 187, 205);
        border: white;
        height: 2em;
        padding: 0.2em;
        margin-bottom: 3em;

    }

    .text1:checked {
        background-color: rgb(220, 178, 126);
        border: 1px solid rgb(233, 195, 137);

    }

    .textinput {
        margin-top: 3em;

    }

    .h3in {
        display: flex;
        justify-content: center;
    }

    .buttonin {
        display: flex;
        justify-content: center;
    }

    button {
        width: 5em;
        height: 3em;
        margin-left: 1em;
        margin-right: 1em;
    }

    input {
        width: 100%;
    }

    #regis {
        background-color: rgb(148, 127, 71);
        border: none;
        color: white;
    }

    #regis a {
        color: white;
        text-decoration: none;
    }

    #login {
        background-color: rgb(70, 165, 119);
        color: white;
        border: none;
    }

    #login a {
        color: white;
        text-decoration: none;
    }
</style>

<body>


    <div class="div1">

        <form name="signup" action="../Confirm_Login_Data_From_Database.php" method="post">
            <div class="img1"><img src="../img/account.svg" alt=""></div>
            <div class="h3in">
                <h3>使用者登入</h3>
            </div>
            <div class="textinput">

                <div>
                    <p>account</p>
                </div>
                <div><input type="text" class="text1" id="account" placeholder="account" name="username"></div>

                <div>
                    <p>password</p>
                </div>
                <div><input type="password" class="text1" id="password" placeholder="password" name="password"></div>
                <div class="buttonin">
                    <button id="regis"><a href="register.php">註冊</a></button>
                    <button id="login" type="submit">登入</button>
                </div>

            </div>

        </form>
    </div>


</body>


</html>