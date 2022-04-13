<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Animated Login Form </title>
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <body>

        <div class="full-page">
            <!-- <form action= "login.php" method="">
                <div class = "form group">
                    <label for = "username">Username</label>
                    <input type="username" id="username"class = "form-control"/>
                </div>
                <div class = "form-group">
                    <label for="password">Password</label>
                    <input type = "password" id ="password" class = "form-control"/>
                </div>
                <input type = "submit" class = "btn btn-primary w-100" value=
            </form> -->

            <div class="navbar">
                <div>
                    <h1>
                        <a href='website.html'>

                </div>

                <nav>
                    <ul id='MenuItems'>
                        <li><a href='home.html'>Home</a></li>
                        <li><a href='index.html'>About Us</a></li>
                        <!-- <li><a href='blog.html'>Blog</a></li> -->
                        <li><a href='signup.php'>Signup</a></li> 
                        <!-- <li><a href='reco.html'>Recommendations</a></li> -->

                    </ul>
                </nav>
                
            </div>
            <div class="center">

                <h1>Login</h1>
                <form name="f1" action="auth.php" onsubmit="return validation()" method="POST">
                    <p>
                        <label for="exampleInputEmail1" class="form-label"> UserName: </label>
                        <input type="text" id="user" name="user" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </p>
                    <p>
                        <label> Password: </label>
                        <input type="password" id="pass" name="pass" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                    </p>
                    <p>
                        <input type="submit" id="btn" value="Login" type="button" class="btn btn-success" />
                    </p>
                     <div class="signup_link">
                        Not a member? <a href="signup.php">Signup</a>
                    </div>
                </form>
           
                 <!-- <form method="post">
                    <div class="txt_field">
                        <input type="text" required>
                        <span></span>
                        <label>Username</label>
                    </div>
                    <div class="txt_field">
                        <input type="password" required>
                        <span></span>
                        <label>Password</label>
                    </div>
                    <div class="pass">Forgot Password?</div>
                    <input type="submit" value="Login">
                    <div class="signup_link">
                        Not a member? <a href="signup.html">Signup</a>
                    </div>
                    <img src="images/pandu.gif">
                </form> 
            </div> -->


    </body>

</html>