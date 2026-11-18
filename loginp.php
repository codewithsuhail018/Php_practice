<?php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hey here is the foof hut and cafe ,having Delicious foof and  coffee">
    <title>Login page </title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login">
    <div>
        LOGIN FOOD HUT AND CAFE
        <form action="prac_4.php" method="post">
            <div class="input"> <label for="username">Username<input type="text" name="username" id="username"
                    placeholder="Enter username here "  required autofocus> </label></div>
            <div class="input"><label for="password">Password<input type="password" id="password"
                    name="password" placeholder="Enter password here "  required></label></div>
            <div><input type="SUBMIT" value="Submit"></div>
            <span class="forget"><a href="">Forget password?</a></span>
             <span class="account"><a href="">Create account</a></span>
        </form>
    </div>





</body>

</html>

echo"welcome to world of cookie";
setcookie("username","user",time()+5 ,"/");
setcookie("username","pass",time()+5 ,"/");
echo"YOur COokie  is set";
?>