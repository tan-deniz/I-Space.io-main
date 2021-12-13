<?php

session_start();

    include("classes/connect.php");
    include("classes/login.php");

    $email = "";
    $password = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $login = new Login();
        $result = $login->evaluate($_POST);
        
        if ($result != "") 
        {
            echo"<div style ='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "The following errors occured:<br><br>";
            echo $result;   
            echo"</div>";
        }
        else
        {
            header("Location: profile.php");
            die;
        }
        
        $email = $_POST['email'];
        $password = $_POST['password'];

    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
@import "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css";
:root {
  --background-purple: #1B1227;
  --text-gray: #BFCBCD;
  --text-white: #FFFFFF;
  --blue-highlight: #66FFF6;
  --button-highlight: #2E4D5B;
  --light-blue: #A7C6FF;
  --black: #000000;
}
*,
*::before,
*::after {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  background-color: #1B1227;
}

body {
  font-family: 'Fira Sans', sans-serif;
  font-weight: 400;
  font-size: 14px;
  color: #BFCBCD;
  text-decoration: none;
}

header {
  display: flex;
  width: 100%;
  height: 10vh;
  margin: auto;
  align-items: center;
  justify-content: space-between;
}

.Container_Log {
  width: 100%;
  min-height: 100vh;
  min-width: 100vw;
  padding-left: 3.3%;
  padding-right: 3.7%;
  padding-top: 28px;
  padding-bottom: 28px;
  box-sizing: border-box;
  overflow: hidden;
}

.Logo_Container_Log, .Nav_Links_Log {
  display: flex;
}

.Logo_Container_Log{
  flex: 1;
  padding-top: 17px;
}

.Logo_Container_Log img {
  width: 220px;
  height: auto;
  max-width: 120%;

  transform: scale(0.91);
}

.Nav_Links_Log {
  flex: 1;
  justify-content: flex-end;
}

a {
  text-decoration: none;
}

ul {
  list-style-type: none;
}

nav ul li a {
  float:left;
  width: 95px;
  padding: 5px;

  color: var(--text-white);
  border: 3px solid var(--blue-highlight);
  border-radius: 10px;
  text-align: center;
  font-size: 14px;

  transform: scale(0.91);
}


.RegisterTop {
  margin-right: 10px;
}

form{
  width: 100%;
  height: 80vh;
  margin: auto;

  width: 300px;
  height: 202px;
  border: 2px solid var(--blue-highlight);
  box-sizing: border-box;
  border-radius: 15px;

  transform: scale(0.91);
}

.Login_Box {
  margin: auto;
  padding-top: 17vh;
}

.Login_Box h1 {
  width: 59px;
  height: 23px;
  margin: 20px 22px 15px 22px;
  font-size: 24px;
  line-height: 29px;
  border-top-left-radius: 50px;
}

.Login_Line {
  margin: 15px 22px 25px 22px;
  border: 1px solid var(--blue-highlight);
  opacity: 100%;
}

.Log_Username_Field h1 {
  width: 59px;
  height: 23px;
  margin: 20px 22px 15px 22px;
  font-size: 24px;
  line-height: 29px;
  border-top-left-radius: 50px;
}

.Log_Username_Field,
.Log_Password_Field {
  width: 256px;
  height: 32px;
  padding: 5px 44px 15px 44px;
  margin: 20px 22px;
  text-align: center;
  background: var(--light-blue);
  border-radius: 10px;
  text-align:left;
}

.Log_Username_Field input,
.Log_Password_Field input {
  border: none;
  outline: none;
  background: none;
}

i::before {
  background: transparent;
}

.Log_Username_Field i,
.Log_Password_Field i {
  float: left;
  margin-left: -28px;
  margin-top: 3px;
  text-align: center;
  background: none;
  color: var(--background-purple);
  outline: none;
  border: none;
}

.Login_Buttons{
  width: 100%;
  display: flex;
  margin-top: 45px;
}

.Login_Buttons li a {
  font-size: 14px;
  line-height: 9px;
  color: var(--text-white);

  background: var(--button-highlight);
  border: 3px solid var(--blue-highlight);
  border-radius: 10px;
  text-align: center;
}
.register_Button {
  width: 85px;
  height: 32px;
  padding: 9px;
  margin-left: 180px;
  cursor: pointer;
}

.submit_Button {
  width: 85px;
  height: 32px;
  padding: 9px;
  margin-left: 15px;
  cursor: pointer;
}

.forgetMyPassword_Button {
  width: 200px;
  height: 32px;
  padding: 9px;
  cursor: pointer;
  margin-left: -34px;
}

::placeholder {
  color: var(--background-purple);
  font-family: 'Fira Sans', sans-serif;
  font-size: 14px;
  font-weight: 400;
  background-color: var(--light-blue);
  border-color: var(--light-blue)
}

#button{

width: 150px;
height: 35px;
border-radius: 4px;
border: none;
background-color: #2E4D5B;
color: #BFCBCD;
border-color: var(--light-blue);
margin-left: 10px;
}

#button2{

width: 150px;
height: 35px;
border-radius: 4px;
border: none;
background-color: #2E4D5B;
color: #BFCBCD;
border-color: var(--light-blue);
margin-left: -40px;
}



</style>


<body>

  <div class="Container_Log">
    <header>
      <div class="Logo_Container_Log">
        <img class="logo" src="images\I-SPACE_Logo.png" alt="logo">
      </div>
      <nav>
        <ul class="Nav_Links_Log">
          <li><a class="RegisterTop" href="register.html">Register</a></li>
          <li><a class="LoginTop" href="login.html">Login</a></li>
        </ul>
      </nav>
    </header>

    <div class="Login_Box">
    <form>
      
        <h1>Login</h1>
        <hr class="Login_Line">


        <form method = "post">   
                <div class="Log_Username_Field">
                <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                <input name="email" value="<?php echo $email ?>" type="text" id="text" placeholder="Email"><br><br>
                </div>
                

                <div class="Log_Password_Field">
                <i class="fa fa-lock fa-lg" aria-hidden="true"></i>
                <input name="password" value="<?php echo $password ?>" type="password" id="text" placeholder="Password"><br><br>
                </div>


                <ul class="Login_Buttons">
                <li><input href="#" class="submit_Button" type="submit" id="button2" value="Forget my password"></li>
                <li><input href="#" class="submit_Button" type="submit" id="button" value="Login"></li>
            </ul>
        </form>
      </form>
    </div>

  </div>
</body>
</html>
