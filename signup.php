<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die ("Connection to this database failed".mysqli_connect_error());
    }

    $name = $_POST['name'];
    $em = $_POST['email'];
    // echo "Success Connecting to the DB";
    $sql = "INSERT INTO `digibudd`.`signup` (`First name`, `Email Address`) VALUES ('$name', '$em');";
    // echo $sql;
    if($con->query($sql) ==true){
        echo "Sucessfully";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        .container{
            border: 2px solid red;
            padding: 150px;
            margin :150px;
            font-size: x-large;
            
        }
        * {
  box-sizing: border-box;
}
html {
  height: 100%;
  background: rgb(10, 36, 71);
  overflow: visible;
}
body {
  font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
  font-size: 20px;
  margin: 10px 10px;
  padding: 30px;
  width: 50%;
  position: absolute;
  left: 25%;
}

.container {
  background-color: rgb(255, 255, 255);
  padding: 5px 30px 30px 30px;
  border: 0px solid black;
  border-radius: 5px;
  box-shadow: 0px 3px 15px 1px rgb(88, 176, 248);
}

.heading {
  text-align: center;
}

input[type="text"],
input[type="email"],
select,
textarea {
  background-color: rgb(255, 255, 255);
  width: 100%;
  padding: 10px;
  border-top: 0px solid;
  border-right: 0px solid;
  border-left: 0px solid;
  border-bottom: 2px solid rgba(107, 107, 107, 0.397);
  border-radius: 1px;
}

input[type="submit"] {
  background-color: rgb(10, 36, 71);
  border: 0px solid black;
  border-radius: 50px;
  padding: 8px 15px 8px 15px;
  margin-top: 25px;
  width: 100%;
  font-size: 15px;
  cursor: pointer;
  color: white;
}

input[type="submit"]:hover {
  background-color: turquoise;
  color: black;
}

#home {
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    height: 547px;
    justify-content: center;
    align-items: center;
}

#home::before {
    content: "";
    background: url('images/mt.jpg') no-repeat center center/cover;
    position: absolute;
    top: 0px;
    left: 0px;
    height: 92%;
    /*image height*/
    width: 100%;
    z-index: -1;
    opacity: 1;
}


/*  For heading tags */

#home h1 {
    text-align: right;
    color: rgb(0, 0, 0);
}

#home h4 {
    text-align: right;
    color: black;
    font-family: 'Merriweather', serif;
}


/* For paragraphs */

#home p {
    text-align: center;
    color: rgba(255, 255, 255, 0.678);
    font-size: 1.5rem;
    font-family: 'Merriweather', serif;
    background: rgba(116, 114, 114, 0.6);
    border-radius: 10px;
}



.navbar {
    display: flex;
    align-items: right;
    padding: 20px;
    padding-left: 10%;
    padding-right: 30px;
    padding-top: 50px;
}

nav {
    flex: 1;
    text-align: right;
}

nav ul {
    display: inline-block;
    list-style: none;
}

nav ul li {
    display: inline-block;
    margin-right: 50px;
}

nav ul li a {
    text-decoration: none;
    font-size: 20px;
    color: rgb(255, 255, 255);
    font-family: sans-serif;
}

nav ul li button {
    font-size: 20px;
    color: white;
    outline: none;
    border: none;
    background: transparent;
    cursor: pointer;
    font-family: sans-serif;
}

nav ul li button:hover {
    color: rgba(245, 247, 247, 0.527)
}

nav ul li a:hover {
    color: rgba(0, 183, 255, 0.527);
}
</style>
</head>
<body>
<div class="navbar">
                <div>
                    <h1>
                        <a href='website.html'>

                </div>
                
                <nav>
                    <ul id='MenuItems'>
                        <li><a href='home.html'>Home</a></li>
                        <li><a href='index.html'>About Us</a></li>
                        <li><a href='login.php'>Login</a></li> 
                        <!-- <li><a href='signup.php'>Signup</a></li>  -->
                        <!-- <li><a href='reco.html'>Recommendations</a></li> -->

                    </ul>
                </nav>
                
            </div>

    <div class="container">
    <h1>Say Hello</h1>

        <form action="" method="post">
            <label for="name">Name : </label><br><input type="text" value="" name="name" placeholder="Name"><br>
            <label for="name">Email :</label><br><input type="text" value="" name="email" placeholder="Email">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

