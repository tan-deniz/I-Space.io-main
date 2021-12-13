<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
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

ul {
  list-style-type: none;
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
/*START: Daily Shuffle and From_Your_Collection_Row Statistics Allignments*/
.ShuffleAndStats {
  display: flex;
  padding-top: 54px;
}

.Shuffle {
  width: 75vw;
}

.Stats {
  width: 25vw;
  margin-left: 5vw;
}
/*END: Daily Shuffle and From_Your_Collection_Row Statistics Allignments*/
/*-----------------------------------------------------*/


/*-----------------------------------------------------*/
/* START: Daily Shuffle */
.Daily_Shuffle h4 {
  width: 175px;
  height: 45px;
  left: 80px;
  top: 169px;

  border: 3px solid var(--gold);
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 5px;
}

.Daily_Shuffle .Cards {
  display: flex;
  position: relative;
  width: 100%;
  padding-top: 23px;
  padding-bottom: 100px;
  justify-content: flex-start;
}

/* The flip card container - set the width and height to whatever you want.
We have added the border property to demonstrate that the flip itself goes out
of the box on hover (remove perspective if you don't want the 3D effect */
.Flip_Card_Movie,
.Flip_Card_TVSerie,
.Flip_Card_Music,
.Flip_Card_Book,
.Flip_Card_Artwork {
  flex: 2;
  background-color: transparent;
  width: 170px;
  height: 250px;
  perspective: 1000px; /* Remove this if you don't want the 3D effect */
  margin-right: 30px;
}

/* This container is needed to position the front and back side */
.Flip_Card_Movie_Inner,
.Flip_Card_TVSerie_Inner,
.Flip_Card_Music_Inner,
.Flip_Card_Book_Inner,
.Flip_Card_Artwork_Inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

/* Position the front and back side */
.Flip_Card_Movie_Front, .Flip_Card_Movie_Back,
.Flip_Card_TVSerie_Front, .Flip_Card_TVSerie_Back,
.Flip_Card_Music_Front, .Flip_Card_Music_Back,
.Flip_Card_Book_Front, .Flip_Card_Book_Back,
.Flip_Card_Artwork_Front, .Flip_Card_Artwork_Back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden; /* Safari */
  backface-visibility: hidden;
}

/* Style the front side (fallback if image is missing) */
.Flip_Card_Movie_Front,
.Flip_Card_TVSerie_Front,
.Flip_Card_Music_Front,
.Flip_Card_Book_Front,
.Flip_Card_Artwork_Front {
  background: none;
  border: 2px solid var(--gold);
  border-radius: 10px;
  font-size: 24px;
  color: var(--text-white);
}

.Flip_Card_Movie_Front p,
.Flip_Card_TVSerie_Front p,
.Flip_Card_Music_Front p,
.Flip_Card_Book_Front p,
.Flip_Card_Artwork_Front p {
  text-align: left;
  font-size: 20px;
  background: none;
  transform: rotate(-90deg) translate(-23%,0);
  transform-origin: right bottom;
  border-radius: 10px;
}

/* Style the back side */
.Flip_Card_Movie_Back,
.Flip_Card_TVSerie_Back,
.Flip_Card_Music_Back,
.Flip_Card_Book_Back,
.Flip_Card_Artwork_Back {
  border: 2px solid var(--gold);
  border-radius: 10px;
  font-size: 24px;
  color: var(--text-white);

  justify-content: center;
  align-items: center;

  transform: rotateY(180deg);
}

.Flip_Card_Movie_Back p,
.Flip_Card_TVSerie_Back p,
.Flip_Card_Music_Back p,
.Flip_Card_Book_Back p,
.Flip_Card_Artwork_Back p {
  background: none;
  border-radius: 10px;
}

.Flip_Card_Movie_Back {
  background: #356978;
}

.Flip_Card_TVSerie_Back {
  background: #505D8D;
}

.Flip_Card_Music_Back {
  background: #3C2971;
}

.Flip_Card_Book_Back {
  background: #571F72;
}

.Flip_Card_Artwork_Back {
  background: #5F244C;
}
/* END: Daily Shuffle */
/*-----------------------------------------------------*/


/*-----------------------------------------------------*/
/*START: Your Statistics Table*/
.Your_Statistics h4 {
  width: 195px;
  height: 45px;
  top: 169px;

  border: 3px solid #FFFFFF;
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 6px;
}

.Your_Statistics table {
  position: relative;
  border-radius: 10px;
  width: 305px;
  height: 275px;
}

table {
  margin-top: 28px;
  border-collapse: separate !important;
  border-spacing: 0px;
  border-radius: 10px;
  border-style: hidden;
}

table tr:first-child td:first-child {
  border-top-left-radius: 10px;
}

table tr:first-child td:last-child {
  border-top-right-radius: 10px;
}

table tr:last-child td:first-child {
    border-bottom-left-radius: 10px;
}

table tr:last-child td:last-child {
    border-bottom-right-radius: 10px;
}

table, td {
  border: 2px solid var(--text-white);
}

table i::before {
  background: transparent;
}

table i {
  background: none;
  color: var(--text-white);
  outline: none;
  border: none;
}

table td {
  padding-left: 6%;
}

.bi-star {
  padding-left: 10px;
  width: 15px;
}

.bi-eye {
  padding-left: 10px;
  width: 15px;
}

.bi-heart {
  padding-left: 10px;
  width: 15px;
}
/*END: Your Statistics Table*/
/*-----------------------------------------------------*/


.swiper {
  max-width: 100%;
  max-height: 550px;
  display: flex;
  overflow: hidden;
}

.swiper-wrapper {
  margin-top: 20px;
  margin-bottom: 20px;
  padding-left: 25px;

}

.swiper-slide img{
  object-fit: cover !important;
  width: 100% !important;
  max-width: none !important;
  overflow: hidden;

  transition: transform 450ms;
  border: 3px solid var(--movies);
  box-sizing: border-box;
  border-radius: 5px;
}

.swiper-slide img:hover {
  transform: scale(1.08);
}

.swiper .swiper-button-prev,
.swiper .swiper-button-next {
  height: 100%;
  width: 2%;
  width: calc(4%-5px);
  top: 0;
  bottom: 0;
  margin: 0;
  background-color: rgba(20, 20, 20, 0.5);
  display: flex;
}

.swiper .swiper-button-prev {
  left: 0;
}

.swiper .swiper-button-next {
  right: 0;
}

.swiper .swiper-button-prev::after,
.swiper .swiper-button-next::after {
  color: #fff;
  font-weight: bold;
  transition: transform 0.1s ease-out;

  background: none;
  display: flex;

  transform: scale(0.6);
}



/*-----------------------------------------------------*/
/*START: Movies*/
.Movies h4 {
  width: 113px;
  height: 45px;

  border: 3px solid var(--movies);
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 6px;

  margin-bottom: 25px;
  margin-top: 25px;
}

.Movies h5 {
  text-align: left;
  color: var(--text-white);
  padding-top: 8px;
  padding-left: 15px;

  margin-bottom: 25px;
  margin-top: 25px;
}

.Movies .Featured_Movies_Row h5 {
  width: 185px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--movies);
  border-left:  2px solid var(--movies);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.Movies .From_Your_Mov_Watchlist_Row h5 {
  width: 215px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--movies);
  border-left:  2px solid var(--movies);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.Movies .Coming_Soon_Row h5 {
  width: 155px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--movies);
  border-left: 2px solid var(--movies);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}



/*SWIPER*/
.swiper {
  max-width: 100%;
  max-height: 550px;
  display: flex;
  overflow: hidden;
}

.swiper-wrapper {
  margin-top: 20px;
  margin-bottom: 20px;
  padding-left: 25px;
}

.swiper-slide img{
  max-width: 100%;
  max-height: 250px;
  overflow: hidden;

  transition: transform 450ms;
  box-sizing: border-box;
  border-radius: 5px;
}

.swiper-slide img:hover {
  transform: scale(1.08);
}

.swiper .swiper-button-prev,
.swiper .swiper-button-next {
  height: 100%;
  width: 2%;
  width: calc(4%-5px);
  top: 0;
  bottom: 0;
  margin: 0;

  border-radius: 5px;
  display: flex;
}

.swiper .swiper-button-prev {
  left: 0;
}

.swiper .swiper-button-next {
  right: 0;
}

.swiper .swiper-button-prev::after,
.swiper .swiper-button-next::after {
  color: #fff;
  font-weight: bold;
  transition: transform 0.1s ease-out;

  background: none;
  display: flex;

  transform: scale(0.6);
}

.Movies .swiper-slide img {
  border: 4px solid var(--movies);
}

.TV_Series .swiper-slide img {
  border: 4px solid var(--tvSeries);
}

.Music .swiper-slide img {
  border: 4px solid var(--music);
}

.Books .swiper-slide img {
  border: 4px solid var(--books);
}

.Artworks .swiper-slide img {
  border: 4px solid var(--artworks);
}

.Movies .swiper .swiper-button-prev,
.Movies .swiper .swiper-button-next {
  background-color: rgba(102, 255, 246, 0.3);
}

.TV_Series .swiper .swiper-button-prev,
.TV_Series .swiper .swiper-button-next {
  background-color: rgba(167, 198, 255, 0.3);
}

.Music .swiper .swiper-button-prev,
.Music .swiper .swiper-button-next {
  background-color: rgba(109, 82, 212, 0.3);
}

.Books .swiper .swiper-button-prev,
.Books .swiper .swiper-button-next {
  background-color: rgba(160, 58, 219, 0.3);
}

.Artworks .swiper .swiper-button-prev,
.Artworks .swiper .swiper-button-next {
  background-color: rgba(255, 79, 162, 0.3);
}

/*TV SERIES*/
.TV_Series h4 {
  width: 113px;
  height: 45px;

  border: 3px solid var(--tvSeries);
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 6px;

  margin-bottom: 25px;
  margin-top: 100px;
}

.TV_Series h5 {
  text-align: left;
  color: var(--text-white);
  padding-top: 8px;
  padding-left: 15px;

  margin-bottom: 25px;
  margin-top: 25px;
}

.TV_Series .Featured_TVSeries_Row h5 {
  width: 205px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--tvSeries);
  border-left:  2px solid var(--tvSeries);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.TV_Series .From_Your_TV_Watchlist_Row h5 {
  width: 215px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--tvSeries);
  border-left:  2px solid var(--tvSeries);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.TV_Series .Coming_Soon_Row h5 {
  width: 155px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--tvSeries);
  border-left:  2px solid var(--tvSeries);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}



/*MUSIC*/
.Music h4 {
  width: 113px;
  height: 45px;

  border: 3px solid var(--music);
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 6px;

  margin-bottom: 25px;
  margin-top: 100px;
}

.Music h5 {
  text-align: left;
  color: var(--text-white);
  padding-top: 8px;
  padding-left: 15px;

  margin-bottom: 25px;
  margin-top: 25px;
}

.Music .From_Your_Liked_Songs_Row h5 {
  width: 240px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--music);
  border-left:  2px solid var(--music);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.Music .caption {
  margin-top: 15px;
  padding: 8px 5px;
  color: #fff;
  font-size: 14px;

  box-sizing: border-box;
  border: 2px solid var(--music);
  border-radius: 15px;
}


/*BOOKS*/
.Books h4 {
  width: 113px;
  height: 45px;

  border: 3px solid var(--books);
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 6px;

  margin-bottom: 25px;
  margin-top: 100px;
}

.Books h5 {
  text-align: left;
  color: var(--text-white);
  padding-top: 8px;
  padding-left: 15px;

  margin-bottom: 25px;
  margin-top: 25px;
}

.Books .Best_Sellers_Row h5 {
  width: 145px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--books);
  border-left:  2px solid var(--books);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.Books .From_Your_Reading_List_Row h5 {
  width: 245px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--books);
  border-left:  2px solid var(--books);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.Books .Featured_Books_Row h5 {
  width: 180px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--books);
  border-left:  2px solid var(--books);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}



/*ARTWORKS*/
.Artworks h4 {
  width: 113px;
  height: 45px;

  border: 3px solid var(--artworks);
  box-sizing: border-box;
  border-radius: 15px;
  color: var(--text-white);

  text-align: center;
  padding-top: 6px;

  margin-bottom: 25px;
  margin-top: 100px;
}

.Artworks h5 {
  text-align: left;
  color: var(--text-white);
  padding-top: 8px;
  padding-left: 15px;

  margin-bottom: 25px;
  margin-top: 25px;
}

.Artworks .Daily_Recommendations_Row h5 {
  width: 255px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--artworks);
  border-left:  2px solid var(--artworks);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}

.Artworks .From_Your_Collection_Row h5 {
  width: 225px;
  height: 40px;

  border-top: 2px solid var(--background-purple);
  border-bottom: 2px solid var(--artworks);
  border-left:  2px solid var(--artworks);
  border-right:  2px solid var(--background-purple);
  box-sizing: border-box;
  border-radius: 15px;
}


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
    <!-- Daily Shuffle Section Start -->
    <div class="Homepage_Container">
      <section class="ShuffleAndStats">

        <section class="Shuffle">
          <div class="Daily_Shuffle">
            <h4>Daily Shuffle</h4>

            <div class="Cards">

              <div class="Movie_Card">
                <div class="Flip_Card_Movie">
                  <div class="Flip_Card_Movie_Inner">
                    <div class="Flip_Card_Movie_Front">
                      <p>Movie</p>
                    </div>
                    <div class="Flip_Card_Movie_Back">
                      <p>Le Grand Bleu</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="TVSerie_Card">
                <div class="Flip_Card_TVSerie">
                  <div class="Flip_Card_TVSerie_Inner">
                    <div class="Flip_Card_TVSerie_Front">
                      <p>TV Serie</p>
                    </div>
                    <div class="Flip_Card_TVSerie_Back">
                      <p>Arcane</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="Music_Card">
                <div class="Flip_Card_Music">
                  <div class="Flip_Card_Music_Inner">
                    <div class="Flip_Card_Music_Front">
                      <p>Music</p>
                    </div>
                    <div class="Flip_Card_Music_Back">
                      <p>Enemy</p>
                      <p>Artist: Imagine Dragons</p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="Book_Card">
                <div class="Flip_Card_Book">
                  <div class="Flip_Card_Book_Inner">
                    <div class="Flip_Card_Book_Front">
                      <p>Book</p>
                    </div>
                    <div class="Flip_Card_Book_Back">
                      <p>Norwegian Wood</p>
                      <p>Author: Haruki Murakami</p>
                    </div>
                  </div>
                </div>
              </div>


              <div class="Artwork_Card">
                <div class="Flip_Card_Artwork">
                  <div class="Flip_Card_Artwork_Inner">
                    <div class="Flip_Card_Artwork_Front">
                      <p>Artwork</p>
                    </div>
                    <div class="Flip_Card_Artwork_Back">
                      <p>Guernica</p>
                      <p>Painter: Pablo Picasso</p>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>
        <section class="Stats">
          <div class="Your_Statistics">
            <h4>Your Statistics</h4>
            <table style="max-width: 35vw">
              <tbody>
                <tr style="height: 55px">
                  <td style="width:20%"><i class="bi bi-film"></i></td>
                  <td style="width:40%">1047<i class="bi bi-star"></i></td>
                  <td style="width:40%">331<i class="bi bi-eye"></i></td>
                </tr>
                <tr style="height: 55px">
                  <td style="width:20%"><i class="bi bi-tv"></i></td>
                  <td style="width:40%">67<i class="bi bi-star"></i></td>
                  <td style="width:40%">54<i class="bi bi-eye"></i></td>
                </tr>
                <tr style="height: 55px">
                  <td style="width:20%"><i class="bi bi-music-note-beamed"></i></td>
                  <td style="width:40%">2774<i class="bi bi-heart"></i></td>
                  <td></td>
                </tr>
                <tr style="height: 55px">
                  <td style="width:20%"><i class="bi bi-book"></i></td>
                  <td style="width:40%">1047<i class="bi bi-star"></i></td>
                  <td style="width:40%">331<i class="bi bi-eye"></i></td>
                </tr>
                <tr style="height: 55px">
                  <td style="width:20%"><i class="bi bi-brush"></i></td>
                  <td style="width:40%">49<i class="bi bi-heart"></i></td>
                  <td></td>
                </tr>
              </tbody>
            </table>

          </div>

        </section>
      </section>


    </div>
    <!-- Daily Shuffle Section End -->
    <!-- --------------------------------------------------------------------------- -->
    <!-- Movies Section Start -->
    <div class="Movies">
      <h4 id="movies">Movies</h4>
      <div class="Featured_Movies_Row">
        <h5>Featured Movies</h5>
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqwomVyMFsby9zeXLLnkfv744mKCzQDWL7rUDhbwg89bpT-V7qYoW-NNfjFaG3nFcDWu-U49vpUFB_L4njc2GFl6l60Efb4oT-_0e3oi3Dh8nwyLZhG2ciBHGUnRMB_J-D2jQk2Qz_WM4n8A_8b8ZqFDpj80B6KJ9T2bXR7rYcl0M8MaDCsR68.jpg?r=93f"
                  alt="The Queen's Gambit">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393" alt="Dark">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRItzLGWEqRojd0SS5lkLN56bRwYGctgeybCwPWq-zs_UwEXKX_4CsXsMlWupAdBB5D7KDN-8RzuCvqzTf5Bvo_HQmI.webp?r=3ad" alt="Suits">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUjsKDiaKwLmrV662pwmVKEtRmbJI-s8M9ojCqr2QEdnPUJPX86RP-n9IGXxGcaHWkTf-cwz5e4kBLN3jYLM7HuBfYA.webp?r=01d"
                  alt="Breaking Bad">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdPrypf33QcVWc0DHxX7rDoTSbX7EgHSJd_VDlwIr81A40ua4l2F_esQS1u4zB9SkN5TAGO1Bw0SmoEqTICKfx9vbRu-qdKh9KGWuRLasXOrCIUpEYnMffVoebRS.jpg?r=d3b"
                  alt="The Crown">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfrj0Nfwz9Y5OFq7NWdm57bfHeuFJMgzb_-44MFWdPWGZxYW36c_6m6vvMJn0f4aUT_6-p_c9oEqMNnBNn0bu-VdwhTqudCVG_95XQOuhPfXI8sEzB8FwkmAzqKTqEf3BUNjOIdkilmg3NIjKhrHv9XqRcON9w.jpg?r=c00"
                  alt="Arcane">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbe_n2UoDaMNi_J4mbCxeo0FLho91XVwGctwIelCCWvOcqrLODUL6FnSVcRgeTTKEGiZlhV3HhZnbUWV8MpDxBK7U18.webp?r=1b2"
                  alt="How I Met Your Mother">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWfAKVpzKqI0PO_TSVOGsnGcQR76Rih_GZVn1S1ycQct4ezRv_V4FAsr9td-Yjb9R8TUX5S1kn3gkP1VZRSYnWA2i0M.webp?r=75b" alt="Friends">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR3tWi_x4S_BwzbuA-n08sa8Ca2_aIqIpoREVWIeQfFL-GvYxjTkW8NQNXCajLwGpk0ddmyqTfjx8Pt-vXV5j11_RAE.webp?r=b84"
                  alt="Avatar: The Last Air Bender">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABY79uxZqHSMYhREIhxnTxsrE0tBZFBjPbPliOwxU5gHfBWwt4dJD6U5z3oezpk1csqdLqAly_NKe4BbjHT63yI_JZIA.webp?r=dcb" alt="One Day">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV3tMufOApgez2Vlk2VHO6tsov_XL541UzFDY4OuJswfyMeyV-ixTogCjvN6enUAIfEJonDQ1cYJusN92MJPOi4CYJI.webp?r=97d"
                  alt="Weightlifting Fairy Kim Bok-Joo">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIBurFq0j6MHNKTYyHlv4noD63pgDQw5Av58iBpybkRwDhGXrnNZAhkD9iO07hlQkzH5CZ3HCKj93Xaa0k-G5UinqcCpvw2XkIrIJbb8bwoWJfOZCCX_88udSLI.jpg?r=682"
                  alt="Itaewon Class">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <div class="From_Your_Mov_Watchlist_Row">
        <h5>From Your Watchlist</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqwomVyMFsby9zeXLLnkfv744mKCzQDWL7rUDhbwg89bpT-V7qYoW-NNfjFaG3nFcDWu-U49vpUFB_L4njc2GFl6l60Efb4oT-_0e3oi3Dh8nwyLZhG2ciBHGUnRMB_J-D2jQk2Qz_WM4n8A_8b8ZqFDpj80B6KJ9T2bXR7rYcl0M8MaDCsR68.jpg?r=93f"
                  alt="The Queen's Gambit">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393" alt="Dark">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRItzLGWEqRojd0SS5lkLN56bRwYGctgeybCwPWq-zs_UwEXKX_4CsXsMlWupAdBB5D7KDN-8RzuCvqzTf5Bvo_HQmI.webp?r=3ad" alt="Suits">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUjsKDiaKwLmrV662pwmVKEtRmbJI-s8M9ojCqr2QEdnPUJPX86RP-n9IGXxGcaHWkTf-cwz5e4kBLN3jYLM7HuBfYA.webp?r=01d"
                  alt="Breaking Bad">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdPrypf33QcVWc0DHxX7rDoTSbX7EgHSJd_VDlwIr81A40ua4l2F_esQS1u4zB9SkN5TAGO1Bw0SmoEqTICKfx9vbRu-qdKh9KGWuRLasXOrCIUpEYnMffVoebRS.jpg?r=d3b"
                  alt="The Crown">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfrj0Nfwz9Y5OFq7NWdm57bfHeuFJMgzb_-44MFWdPWGZxYW36c_6m6vvMJn0f4aUT_6-p_c9oEqMNnBNn0bu-VdwhTqudCVG_95XQOuhPfXI8sEzB8FwkmAzqKTqEf3BUNjOIdkilmg3NIjKhrHv9XqRcON9w.jpg?r=c00"
                  alt="Arcane">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbe_n2UoDaMNi_J4mbCxeo0FLho91XVwGctwIelCCWvOcqrLODUL6FnSVcRgeTTKEGiZlhV3HhZnbUWV8MpDxBK7U18.webp?r=1b2"
                  alt="How I Met Your Mother">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWfAKVpzKqI0PO_TSVOGsnGcQR76Rih_GZVn1S1ycQct4ezRv_V4FAsr9td-Yjb9R8TUX5S1kn3gkP1VZRSYnWA2i0M.webp?r=75b" alt="Friends">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR3tWi_x4S_BwzbuA-n08sa8Ca2_aIqIpoREVWIeQfFL-GvYxjTkW8NQNXCajLwGpk0ddmyqTfjx8Pt-vXV5j11_RAE.webp?r=b84"
                  alt="Avatar: The Last Air Bender">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABY79uxZqHSMYhREIhxnTxsrE0tBZFBjPbPliOwxU5gHfBWwt4dJD6U5z3oezpk1csqdLqAly_NKe4BbjHT63yI_JZIA.webp?r=dcb" alt="One Day">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV3tMufOApgez2Vlk2VHO6tsov_XL541UzFDY4OuJswfyMeyV-ixTogCjvN6enUAIfEJonDQ1cYJusN92MJPOi4CYJI.webp?r=97d"
                  alt="Weightlifting Fairy Kim Bok-Joo">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIBurFq0j6MHNKTYyHlv4noD63pgDQw5Av58iBpybkRwDhGXrnNZAhkD9iO07hlQkzH5CZ3HCKj93Xaa0k-G5UinqcCpvw2XkIrIJbb8bwoWJfOZCCX_88udSLI.jpg?r=682"
                  alt="Itaewon Class">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>

      <div class="Coming_Soon_Row">
        <h5>Coming Soon</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqwomVyMFsby9zeXLLnkfv744mKCzQDWL7rUDhbwg89bpT-V7qYoW-NNfjFaG3nFcDWu-U49vpUFB_L4njc2GFl6l60Efb4oT-_0e3oi3Dh8nwyLZhG2ciBHGUnRMB_J-D2jQk2Qz_WM4n8A_8b8ZqFDpj80B6KJ9T2bXR7rYcl0M8MaDCsR68.jpg?r=93f"
                  alt="The Queen's Gambit">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393" alt="Dark">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRItzLGWEqRojd0SS5lkLN56bRwYGctgeybCwPWq-zs_UwEXKX_4CsXsMlWupAdBB5D7KDN-8RzuCvqzTf5Bvo_HQmI.webp?r=3ad" alt="Suits">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUjsKDiaKwLmrV662pwmVKEtRmbJI-s8M9ojCqr2QEdnPUJPX86RP-n9IGXxGcaHWkTf-cwz5e4kBLN3jYLM7HuBfYA.webp?r=01d"
                  alt="Breaking Bad">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdPrypf33QcVWc0DHxX7rDoTSbX7EgHSJd_VDlwIr81A40ua4l2F_esQS1u4zB9SkN5TAGO1Bw0SmoEqTICKfx9vbRu-qdKh9KGWuRLasXOrCIUpEYnMffVoebRS.jpg?r=d3b"
                  alt="The Crown">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfrj0Nfwz9Y5OFq7NWdm57bfHeuFJMgzb_-44MFWdPWGZxYW36c_6m6vvMJn0f4aUT_6-p_c9oEqMNnBNn0bu-VdwhTqudCVG_95XQOuhPfXI8sEzB8FwkmAzqKTqEf3BUNjOIdkilmg3NIjKhrHv9XqRcON9w.jpg?r=c00"
                  alt="Arcane">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbe_n2UoDaMNi_J4mbCxeo0FLho91XVwGctwIelCCWvOcqrLODUL6FnSVcRgeTTKEGiZlhV3HhZnbUWV8MpDxBK7U18.webp?r=1b2"
                  alt="How I Met Your Mother">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWfAKVpzKqI0PO_TSVOGsnGcQR76Rih_GZVn1S1ycQct4ezRv_V4FAsr9td-Yjb9R8TUX5S1kn3gkP1VZRSYnWA2i0M.webp?r=75b" alt="Friends">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR3tWi_x4S_BwzbuA-n08sa8Ca2_aIqIpoREVWIeQfFL-GvYxjTkW8NQNXCajLwGpk0ddmyqTfjx8Pt-vXV5j11_RAE.webp?r=b84"
                  alt="Avatar: The Last Air Bender">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABY79uxZqHSMYhREIhxnTxsrE0tBZFBjPbPliOwxU5gHfBWwt4dJD6U5z3oezpk1csqdLqAly_NKe4BbjHT63yI_JZIA.webp?r=dcb" alt="One Day">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV3tMufOApgez2Vlk2VHO6tsov_XL541UzFDY4OuJswfyMeyV-ixTogCjvN6enUAIfEJonDQ1cYJusN92MJPOi4CYJI.webp?r=97d"
                  alt="Weightlifting Fairy Kim Bok-Joo">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIBurFq0j6MHNKTYyHlv4noD63pgDQw5Av58iBpybkRwDhGXrnNZAhkD9iO07hlQkzH5CZ3HCKj93Xaa0k-G5UinqcCpvw2XkIrIJbb8bwoWJfOZCCX_88udSLI.jpg?r=682"
                  alt="Itaewon Class">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>
    </div>
    <!-- Movies Section End -->


    <!-- --------------------------------------------------------------------------- -->
    <!-- TV Series Section Start -->
    <div class="TV_Series">
      <h4 id="tvSeries">TV Series</h4>
      <div class="Featured_TVSeries_Row">
        <h5>Featured TV Series</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqwomVyMFsby9zeXLLnkfv744mKCzQDWL7rUDhbwg89bpT-V7qYoW-NNfjFaG3nFcDWu-U49vpUFB_L4njc2GFl6l60Efb4oT-_0e3oi3Dh8nwyLZhG2ciBHGUnRMB_J-D2jQk2Qz_WM4n8A_8b8ZqFDpj80B6KJ9T2bXR7rYcl0M8MaDCsR68.jpg?r=93f"
                  alt="The Queen's Gambit">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393" alt="Dark">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRItzLGWEqRojd0SS5lkLN56bRwYGctgeybCwPWq-zs_UwEXKX_4CsXsMlWupAdBB5D7KDN-8RzuCvqzTf5Bvo_HQmI.webp?r=3ad" alt="Suits">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUjsKDiaKwLmrV662pwmVKEtRmbJI-s8M9ojCqr2QEdnPUJPX86RP-n9IGXxGcaHWkTf-cwz5e4kBLN3jYLM7HuBfYA.webp?r=01d"
                  alt="Breaking Bad">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdPrypf33QcVWc0DHxX7rDoTSbX7EgHSJd_VDlwIr81A40ua4l2F_esQS1u4zB9SkN5TAGO1Bw0SmoEqTICKfx9vbRu-qdKh9KGWuRLasXOrCIUpEYnMffVoebRS.jpg?r=d3b"
                  alt="The Crown">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfrj0Nfwz9Y5OFq7NWdm57bfHeuFJMgzb_-44MFWdPWGZxYW36c_6m6vvMJn0f4aUT_6-p_c9oEqMNnBNn0bu-VdwhTqudCVG_95XQOuhPfXI8sEzB8FwkmAzqKTqEf3BUNjOIdkilmg3NIjKhrHv9XqRcON9w.jpg?r=c00"
                  alt="Arcane">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbe_n2UoDaMNi_J4mbCxeo0FLho91XVwGctwIelCCWvOcqrLODUL6FnSVcRgeTTKEGiZlhV3HhZnbUWV8MpDxBK7U18.webp?r=1b2"
                  alt="How I Met Your Mother">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWfAKVpzKqI0PO_TSVOGsnGcQR76Rih_GZVn1S1ycQct4ezRv_V4FAsr9td-Yjb9R8TUX5S1kn3gkP1VZRSYnWA2i0M.webp?r=75b" alt="Friends">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR3tWi_x4S_BwzbuA-n08sa8Ca2_aIqIpoREVWIeQfFL-GvYxjTkW8NQNXCajLwGpk0ddmyqTfjx8Pt-vXV5j11_RAE.webp?r=b84"
                  alt="Avatar: The Last Air Bender">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABY79uxZqHSMYhREIhxnTxsrE0tBZFBjPbPliOwxU5gHfBWwt4dJD6U5z3oezpk1csqdLqAly_NKe4BbjHT63yI_JZIA.webp?r=dcb" alt="One Day">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV3tMufOApgez2Vlk2VHO6tsov_XL541UzFDY4OuJswfyMeyV-ixTogCjvN6enUAIfEJonDQ1cYJusN92MJPOi4CYJI.webp?r=97d"
                  alt="Weightlifting Fairy Kim Bok-Joo">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIBurFq0j6MHNKTYyHlv4noD63pgDQw5Av58iBpybkRwDhGXrnNZAhkD9iO07hlQkzH5CZ3HCKj93Xaa0k-G5UinqcCpvw2XkIrIJbb8bwoWJfOZCCX_88udSLI.jpg?r=682"
                  alt="Itaewon Class">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <div class="From_Your_TV_Watchlist_Row">
        <h5>From Your Watchlist</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqwomVyMFsby9zeXLLnkfv744mKCzQDWL7rUDhbwg89bpT-V7qYoW-NNfjFaG3nFcDWu-U49vpUFB_L4njc2GFl6l60Efb4oT-_0e3oi3Dh8nwyLZhG2ciBHGUnRMB_J-D2jQk2Qz_WM4n8A_8b8ZqFDpj80B6KJ9T2bXR7rYcl0M8MaDCsR68.jpg?r=93f"
                  alt="The Queen's Gambit">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393" alt="Dark">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRItzLGWEqRojd0SS5lkLN56bRwYGctgeybCwPWq-zs_UwEXKX_4CsXsMlWupAdBB5D7KDN-8RzuCvqzTf5Bvo_HQmI.webp?r=3ad" alt="Suits">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUjsKDiaKwLmrV662pwmVKEtRmbJI-s8M9ojCqr2QEdnPUJPX86RP-n9IGXxGcaHWkTf-cwz5e4kBLN3jYLM7HuBfYA.webp?r=01d"
                  alt="Breaking Bad">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdPrypf33QcVWc0DHxX7rDoTSbX7EgHSJd_VDlwIr81A40ua4l2F_esQS1u4zB9SkN5TAGO1Bw0SmoEqTICKfx9vbRu-qdKh9KGWuRLasXOrCIUpEYnMffVoebRS.jpg?r=d3b"
                  alt="The Crown">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfrj0Nfwz9Y5OFq7NWdm57bfHeuFJMgzb_-44MFWdPWGZxYW36c_6m6vvMJn0f4aUT_6-p_c9oEqMNnBNn0bu-VdwhTqudCVG_95XQOuhPfXI8sEzB8FwkmAzqKTqEf3BUNjOIdkilmg3NIjKhrHv9XqRcON9w.jpg?r=c00"
                  alt="Arcane">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbe_n2UoDaMNi_J4mbCxeo0FLho91XVwGctwIelCCWvOcqrLODUL6FnSVcRgeTTKEGiZlhV3HhZnbUWV8MpDxBK7U18.webp?r=1b2"
                  alt="How I Met Your Mother">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWfAKVpzKqI0PO_TSVOGsnGcQR76Rih_GZVn1S1ycQct4ezRv_V4FAsr9td-Yjb9R8TUX5S1kn3gkP1VZRSYnWA2i0M.webp?r=75b" alt="Friends">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR3tWi_x4S_BwzbuA-n08sa8Ca2_aIqIpoREVWIeQfFL-GvYxjTkW8NQNXCajLwGpk0ddmyqTfjx8Pt-vXV5j11_RAE.webp?r=b84"
                  alt="Avatar: The Last Air Bender">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABY79uxZqHSMYhREIhxnTxsrE0tBZFBjPbPliOwxU5gHfBWwt4dJD6U5z3oezpk1csqdLqAly_NKe4BbjHT63yI_JZIA.webp?r=dcb" alt="One Day">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV3tMufOApgez2Vlk2VHO6tsov_XL541UzFDY4OuJswfyMeyV-ixTogCjvN6enUAIfEJonDQ1cYJusN92MJPOi4CYJI.webp?r=97d"
                  alt="Weightlifting Fairy Kim Bok-Joo">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIBurFq0j6MHNKTYyHlv4noD63pgDQw5Av58iBpybkRwDhGXrnNZAhkD9iO07hlQkzH5CZ3HCKj93Xaa0k-G5UinqcCpvw2XkIrIJbb8bwoWJfOZCCX_88udSLI.jpg?r=682"
                  alt="Itaewon Class">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>

      <div class="Coming_Soon_Row">
        <h5>Coming Soon</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUqwomVyMFsby9zeXLLnkfv744mKCzQDWL7rUDhbwg89bpT-V7qYoW-NNfjFaG3nFcDWu-U49vpUFB_L4njc2GFl6l60Efb4oT-_0e3oi3Dh8nwyLZhG2ciBHGUnRMB_J-D2jQk2Qz_WM4n8A_8b8ZqFDpj80B6KJ9T2bXR7rYcl0M8MaDCsR68.jpg?r=93f"
                  alt="The Queen's Gambit">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSEl8LWx4tMJIM9Atm3F1Y49Uq6X01tnDe8gPA6d84-gQ767saz9z7Jxj9sFozuI8bcM2vlxeP9IPq3Aa7jxLlkMu8JGjizRLblNEcmD7g-Z2NeZvkvV5nWF9DmJ.jpg?r=393" alt="Dark">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRItzLGWEqRojd0SS5lkLN56bRwYGctgeybCwPWq-zs_UwEXKX_4CsXsMlWupAdBB5D7KDN-8RzuCvqzTf5Bvo_HQmI.webp?r=3ad" alt="Suits">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABUjsKDiaKwLmrV662pwmVKEtRmbJI-s8M9ojCqr2QEdnPUJPX86RP-n9IGXxGcaHWkTf-cwz5e4kBLN3jYLM7HuBfYA.webp?r=01d"
                  alt="Breaking Bad">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-1433-1432.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABdPrypf33QcVWc0DHxX7rDoTSbX7EgHSJd_VDlwIr81A40ua4l2F_esQS1u4zB9SkN5TAGO1Bw0SmoEqTICKfx9vbRu-qdKh9KGWuRLasXOrCIUpEYnMffVoebRS.jpg?r=d3b"
                  alt="The Crown">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABfrj0Nfwz9Y5OFq7NWdm57bfHeuFJMgzb_-44MFWdPWGZxYW36c_6m6vvMJn0f4aUT_6-p_c9oEqMNnBNn0bu-VdwhTqudCVG_95XQOuhPfXI8sEzB8FwkmAzqKTqEf3BUNjOIdkilmg3NIjKhrHv9XqRcON9w.jpg?r=c00"
                  alt="Arcane">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbe_n2UoDaMNi_J4mbCxeo0FLho91XVwGctwIelCCWvOcqrLODUL6FnSVcRgeTTKEGiZlhV3HhZnbUWV8MpDxBK7U18.webp?r=1b2"
                  alt="How I Met Your Mother">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABWfAKVpzKqI0PO_TSVOGsnGcQR76Rih_GZVn1S1ycQct4ezRv_V4FAsr9td-Yjb9R8TUX5S1kn3gkP1VZRSYnWA2i0M.webp?r=75b" alt="Friends">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABR3tWi_x4S_BwzbuA-n08sa8Ca2_aIqIpoREVWIeQfFL-GvYxjTkW8NQNXCajLwGpk0ddmyqTfjx8Pt-vXV5j11_RAE.webp?r=b84"
                  alt="Avatar: The Last Air Bender">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABY79uxZqHSMYhREIhxnTxsrE0tBZFBjPbPliOwxU5gHfBWwt4dJD6U5z3oezpk1csqdLqAly_NKe4BbjHT63yI_JZIA.webp?r=dcb" alt="One Day">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABV3tMufOApgez2Vlk2VHO6tsov_XL541UzFDY4OuJswfyMeyV-ixTogCjvN6enUAIfEJonDQ1cYJusN92MJPOi4CYJI.webp?r=97d"
                  alt="Weightlifting Fairy Kim Bok-Joo">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image"
                  src="https://occ-0-3467-1490.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABeIBurFq0j6MHNKTYyHlv4noD63pgDQw5Av58iBpybkRwDhGXrnNZAhkD9iO07hlQkzH5CZ3HCKj93Xaa0k-G5UinqcCpvw2XkIrIJbb8bwoWJfOZCCX_88udSLI.jpg?r=682"
                  alt="Itaewon Class">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>
    </div>
    <!-- TV Series Section End -->


    <!-- --------------------------------------------------------------------------- -->
    <!-- Music Section Start -->
    <div class="Music">
      <h4 id="music">Music</h4>
      <div class="From_Your_Liked_Songs_Row">
        <h5>From Your Liked Songs</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e028cffb7c6c40759eaf8a5a142" alt="Angel's Like You - Miley Cyrus">
                <div class="caption" style="text-align:center">Angel's Like You<br>Miley Cyrus</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02aa597e50829169e6994eb403" alt="Enemy - Imagine Dragons">
                <div class="caption" style="text-align:center">Enemy<br>Imagine Dragons</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02c6b577e4c4a6d326354a89f7" alt="Adele - Oh My God">
                <div class="caption" style="text-align:center">Oh My God<br>Adele</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02889741e4d5cfc40e4610770c" alt="Everything Everything - We Slept In Paris">
                <div class="caption" style="text-align:center">We Slept In Paris<br>Everything Everything</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02fef9c2ac08cda1df87f4a28c" alt="Kovacs - Freakshow">
                <div class="caption" style="text-align:center">Love Song<br>Kovacs</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e0223533fedac2927315c55d34b" alt="ABBA - Don't Shut Me Down">
                <div class="caption" style="text-align:center">Don't Shut Me Down<br>ABBA</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02340aba0dcdba43d89f6a037a" alt="AMY - Amy Forever">
                <div class="caption" style="text-align:center">Amy Winehouse<br>What Is It About Men</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02509ce7a71fc55b86a360a410" alt="Madonna - La Isla Bonita">
                <div class="caption" style="text-align:center">La Isla Bonita<br>Madonna</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e02dbc892b8194e35ca3524e767" alt="Maneskin - Torn a Casa">
                <div class="caption" style="text-align:center">Torn a Casa<br>Maneskin</div>
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.scdn.co/image/ab67616d00001e0241f373525493d40a9c3c3f52" alt="Jimmy Durante - Smile">
                <div class="caption" style="text-align:center">Smile<br>Jimmy Durante</div>
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>

      </div>
    </div>
    <!-- Music Section End -->


    <!-- --------------------------------------------------------------------------- -->
    <!-- Books Section Start -->
    <div class="Books">
      <h4 id="books">Books</h4>
      <div class="Best_Sellers_Row">
        <h5>Best Sellers</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1429638085l/4929.jpg" alt="Haruki Murakami - Kafka on the Shore">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1630460042l/11297._SY475_.jpg" alt="Haruki Murakami - Norwegian Wood">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1483103331l/10357575.jpg" alt="Haruki Murakami - 1Q84">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1533141634l/41022133._SY475_.jpg" alt="Haruki Murakami - Norwegian Wood">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1630460042l/11297._SY475_.jpg" alt="Haruki Murakami - Colorless Tsukuru Tazaki">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327881361l/320.jpg" alt="Gabriel Garcia Marquez - One Hundred Years of Solitude">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1320512032l/5947099.jpg" alt="Gabriel Garcia Marquez - Memories of My Melancholy Whores">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1536376800l/9712.jpg" alt="Gabriel Garcia Marquez - Love in the Time of Cholera">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1553959324l/23878._SY475_.jpg" alt="Gabriel Garcia Marquez - Chronicle of a Death Foretold">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1409595968l/929.jpg" alt="Arthur Golden - Memoirs of a Geisha">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <div class="From_Your_Reading_List_Row">
        <h5>From Your Reading List</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1429638085l/4929.jpg" alt="Haruki Murakami - Kafka on the Shore">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1630460042l/11297._SY475_.jpg" alt="Haruki Murakami - Norwegian Wood">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1483103331l/10357575.jpg" alt="Haruki Murakami - 1Q84">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1533141634l/41022133._SY475_.jpg" alt="Haruki Murakami - Norwegian Wood">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1630460042l/11297._SY475_.jpg" alt="Haruki Murakami - Colorless Tsukuru Tazaki">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327881361l/320.jpg" alt="Gabriel Garcia Marquez - One Hundred Years of Solitude">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1320512032l/5947099.jpg" alt="Gabriel Garcia Marquez - Memories of My Melancholy Whores">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1536376800l/9712.jpg" alt="Gabriel Garcia Marquez - Love in the Time of Cholera">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1553959324l/23878._SY475_.jpg" alt="Gabriel Garcia Marquez - Chronicle of a Death Foretold">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1409595968l/929.jpg" alt="Arthur Golden - Memoirs of a Geisha">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <div class="Featured_Books_Row">
        <h5>Featured Books</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1429638085l/4929.jpg" alt="Haruki Murakami - Kafka on the Shore">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1630460042l/11297._SY475_.jpg" alt="Haruki Murakami - Norwegian Wood">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1483103331l/10357575.jpg" alt="Haruki Murakami - 1Q84">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1533141634l/41022133._SY475_.jpg" alt="Haruki Murakami - Norwegian Wood">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1630460042l/11297._SY475_.jpg" alt="Haruki Murakami - Colorless Tsukuru Tazaki">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327881361l/320.jpg" alt="Gabriel Garcia Marquez - One Hundred Years of Solitude">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1320512032l/5947099.jpg" alt="Gabriel Garcia Marquez - Memories of My Melancholy Whores">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1536376800l/9712.jpg" alt="Gabriel Garcia Marquez - Love in the Time of Cholera">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1553959324l/23878._SY475_.jpg" alt="Gabriel Garcia Marquez - Chronicle of a Death Foretold">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1409595968l/929.jpg" alt="Arthur Golden - Memoirs of a Geisha">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
    <!-- Books Section End -->


    <!-- --------------------------------------------------------------------------- -->
    <!-- Artworks Section Start -->
    <div class="Artworks">
      <h4 id="artworks">Artworks</h4>
      <div class="Daily_Recommendations_Row">
        <h5>Daily Recommendations</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81119/mini_small/San-Giorgio-Maggiore-At-Dusk.jpg?ts=1459229076" alt="Monet - San Giorgio Maggiore At Dusk">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/119000/119338/mini_small/Argenteuil-Red-Boats.jpg?ts=1459229076" alt="Monet - Argenteuil">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81443/mini_small/The-Walk-Woman-With-A-Parasol.jpg?ts=1459229076" alt="Monet - The Walk Woman With A Parasol">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81455/mini_small/The-Water-Lily-Pond-Aka-Japanese-Bridge.jpg?ts=1459229076" alt="Monet - The Water Lily Pond Aka Japanese Bridge">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/80000/80717/mini_small/Boulevard-Des-Capucines.jpg?ts=1476266302" alt="Monet - Boulevard Des Capucines">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/98000/98601/mini_small/Terrace-At-The-Seaside,-Sainte-Adresse.jpg?ts=1459229076" alt="Monet - Terrace at the Seaside, Sainte-Adresse">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/216000/216772/mini_small/Bathing-At-La-Grenouilliere-1869.jpg?ts=1459229076" alt="Monet - Bathing at la Grenouilliere 1869">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81302/mini_small/The-Magpie.jpg?ts=1459229076" alt="Monet - The Magpie">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/80000/80924/mini_small/Jeanne-Marguerite-Lecadre-In-The-Garden.jpg?ts=1459229076" alt="Monet - Jeanne Marguerite Lecadre In The Garden">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81430/mini_small/The-Tulleries.jpg?ts=1459229076" alt="Monet - The Tulleries">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>

      <div class="From_Your_Collection_Row">
        <h5>From Your Collection</h5>
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81119/mini_small/San-Giorgio-Maggiore-At-Dusk.jpg?ts=1459229076" alt="Monet - San Giorgio Maggiore At Dusk">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/119000/119338/mini_small/Argenteuil-Red-Boats.jpg?ts=1459229076" alt="Monet - Argenteuil">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81443/mini_small/The-Walk-Woman-With-A-Parasol.jpg?ts=1459229076" alt="Monet - The Walk Woman With A Parasol">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81455/mini_small/The-Water-Lily-Pond-Aka-Japanese-Bridge.jpg?ts=1459229076" alt="Monet - The Water Lily Pond Aka Japanese Bridge">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/80000/80717/mini_small/Boulevard-Des-Capucines.jpg?ts=1476266302" alt="Monet - Boulevard Des Capucines">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/98000/98601/mini_small/Terrace-At-The-Seaside,-Sainte-Adresse.jpg?ts=1459229076" alt="Monet - Terrace at the Seaside, Sainte-Adresse">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/216000/216772/mini_small/Bathing-At-La-Grenouilliere-1869.jpg?ts=1459229076" alt="Monet - Bathing at la Grenouilliere 1869">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81302/mini_small/The-Magpie.jpg?ts=1459229076" alt="Monet - The Magpie">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/80000/80924/mini_small/Jeanne-Marguerite-Lecadre-In-The-Garden.jpg?ts=1459229076" alt="Monet - Jeanne Marguerite Lecadre In The Garden">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="thumbSlide" href="#">
                <img class="thumbSlide_image" src="https://www.claudemonetgallery.org/thumbnail/81000/81430/mini_small/The-Tulleries.jpg?ts=1459229076" alt="Monet - The Tulleries">
              </a>
            </div>
          </div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </div>
    <!-- Artworks Section End -->
  </div>
  </div>
</body>


<script type="text/javascript">
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    spaceBetween: 15,
    slidesPerView: 2,
    slidesPerGroup: 2,

    speed: 500,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 4,
        slidesPerGroup: 3,

      },

      1000: {
        slidesPerView: 6,
        slidesPerGroup: 4,
      }
    }
  });
</script>


<script type="text/javascript">
  const card1 = document.querySelector(".Movie_Card");
  const card2 = document.querySelector(".TVSerie_Card");
  const card3 = document.querySelector(".Music_Card");
  const card4 = document.querySelector(".Book_Card");
  const card5 = document.querySelector(".Artwork_Card");

  const cardContent1 = document.querySelector(".Flip_Card_Movie_Inner");
  const cardContent2 = document.querySelector(".Flip_Card_TVSerie_Inner");
  const cardContent3 = document.querySelector(".Flip_Card_Music_Inner");
  const cardContent4 = document.querySelector(".Flip_Card_Book_Inner");
  const cardContent5 = document.querySelector(".Flip_Card_Artwork_Inner");

  let flipped = false;

  card1.addEventListener("click", () => {
    if (!flipped) {
      cardContent1.style.transform = "rotateY(180deg)"

    } else {
      cardContent1.style.transform = "rotateY(0deg)"
    }
    flipped = !flipped;
  });

  card2.addEventListener("click", () => {
    if (!flipped) {
      cardContent2.style.transform = "rotateY(180deg)"

    } else {
      cardContent2.style.transform = "rotateY(0deg)"
    }
    flipped = !flipped;
  });

  card3.addEventListener("click", () => {
    if (!flipped) {
      cardContent3.style.transform = "rotateY(180deg)"

    } else {
      cardContent3.style.transform = "rotateY(0deg)"
    }
    flipped = !flipped;
  });

  card4.addEventListener("click", () => {
    if (!flipped) {
      cardContent4.style.transform = "rotateY(180deg)"

    } else {
      cardContent4.style.transform = "rotateY(0deg)"
    }
    flipped = !flipped;
  });

  card5.addEventListener("click", () => {
    if (!flipped) {
      cardContent5.style.transform = "rotateY(180deg)"

    } else {
      cardContent5.style.transform = "rotateY(0deg)"
    }
    flipped = !flipped;
  });
</script>
