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

header {
  border-bottom: 7px solid #434548;
  background: #8A9AAF;
  max-width: 100%;
  padding: 40px;
}

h1 a {
  text-decoration: none;
  font-family: 'Caveat' , cursive;
  font-size: 64px;
  position: absolute;
  color: #fff;
  top: 10px;
  left: 7%;
}


.menu-nav > ul > li {
  display: inline-block;
  text-align: center;
  font-size: 18px;
  list-style: none;
  padding: 0px 76px;
}

.menu-nav ul li a {
  color: white;
  display: block;
  text-decoration: none;
  position: absolute;
  width: 170px;
}

.menu-nav ul {
  position: relative;
}


.menu-nav {
position: relative;
left: 715px;
}

.menu-item {
  background: #8A9AAF;
  list-style: none;
  display: inline-block;
}

.menu-nav > ul > li > a:hover {
  font-weight: bold;
  text-decoration: underline overline;
  text-underline-offset: 6px;
  text-decoration-thickness: 2px;

}

.sub-menu {
  display: none;
}
.menu-item:hover .sub-menu {
  display: block;
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


/*=======================================

 Thank you page Styling

========================================*/
.container {
  text-align: center;
  margin: 100px;
}

.container h1 {
  font-size: 64px;
  padding-bottom: 25px;
}

.container p {
  font-size: 21px;
  margin: 20px;
  line-height: 2;
}

.container img {
  position: relative;
  margin: 50px;
}

</style>

<script src="https://kit.fontawesome.com/47b21c5749.js" crossorigin="anonymous"></script>


<header>
  <nav class="menu">
  <h1><a href="index.html">Priscilla King</a></h1>
  <div class="menu-nav">
      <ul>
        <li class="menu-item"><a href="index.html">Home</a></li>
        <li class="menu-item"><a href="#">Gallery</a></li>
          <ul class="sub-menu">
            <li class="menu-item"><a href="gallery/art.html">2012-2020</a></li>
            <li class="menu-item"><a href="gallery/show.html">Nostalgia</a></li>
          </ul>
        <li class="menu-item"><a href="about.html">Behind the Art</a></li>
        <li class="menu-item"><a href="contact.html">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>


<div class="container">
  <h1>Sent</h1>
  <p>Thank you for your interest!<br>I will be in touch shortly.</p>
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
