<style type="text/css">
  *{
    margin: 0;
    padding: 0;
    border: 0;
    font-family: Montserrat,sans-serif;

  }

  /*=======================================

    Navigation Bar Styling

  ========================================*/

  header {
    border-bottom: 7px solid #434548;
  }

  h1 a {
    text-decoration: none;
    font-family: 'Caveat' , cursive;
    font-size: 64px;
    position: absolute;
    color: #fff;
    top: 0px;
    left: 7%;
  }

  .menu {
    list-style: none;
    background: #8A9AAF;
    max-width: 100%;
    padding: 32px;
  }

  .menu > ul > li {
    display: inline-block;
    background: #8A9AAF;
    text-align: center;
    position: relative;
    left: 827px;
    top: 17px;
    font-size: 18px;
    text-underline-position: white;
  }

  .menu ul li a {
    color: white;
    display: block;
    text-decoration: none;
  }

  .menu-item {
    background: #8A9AAF;
    padding: 0px 32px;
  }

  .sub-menu {
    display: none;
  }
  .menu-item:hover .sub-menu {
    display: block;
  }

  .menu > ul > li > a:hover {
    font-weight: bold;
    text-decoration: underline overline;

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
}

.icons {
  color: #708198;
  font-size: 36px;
  position: relative;
  display: inline;
  left: 45%;
}

.icons:visited {
  color:#708198;
}

.fab, .far {
    font-weight: 400;
    padding: 0px 25px;
}

/*===============================


  Error Styling


*===============================*/

.container h1 {
  text-align: center;
  font-family: 'Caveat', cursive;
  font-size: 36px;
  color: #333;
  padding: 25px;
}

.container p {
  text-align: center;
  color: #759da5;
  padding: 5px;
}

.container ul {
  text-align: center;
  font-weight: bold;
  padding: 15px;
  color: #333;
}

::marker {
  color: #c5d16f;
}

.container li {
  padding: 5px;
  font-size: 18px;
}

.container a {
  color: whitesmoke;
  text-decoration: none;
  background: #759da5;
  font-weight: bold;
  padding: 1px 8px;
  border-radius: 4px;
  font-variant: small-caps;
}

.container ul::first-letter{
  font-size: 20px;
}

.container a:hover {
  font-style: italic;

}

</style>

<script src="https://kit.fontawesome.com/47b21c5749.js" crossorigin="anonymous"></script>

<header>
  <div class="container">
    <h1><a href="index.html">Priscilla King</a></h1>
    <nav class="menu">
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
    </nav>
  </div>
</header>


<div class="container">
	<h1>Missing fields</h1>
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
