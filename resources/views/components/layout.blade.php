<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="image/main logos.jpeg">
    
    <!-- Here i am adding some new google fonts  ( font-family: "Arima", serif;)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <title>{{$title}}</title>
  </head>
  <body>   <!-- Here we are going to applying the side bar-->
  <header>
  <!-- NavBar -->
  <div class="container mb-0">
    <nav class="navbar navbar-expand-xl bg-white">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="image/main logos.jpeg" alt="Logo" width="40" height="40">
        </a>
        <!-- Simplified Hamburger Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <!-- Services Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/services.php" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                <li><a class="dropdown-item" href="{{url('Mobile-Service')}}">Mobile Applications</a></li>
                <li><a class="dropdown-item" href="{{url('Website-Service')}}">Web Applications</a></li>
                <li><a class="dropdown-item" href="{{url('/Cyber-Security-Service')}}">Cyber Security</a></li>
                <li><a class="dropdown-item" href="{{url('/Digital-Marketing')}}">Digital Marketing</a></li>
                <li><a class="dropdown-item" href="{{url('/Hosting-Cloud')}}">Hosting and Cloud</a></li>
              </ul>
            </li>
            <!-- Technologies Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/our-technologies.php" id="technologiesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Technologies
              </a>
              <ul class="dropdown-menu" aria-labelledby="technologiesDropdown">
                <li><a class="dropdown-item" href="{{url('/E-Commerce-Technology')}}">E-Commerce Technologies</a></li>
               <!-- <li><a class="dropdown-item" href="{{url('/Mobile-Technology')}}">Mobile Technologies</a></li> -->
                <li><a class="dropdown-item" href="{{url('/CMS-Technology')}}">CMS</a></li>
              </ul>
            </li>
             <!-- Portfolio Dropdown -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/portfolio.php" id="portfolioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Portfolio
                </a>
                <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                  <li><a class="dropdown-item" href="{{url('/portfolio')}}">My Portfolio</a></li>
                  <li><a class="dropdown-item" href="{{url('/legal-Documents')}}">legal Documents</a></li>
                </ul>
              </li>
            <!-- About of the company-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="/about-us.php" id="companyDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Company
                </a>
                <ul class="dropdown-menu" aria-labelledby="companyDropdown">
                  <li><a class="dropdown-item" href="{{url('/about')}}">About Us</a></li>
                  <li><a class="dropdown-item" href="{{url('/features')}}">Our Features</a></li>
                  <li><a class="dropdown-item" href="{{url('/contact')}}">Contact Us</a></li>
                </ul>
              </li>
            <!-- Industries Dropdown 
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/industries.php" id="industriesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Industries
              </a>
              <ul class="dropdown-menu" aria-labelledby="industriesDropdown">
                <li><a class="dropdown-item" href="/beauty-health-applications.php">Beauty and Health</a></li>
                <li><a class="dropdown-item" href="/career-education-applications.php">Career and Education</a></li>
                <li><a class="dropdown-item" href="/ecommerce-applications.php">E-Commerce</a></li>
                <li><a class="dropdown-item" href="/fashion-apparel-applications.php">Fashion and Apparels</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="{{url('/career')}}">Careers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="{{url('/internship')}}">Internship</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/Writing-and-Publication')}}">Writing And Publication</a>
            </li>
          </ul>
          <div class="d-flex">
            <a class="btn btn-primary" href="{{url('/log-in-admin')}}">Admin Login</a>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
    <!-- Here closed the navigation-->
<!-- Here header section it means navbar has been  ended -->

{{$bodycode}}

<!-- Here start the footer section of the webpage -->
<footer class="bg-dark text-light pt-5">
  <div class="container">
    <div class="row">
      <!-- First Column: Company Location -->
      <div class="col-md-3 mb-4">
        <h5 class="text-primary fw-bold ">Our Location</h5>
        <div class="d-flex align-items-center mb-2">
          <img src="https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png" alt="Indian Flag" width="30" class="me-2 text-center">
          <span>India</span>
        </div>
        <p><b>Regitered Address: </b>HN-1, CHILLA ROAD BANDA, UP-210001 India</p>
        <p><b> Working Address: </b> BKT, Sitapur Road Lucknow</p>
      </div>
      
      <!-- Second Column: Services -->
      <div class="col-md-3 mb-4">
        <h5 class="text-center fw-bold text-primary">Our Services</h5>
        <ul class="list-unstyled text-center">
          <li><a href="#" class="text-light text-decoration-none">Full Stack Development</a></li>
          <li><a href="#" class="text-light text-decoration-none">Website Development</a></li>
          <li><a href="#" class="text-light text-decoration-none">App Developmet</a></li>
          <li><a href="#" class="text-light text-decoration-none">ERP Software</a></li>
          <li><a href="#" class="text-light text-decoration-none">Digital Marketing</a></li>
          <li><a href="#" class="text-light text-decoration-none">Website- Maintenace</a></li>
        </ul>
      </div>
      
      <!-- Third Column: Quick Links -->
      <div class="col-md-3 mb-4">
        <h5 class="text-center fw-bold text-primary">Quick Links</h5>
        <ul class="list-unstyled text-center">
          <li><a href="{{url('/')}}" class="text-light text-decoration-none">Home</a></li>
          <li><a href="{{url('/about')}}" class="text-light text-decoration-none">About Us</a></li>
          <li><a href="{{url('/service')}}" class="text-light text-decoration-none">Services</a></li>
          <li><a href="{{url('/contact')}}" class="text-light text-decoration-none">Contact</a></li>
          <li><a href="{{url('/features')}}" class="text-light text-decoration-none">Features</a></li>
          <li><a href="{{url('/portfolio')}}" class="text-light text-decoration-none">Portfolio</a></li>
        </ul>
      </div>
      
      <!-- Fourth Column: Contact Details -->
      <div class="col-md-3 mb-4">
        <h5 class="text-center text-primary fw-bold">Contact Us</h5>
        <ul class="list-unstyled text-center">
          <li><i class="bi bi-telephone"></i>+91 8318822513 </li>
          <li><i class="bi bi-telephone"></i>+91 9451160920 </li>
          <li><i class="bi bi-envelope"></i> support@edgevertise.com</li>
          <li><i class="bi bi-geo-alt"></i> Banda, UP, India</li>
          <li><i class="bi bi-clock"></i> Mon-Fri: 9:00 AM - 6:00 PM</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="bg-secondary text-center py-3">
    <p class="mb-0">&copy; 2023 edgevertise.in. All rights reserved.</p>
  </div>
</footer>
<!--  has been end here Footer -->

<!-- This is the boostrap java script imported properties-->
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script> 
<body>
</html>