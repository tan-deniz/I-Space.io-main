<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Head // holds information about the webpage,
  tells browser how it should handle the page -->

<head>
  <!-- All the available characters that can be used within this web page
    utf-8 gives maximum chance for a webpage to render correctly on browsers
    from international users-->
  <meta charset="utf-8">
  <meta name="description" content="Create your own Universe! All your favourites and explorations are in one single platform.">
  <meta name="keywords" content="Movies, TV Series, Music, Books, Artworks">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
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
.Container {
  width: 100%;
  min-height: 100vh;
  min-width: 100vw;
  padding-left: 4%;
  padding-right: 3.4%;
  padding-top: 30px;
  padding-bottom: 30px;
  box-sizing: border-box;
  overflow: hidden;
}
.Logo_Container, .Nav_Links {
  display: flex;
}
.Logo_Container{
  flex: 1;
  padding-top: 20px;
}
.Logo_Container img {
  width: 220px;
  height: auto;
  max-width: 100%;
}
.Nav_Links{
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
  margin: 0px 10px;

  color: var(--text-white);
  border: 3px solid var(--blue-highlight);
  border-radius: 10px;
  text-align: center;
  font-size: 14px;
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
}
.ForgotPass_Box {
  margin: auto;
  padding-top: 18.5vh;
}
.ForgotPass_Box h1 {
  width: 200px;
  height: 23px;
  margin: 20px 22px 15px 22px;
  font-size: 24px;
  line-height: 29px;
  border-top-left-radius: 50px;
}

.ForgotPass_Box h6 {
  margin: 20px 22px -23px 22px;
  font-size: 14px;
}

.ForgotPass_Email_Field i {
  float: left;
  margin-left: -28px;
  margin-top: 3px;
  text-align: center;
  background: none;
  color: var(--background-purple);
  outline: none;
  border: none;
  background-color: transparent;
}


.ForgotPass_Email_Field {
  width: 256px;
  height: 32px;
  padding: 5px 44px 15px 44px;
  margin: 20px 22px;
  text-align: center;
  background: var(--light-blue);
  border-radius: 10px;
  text-align:left;
}

.ForgotPass_Email_Field input {
  border: none;
  outline: none;
  background: none;
}

i::before {
  background: transparent;
}

.ForgotPass_Email_Field i {
  float: left;
  margin-left: -28px;
  margin-top: 3px;
  text-align: center;
  color: var(--background-purple);
  background: none;
  outline: none;
  border: none;
}

.ForgotPass_Buttons{
  width: 100%;
  display: flex;
  margin-top: 45px;
}
.ForgotPass_Buttons li a {
  font-size: 14px;
  line-height: 9px;
  color: var(--text-white);
  background: var(--button-highlight);
  border: 3px solid var(--blue-highlight);
  border-radius: 10px;
  text-align: center;
}
.returnButton {
  width: 135px;
  height: 32px;
  padding: 9px;
  cursor: pointer;
  margin-left: -34px;
}
.sendRequestButton {
  width: 150px;
  height: 32px;
  padding: 9px;
  margin-left: 15px;
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
.ForgotPass_line {
    margin: 15px 22px 25px 22px;
    border: 1px solid var(--blue-highlight);
    opacity: 100%;
}


</style>

<body>
  <div class="Container">
    <header>
      <div class="Logo_Container">
        <img src="images/I-SPACE_Logo.png" alt="Logo">
      </div>
      <nav>
        <ul class="Nav_Links">
          <li><a class="RegisterTop" href="register.html">Register</a></li>
          <li><a class="LoginTop" href="login.html">Login</a></li>
        </ul>
      </nav>
    </header>

    <div class="ForgotPass_Box">
      <form>
        <h1>Forgot Password</h1>
        <hr class="ForgotPass_line">

        <h6>Please enter your email address to reset your password</h6>
        <br>

        <div class="ForgotPass_Email_Field">
          <i class="fa fa-envelope fa-lg" aria-hidden="true"></i>
          <input type="text" name="" placeholder="Enter your Email">
        </div>

        <ul class="ForgotPass_Buttons">
          <li><a class="returnButton" href="login.html" type="button">Return to Login</a></li>
          <li><a class="sendRequestButton" href="#" type="submit">Request Reset Link</a></li>
        </ul>
      </form>
    </div>

  </div>
</body>

</html>
