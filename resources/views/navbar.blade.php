@extends('Master_page')
@section('title', 'Home')
@section('content')

<script src="{{ asset('path/to/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('path/to/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<style>
  .navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler-icon,
.navbar-scroll .navbar-brand {
  color: #fff;
}

/* Color of the links AFTER scroll */
.navbar-scrolled .nav-link,
.navbar-scrolled .navbar-toggler-icon,
.navbar-scrolled .navbar-brand {
  color: #fff;
}

/* Color of the navbar AFTER scroll */
.navbar-scroll,
.navbar-scrolled {
  background-color: #cbbcb1;
}

.mask-custom {
  backdrop-filter: blur(5px);
  background-color: rgba(214, 205, 205, 0.15);
}

.navbar-brand {
  font-size: 1.75rem;
  letter-spacing: 3px;
  margin-right: auto; /* Pour déplacer le logo à gauche */
}

.navbar-nav {
  margin-left: auto; /* Pour centrer les éléments de navigation */
}

.navbar-nav.d-flex.flex-row .nav-item {
  margin-left: 15px; /* Espacement entre les éléments */
}

.img-logo {
  width: 120px; /* Définissez la largeur de votre logo */
  margin-left: 60px
}
#intro {
  position: relative;
}

#intro img {
  width: 100%; /* Assurez-vous que l'image occupe toute la largeur de son conteneur */
  height: auto; /* Gardez les proportions de l'image */
}

#intro .position-absolute {
  top: 50%; /* Positionne le contenu au milieu verticalement */
  left: 50%; /* Positionne le contenu au milieu horizontalement */
  transform: translate(-50%, -50%); /* Centre précisément le contenu */
}

#intro h1 {
  color: #fff; /* Couleur du texte */
  font-size: 3rem; /* Taille de la police */
  margin-bottom: 1rem; /* Marge en bas du titre */
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}

#intro hr {
  width: 70%; /* Largeur de la ligne */
  margin: 0 auto 2rem; /* Marge en bas de la ligne */
  border-color: #fff; /* Couleur de la ligne */
}




h1 {
  position: relative;
  margin-bottom: 40px;
  margin-top: 40px; /* Ajout de margin-top */
  font-family: 'Times New Roman', Times, serif;
  font-size: 44px;
  text-transform: uppercase;
  color: #0d0d0d;
  text-align: center;
}
.hr-before {
  border: none;
  height: 2px;
  background-color: #000;
  margin: 20px auto; /* Marge en bas du hr */
}

.hr-after {
  border: none;
  height: 2px;
  background-color: #000;
  margin: 20px auto; /* Marge en haut du hr */
}



.gallery-wrap {
  display: flex;
  flex-direction: row;
  width: 100%;
  height: 70vh;
}

.item {
  flex: 1;
  height: 100%;
  background-position: center;
  background-size: cover;
  background-repeat: none;
  transition: flex 0.8s ease;
  filter: blur(1px);
  border-radius: 25px;
}
.item:hover {
  flex: 7;
  filter: blur(0px);
}

.item-1 {
  background-image: url("pictures/image11.jpg");
}

.item-2 {
  background-image: url("pictures/image8.jpg")}
.item-3 {
  background-image: url("pictures/image9.jpg");
}

.item-4 {
  background-image: url("pictures/image10.jpg");
}

.item-5 {
  background-image: url("pictures/img7.jpg");
}

.social {
  position: absolute;
  right: 35px;
  bottom: 0;
}
.social img {
  display: block;
  width: 32px;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,500,300,700);





.footer-distributed{
  margin-top: 20px;
  background: black;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;
  padding: 55px 50px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
  width: 40%;
}

/* The company logo */

.footer-distributed h3{
  color:  #ffffff;
  font: normal 36px 'Open Sans', cursive;
  margin: 0;
}

.footer-distributed h3 span{
  color:  lightseagreen;
}

/* Footer links */

.footer-distributed .footer-links{
  color:  #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a{
  display:inline-block;
  line-height: 1.8;
  font-weight:400;
  text-decoration: none;
  color:  inherit;
}

.footer-distributed .footer-company-name{
  color:  #222;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
  width: 35%;
}

.footer-distributed .footer-center i{
  background-color:  #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p{
  display: inline-block;
  color: #ffffff;
  font-weight:400;
  vertical-align: middle;
  margin:0;
}

.footer-distributed .footer-center p span{
  display:block;
  font-weight: normal;
  font-size:14px;
  line-height:2;
}

.footer-distributed .footer-center p a{
  color:  lightseagreen;
  text-decoration: none;;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight:300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right{
  width: 20%;
}

.footer-distributed .footer-company-about{
  line-height: 20px;
  color:  #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span{
  display: block;
  color:  #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons{
  margin-top: 25px;
}

.footer-distributed .footer-icons a{
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color:  #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

  .footer-distributed{
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right{
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }

  .footer-distributed .footer-center i{
    margin-left: 0;
  }

}

</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
    <a class="navbar-brand" href="#!">
      <img src="{{ asset('pictures/photo1714947302-removebg-preview.png') }}" alt="Logo" class="img-logo">
    </a>
    <div class="container">      
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link" href="#!">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">Reservation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#!">our project</a>
          </li>
         
         
          <li class="nav-item">
            <a class="nav-link" href="#!">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav d-flex flex-row">
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#!">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!--Section: Design Block-->
  <section>
    <div id="intro" class="bg-image vh-100 position-relative text-center">
      <img src="{{ asset('foy.webp') }}" alt="Background Image">
      <div class="mask" style="background-color: rgba(250, 182, 162, 0.15);"></div>
      <div class="position-absolute top-50 start-50 translate-middle">
        <h1 class="text-white">Make your relation halal</h1>
        <hr class="my-4" style="width: 50%;">
      </div>
    </div>
  </section>
  <!--Section: Design Block-->
</header>
<div>

<!-- partial:index.partial.html -->
<div class="container">
  <div class="container">
    <hr class="hr-before">
    <h1>our gallery</h1>
    <hr class="hr-after">
    <!-- Votre galerie d'images ici -->
  </div>
  

  <div class="gallery-wrap">
    <div class="item item-1"></div>
    <div class="item item-2"></div>
    <div class="item item-3"></div>
    <div class="item item-4"></div>
    <div class="item item-5"></div>
  </div>
 </div>

</body>
</html>

</div>
<script>
  // Initialisation des composants Bootstrap
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();
  });
</script>
<footer class="footer-distributed">

  <div class="footer-left">

    <img src="{{ asset('pictures/photo1714947302.jpeg') }}" alt="" style="width: 90px">

    <p class="footer-links">
      <a href="#" class="link-1">Home</a>
      
      <a href="#">Blog</a>
    
      <a href="#">Pricing</a>
    
      <a href="#">About</a>
      
      <a href="#">Faq</a>
      
      <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">Company Name © 2015</p>
  </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>+1.555.555.5555</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@company.com">support@company.com</a></p>
    </div>

  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>About the company</span>
      Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
    </p>

    <div class="footer-icons">

      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>

    </div>

  </div>

</footer>
@endsection
