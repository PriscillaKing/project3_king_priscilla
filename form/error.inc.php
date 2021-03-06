<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Montserrat', sans-serif;
  font-size: 16px;
}

h1 {
    font-family: 'Caveat', cursive;
    color: #8A9AAF;
    font-size: 36px;
}

html{
  overflow-x: hidden;
}


/*=======================================

  Navigation Bar Styling

========================================*/
.navbar {
  overflow: hidden;
  background-color: #8A9AAF;
  height: 100px;
  box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.3);
}

.menu a {
  float: right;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 14px 30px;
  border-radius: 4px;
  text-decoration: none;
  transition: .3s;
}

.menu {
  position: absolute;
  right: 100px;
  top: 37px;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 18px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 41px 14px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  transition: .3s;
}

.menu a:hover, .dropdown:hover .dropbtn {
  background: #B3BECB;
  transition: .3s;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #8A9AAF;
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: center;
  transition: .3s;
}

.dropdown-content a:hover {
  background-color: #B3BECB;
  border-radius: 4px;
  transition: .3s;
}

.dropdown:hover .dropdown-content {
  display: block;
  animation-name: easedown;
  animation-duration: .7s;
  transform-origin: top;
}

#logo {
  font-family: Caveat, cursive;
  font-size: 64px;
  color: white;
  text-decoration: none;
  position: absolute;
  top: 5px;
  left: 100px;
}

#nav_sig {
  left: 390px;
  position: absolute;
  top: 60px;
}
/*=======================================

  Dropdown Menu Animation

========================================*/

@keyframes easedown {

  0% {

    transform: scaleY(0)

  }


  100% {

    transform: scaleY(1)

  }

}
/*=======================================

  Footer Styling

========================================*/

.social_media {
  background: #E4E4E4;
  padding: 1px;
  width: 100%;
  position: fixed;
  bottom: 0px;
  text-align: center;
}

.icons {
  color: #708198;
  font-size: 36px;
  position: relative;
  display: inline;
}


.fab, .far {
    font-weight: 400;
    padding: 0px 25px;
    color: #708198;
}

.fa, .fas {
    font-weight: 900;
    color: #708198;
}

/*===============================


  Error Styling


*===============================*/

.container {
  text-align: center;
  margin: 50px;
}

.container h1 {
  font-size: 64px;
  padding-bottom: 25px;
  font-weight: normal;
}

.container p {
  font-size: 21px;
  margin: 14px;
  line-height: 2;
}

.container img {
  position: relative;
  margin: 20px;
}

.container ul {
  text-align: center;
  font-weight: bold;
  padding: 15px;
  color: #434548;
}

::marker {
  color: #8A9AAF;
}

.container li {
  padding: 5px;
  font-size: 18px;
}

.container a {
  color: rgb(255,255,255, 0.65);
  text-decoration: none;
  background: #8A9AAF;
  font-weight: bold;
  padding: 1px 8px;
  border-radius: 4px;
  font-variant: small-caps;
  transition: .3s;
}

.container a:hover {
  background: #B3BECB;
  color: #FFFFFF;
  transition: .3s;
  cursor: pointer;
}

</style>

<!--Icons-->
<script src="https://kit.fontawesome.com/47b21c5749.js" crossorigin="anonymous"></script>

<!--Favicon-->
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="manifest" href="/site.webmanifest">

<header>
  <nav class="navbar">
    <a id="logo" href="../index.html">Priscilla King</a>
    <img id="nav_sig" src="../images/signature_w.png" alt="PK" height="25">
    <div class="menu">
      <a href="../contact.html">Contact</a>
      <a href="../about.html">Behind the Art</a>
      <div class="dropdown">
        <button class="dropbtn">Gallery
          <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
          <a href="../gallery/art.html">2012-2021</a>
          <a href="../gallery/show.html">Nostalgia</a>
        </div>
      </div>
       <a href="../index.html">Home</a>
    </div>
  </nav>
</header>


<div class="container">
	<h1>Missing Fields</h1>
	<p>Sorry, you have not completed all of the required fields.</p>
	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

	<ul>
	<?php
		for($i=0; $i<count($this->missing_required_fields); $i++){
			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
		}
	?>
	</ul>

	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>

  <img src="../images/signature_g.png" alt="PK signature" height="80"/>
</div>

<footer>
    <div class="social_media">
      <span class="icons">

        <a href="https://www.instagram.com/priscillakingart/?hl=en" target="_blank"><i class="fab fa-instagram-square"></i></a>
        <a href="mailto:priscillaanneking@gmail.com"><i class="fas fa-envelope-square"></i></a>
        <a href="https://www.linkedin.com/in/priscilla-king-7b1ba2132/" target="_blank"><i class="fab fa-linkedin"></i></a>

      </span>
    </div>
</footer>
