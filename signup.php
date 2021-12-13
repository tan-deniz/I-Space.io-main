<?php
    include("classes/connect.php");
    include("classes/signup.php");

    $first_name = "";
    $last_name = "";
    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $signup = new Signup();
        $result = $signup->evaluate($_POST);
        
        if ($result != "") 
        {
            echo"<div style ='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "The following errors occured:<br><br>";
            echo $result;   
            echo"</div>";
        }
        else
        {
            header("Location: login.php");
            die;
        }
        
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        

    }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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

.Container_Reg {
  width: 100%;
  min-height: 100vh;
  min-width: 100vw;
  padding-left: 4%;
  padding-right: 4%;
  padding-top: 30px;
  padding-bottom: 30px;
  box-sizing: border-box;
  overflow: hidden;
}

.Logo_Container_Reg, .Nav_Links_Reg {
  display: flex;
}

.Logo_Container_Reg{
  flex: 1;
  padding-top: 20px;
}

.Logo_Container_Reg img {
  width: 220px;
  height: auto;
  max-width: 120%;
}

.Nav_Links_Reg{
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
}

.RegisterTop {
  margin-right: 20px;
}

form{
  width: 100%;
  height: 80vh;
  margin: auto;

  width: 300px;
  height: 500px;
  border: 2px solid var(--blue-highlight);
  box-sizing: border-box;
  border-radius: 15px;
}

.Register_Box {
  margin: auto;
  padding-top: 12vh;
}

.Register_Box h1 {
  width: 59px;
  height: 23px;
  margin: 20px 22px 15px 22px;
  font-size: 24px;
  line-height: 29px;
  border-top-left-radius: 50px;
}
.Register_Box h6 {
  margin: 20px 22px -15px 22px;
  font-size: 14px;
}

.Register_Line {
  margin: 15px 22px 25px 22px;
  border: 1px solid var(--blue-highlight);
  opacity: 100%;
}

.Reg_Username_Field h1 {
  width: 59px;
  height: 23px;
  margin: 20px 22px 15px 22px;
  font-size: 24px;
  line-height: 29px;
  border-top-left-radius: 50px;
}

.Reg_Username_Field,
.Reg_Email_Field,
.Reg_Password_Field,
.Reg_ConfPass_Field {
  width: 256px;
  height: 32px;
  padding: 5px 44px 15px 44px;
  margin: 20px 22px;
  text-align: center;
  background: var(--light-blue);
  border-radius: 10px;
  text-align:left;
}

.Reg_Username_Field input,
.Reg_Email_Field input,
.Reg_Password_Field input,
.Reg_ConfPass_Field input{
  border: none;
  outline: none;
  background: none;
}

i::before {
  background: transparent;
}

.Reg_Username_Field i,
.Reg_Email_Field i,
.Reg_Password_Field i,
.Reg_ConfPass_Field i {
  float: left;
  margin-left: -28px;
  margin-top: 3px;
  text-align: center;
  background: none;
  color: var(--background-purple);
  outline: none;
  border: none;
}

.Reg_Button{
  width: 100%;
  display: flex;
  margin-top: 10px;
}

.Reg_Button li a {
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
margin-left: 90px;
margin-top: -15px;
}

</style>

<body>

  <div class="Container_Reg">
    <header>
      <div class="Logo_Container_Reg">
        <img class="logo" src="images\I-SPACE_Logo.png" alt="logo">
      </div>
      <nav>
        <ul class="Nav_Links_Reg">
          <li><a class="RegisterTop" href="register.html">Register</a></li>
          <li><a class="LoginTop" href="login.html">Login</a></li>
        </ul>
      </nav>
    </header>

    <div class="Register_Box">
        <form method ="post" action = "signup.php">
            <h1>Register</h1>
            <hr class="Register_Line">

            

            <h6>Firstname</h6>
            <div class="Reg_Username_Field">
            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
            <input value = "<?php echo $first_name ?>" name="first_name" type="text" id="text" placeholder="First name">
            </div>


            <h6>Lastname</h6>
            <div class="Reg_Username_Field">
            <i class="fa fa-user fa-lg" aria-hidden="true"></i>
            <input value = "<?php echo $last_name ?>" name="last_name" type="text" id="text" placeholder="Last name">
            </div>

            <h6>Email</h6>
            <div class="Reg_Email_Field">
            <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
            <input value = "<?php echo $email ?>" name="email" type="text" id="text" placeholder="Email">
            </div>

            <h6>Password</h6>
            <div class="Reg_Password_Field">
            <i class="fa fa-key fa-lg" aria-hidden="true"></i>
            <input  name="password" type="password" id="text" placeholder="Password">
            </div>

            <h6>Confirm Password</h6>
            <div class="Reg_ConfPass_Field">
            <i class="fa fa-key fa-lg" aria-hidden="true"></i>
            <input name="password2" type="password" id="text" placeholder="Retype Password">
            </div>

            
            <ul class="Reg_Button">
            <li><input type="submit" id="button" value="Sign up"></li>
            </ul>
        </form>
      
    </div>

  </div>
</body>
</html>