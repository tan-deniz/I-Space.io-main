<?php

    session_start();
    //unset($_SESSION['mybook_userid']);

    include("classes/connect.php");
    include("classes/login.php");
    include("classes/user.php");
    include("classes/post.php");


    //check if user is logged in
    if(isset($_SESSION['mybook_userid']) && is_numeric($_SESSION['mybook_userid']))
    {
        $id = $_SESSION['mybook_userid'];
        $login = new Login();
        $result = $login->check_login($id);

        if ($result)
        {
            //retrieve user data;
            $user = new User();
            $user_data = $user->get_data($id);
            if(!$user_data)
            {
                header("Location: login.php");
                die;
            }

        }
        else
        {
            header("Location: login.php");
            die;
        }
    }
    else
    {
        header("Location: login.php");
        die;    
    }
    // posting start here

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $post = new Post();
        $id = $_SESSION['mybook_userid'];
        $result = $post->create_post($id,$_POST);
        
        if($result == "")
        {
            header("Location: profile.php");
            die;
        }
        else
        {
            echo"<div style ='text-align:center;font-size:12px;color:white;background-color:grey;'>";
            echo "The following errors occured:<br><br>";
            echo $result;   
            echo"</div>";
        }
    }

    //collect posts
    $post = new Post();
    $id = $_SESSION['mybook_userid'];
    $posts = $post->get_posts($id);

?>


<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Profile</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/69437bca27.js" crossorigin="anonymous"></script>
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
  --gold: #FFE070;
  --movies: #66FFF6;
  --tvSeries: #A7C6FF;
  --music: #7B59FF;
  --books: #A03ADB;
  --artworks: #FF4FA2;

  --gradient: linear-gradient(to right, var(--movies), var(--tvSeries), var(--music), var(--books), var(--artworks));

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
}

.Container {
  width: 100%;
  min-height: 100vh;
  max-width: 100vw;
  padding-left: 4%;
  padding-right: 3%;
  padding-top: 30px;
  padding-bottom: 30px;
  box-sizing: border-box;
  overflow: hidden;
}


/*-----------------------------------------------------*/
/*START: Navigation Menu*/
.Logo_Container, .Nav_Links {
  display: flex;
}

.Logo_Container img {
  flex: 1;
  padding-top: 20px;
  justify-content: flex-start;
  min-width: 220px;
  height: auto;
  max-width: 120%;
  object-fit: contain;
}

nav {
  flex: 2;
  margin-top: 25px;
  min-width: 15vw;
  margin-left: 2vw;
}

a {
  text-decoration: none;
}

nav ul a {
  display: block;
  width: 100px;
  height: 35px;
  padding: 5px;
  margin-right: 20px;
  box-sizing: border-box;
  color: var(--text-white);
  border-radius: 15px;
  text-align: center;
  font-size: 14px;
}

nav ul .MoviesTop {
  border: 3px solid var(--movies);
}

nav ul .TVSeriesTop {
  border: 3px solid var(--tvSeries);
}

nav ul .MusicTop {
  border: 3px solid var(--music);
}

nav ul .BooksTop {
  border: 3px solid var(--books);
}

nav ul .ArtworksTop {
  border: 3px solid var(--artworks);
}

/* Style the search box inside the navigation bar */
nav ul input[type=text] {
  flex: 1;
  float: right;
  padding: 5px 18px 5px 18px;
  border: 3px solid var(--text-white);
  border-radius: 15px;
  margin-left: 3vw;
  min-width: 350px;
  height: 35px;
  color: var(--text-white);
}

::placeholder {
  color: var(--text-white);
}

.Nav_Profile {
  display: flex;
  align-items: center;
}

.Nav_Profile img {
  flex: 1;
  margin-left: 3vw;
}

.Nav_Profile h5 {
  flex: 1;
  margin-left: 1vw;
}

.Nav_Profile li {
  list-style-type: none;
}
/*END: Navigation Menu*/
/*-----------------------------------------------------*/


.Homepage_Container {
  margin-top: 54px;
}


/*-----------------------------------------------------*/
/* START: Customize ScrollBar */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: var(--background-purple);
  border: 2px solid var(--text-white);
  border-radius: 15px;
  margin-top: 10px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: var(--text-white);
  border: 2px solid var(--text-white);
  border-radius: 15px;
  padding: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: var(--button-highlight);
}
/* END: Customize ScrollBar */
/*-----------------------------------------------------*/

/*-----------------------------------------------------*/
/*START: Side Navigation*/
.Up h3 {
  margin-top: 8vh;
  --border-width: 4px;
  --border-radius: 20px;

  background: var(--gradient);
  padding: 13px 30px;
  border-style: none;
  position: relative;
  border-radius: var(--border-radius);
  z-index: 1;
  width: 200px;
  font-size: 20px;
  color: #fff;
}

.Up h3::before {
  content: '';
  position: absolute;
  display: block;
  width: calc(100% - calc(var(--border-width)*2));
  height: calc(100% - calc(var(--border-width)*2));
  background: #3D3647;
  top: var(--border-width);
  left: var(--border-width);
  border-radius: calc(var(--border-radius) - var(--border-width));
  z-index: -1;
}

.side_nav {
  margin-top: 3vh;
  padding-top: 0.85vh;
  position: relative;
  height: 62.25vh;
  width: 200px;
  transition: 0.5s;
  overflow: hidden;
  color: #fff;
  background: #3D3647;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  border-top-right-radius: 15px;
  border-top-left-radius: 15px;
}

.side_nav ul {
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  background: #3D3647;
  padding-left: 15px;
}

.side_nav ul li {
  margin-top: 0.5vh;
  list-style: none;
  width: 200%;
  background: #3D3647;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  transition: all 200ms ease-in-out;
}

.side_nav ul li.active {
  background: var(--background-purple);
  padding-left: -10px;
}

.side_nav ul li a {
  background: transparent;
  width: 100%;
  display: block;
  text-decoration: none;
  color: var(--text-white);
  padding: 13px 100px 10px 40px;
}

.side_nav i::before {
  background: transparent;
}

.side_nav ul li a .icon {
  background: transparent;
  min-width: 60px;
  height: 40px;
  padding-right: 10px;
  margin-left: -35px;
  padding-left: 15px;
}

.side_nav ul li a .icon i {
  background: transparent;
  font-size: 1.15em;
  z-index: 1;
}

.side_nav ul li a .title {
  padding-left: 10px;
  font-size: 18px;
  background: transparent;
  margin-right: 20px;
}
/*END: Side Navigation*/
/*-----------------------------------------------------*/


/*-----------------------------------------------------*/
/*START: Tabs*/
.Tabs {
  display: flex;
}

.Tabs .tab-content{
  flex: 1;
  position: relative;
  margin: 0vh 5vw 0vh 5vw;
}

.Tabs .tab-content > div {
  position: absolute;
  opacity: 0;
}

.Tabs .tab-content > div.active {
  top: 5.5vh;
  left: 20px;
  opacity: 1;
  transition: opacity 400ms ease-in-out 85ms;
}

.Tabs .tab-content hr {
  width: 72.5vw;
  margin-bottom: 5vh;
}
/*END: Tabs*/
/*-----------------------------------------------------*/


/*START: Accounts Tab*/
/*-----------------------------------------------------*/
.users-accounts li {
  list-style: none;
  padding-bottom: 4vh;
  font-size: 1.25em;
}

.users-accounts li i {
  padding-right: 10px;
}
/*END: Accounts Tab*/
/*-----------------------------------------------------*/


/*START:List Cards*/
/*-----------------------------------------------------*/



</style>

<body>
  <div class="Container">
    <!-- Navigation Bar Section Start -->
    <header>
      <div class="Logo_Container">
        <a href="homepage.html"><img src="images/I-SPACE_Logo.png" alt="Logo"></a>
      </div>
      <nav>
        <ul class="Nav_Links">
          <a class="MoviesTop" href="homepage.html#movies">Movies</a>
          <a class="TVSeriesTop" href="homepage.html#tvSeries">TV Series</a>
          <a class="MusicTop" href="homepage.html#music">Music</a>
          <a class="BooksTop" href="homepage.html#books">Books</a>
          <a class="ArtworksTop" href="homepage.html#artworks">Artworks</a>
          <input type="text" placeholder="Search..">
        </ul>
      </nav>
      <div class="Nav_Profile">
        <a class="Profile" href="userProfile.html"><img src="images/USER.png" alt="profile_picture" style="max-width:56px"></a>
        <h5>Hi, Berna</h5>
      </div>
    </header>
    <!-- Navigation Bar Section End -->


    <!-- ---------------------------------------------------------------------------- -->
    <!-- START: Tabs -->
    <div class="Up">
      <h3>Berna's Space</h3>
    </div>

    <div class="Tabs">
      <div class="side_nav">
        <ul>
          <li class="list active">
            <a href="#">
              <span class="icon"><i class="bi bi-person-circle"></i></span>
              <span class="title">Accounts</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-film"></i></span>
              <span class="title">Movies</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-tv"></i></span>
              <span class="title">TV Series</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-music-note-beamed"></i></span>
              <span class="title">Music</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-book"></i></span>
              <span class="title">Books</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-brush"></i></span>
              <span class="title">Artworks</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-sliders"></i></span>
              <span class="title">Settings</span>
            </a>
          </li>

          <li class="list">
            <a href="#">
              <span class="icon"><i class="bi bi-box-arrow-right"></i></span>
              <span class="title">Sign Out</span>
            </a>
          </li>

        </ul>
      </div>

      <div class="tab-content">
        <div class="content active">
          <h4>Accounts</h4>
          <hr>
          <div class="users-accounts">
            <li href="#">
              <span class="account-icon"><i class="fa fa-imdb"></i></span>
              <span class="account-username">brnyildiran</span>
            </li>

            <li href="#">
              <span class="account-icon"><i class="fa fa-spotify"></i></span>
              <span class="account-username">brnyildiran</span>
            </li>

            <li href="#">
              <span class="account-icon"><i class="fab fa-goodreads"></i></span>
              <span class="account-username">brnyildiran</span>
            </li>

            <li href="#">
              <span class="account-icon"><i class="fab fa-google"></i></span>
              <span class="account-username">brnyildiran</span>
            </li>
          </div>
        </div>

        <div class="content">
          <h4>Movies</h4>
          <hr>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book.</p>
          </div>

        <div class="content">
          <h4>TV Series</h4>
          <hr>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book.</p>
        </div>

        <div class="content">
          <h4>Music</h4>
          <hr>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.</p>
        </div>

        <div class="content">
          <h4>Books</h4>
          <hr>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type
            specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
            since the 1500s, when an unknown printer took a galley of type and scrambled it to
            make a type specimen book. It has survived not only five centuries, but also the
            leap into electronic typesetting, remaining essentially unchanged. It was popularised
            in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.</p>
        </div>

        <div class="content">
          <h4>Artworks</h4>
          <hr>
          <p>It was popularised in
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus PageMaker including
            versions of Lorem Ipsum.</p>
        </div>

        <div class="content">
          <h4>Settings</h4>
          <hr>
          <p>Lorem Ipsum.</p>
        </div>

        <div class="content">
          <h4>Sign Out</h4>
          <hr>
          <p>Lorem Ipsum.
            Lorem Ipsum.
            Lorem Ipsum.</p>
        </div>
      </div>
    </div>
    <!-- ---------------------------------------------------------------------------- -->
    <!-- END: Tabs-->

    <script>
      let list = document.querySelectorAll('.list');
      let tabContent = document.querySelectorAll('.content');
      for (let i = 0; i < list.length; i++) {
        list[i].onclick = function() {
          let j = 0;
          let k = 0;
          while (j < list.length) {
            list[j++].className = '.list';
            tabContent[k++].className = '.content';
          }
          list[i].className = 'list active';
          tabContent[i].className = 'content active';
        }
      }
    </script>
</body>
