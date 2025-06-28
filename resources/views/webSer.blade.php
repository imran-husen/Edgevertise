<x-layout>
  <x-slot name="title">Website-Service</x-slot>

  <x-slot name="bodycode">
   
  <!-- Here we are going to the writing of the body drction of the section -->
  <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h2 class="display-5 fw-bold text-primary" >Web-Application Service</h2>
                <p class="lead fs-6 card-text fw-b" id="keys" style="Font-family:arial">Edgevertise Service Private Limited specializes in cutting-edge web development, delivering high-performance websites and web applications tailored to client needs. Using modern technologies, responsive design, and secure coding practices, we create scalable and user-friendly digital solutions that enhance business growth, streamline operations, and provide exceptional user experiences across all platforms. </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Here it has been end-->
      
      <!-- here are creating three cards for the company properties-->
      <div class="container my-3">
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
          <!-- Card 1 -->
          <div class="col">
            <div class="card" style="border:2px solid red">
              <img src="image/scholl website.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-primary">School Management Website </h5>
                <p class="card-text text-center">Edgevertise Service Private Limited develops efficient school management websites with features like attendance tracking, online fees, student records, and communication tools for seamless administration. </p>
              </div>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="col">
            <div class="card" style="border:2px solid red">
              <img src="image/commerce wibsite.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-primary">E-Commerce Website</h5>
                <p class="card-text text-center">Edgevertise Service Private Limited creates dynamic e-commerce websites with secure payment integration, user-friendly design, and advanced features to enhance online shopping experiences and boost sales growth.</p>
              </div>
            </div>
          </div>
      
          <!-- Card 3 -->
          <div class="col">
            <div class="card" style="border:2px solid red">
              <img src="image/business website.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-primary">Business Website</h5>
                <p class="card-text text-center">Edgevertise Service Private Limited offers professional business website development, delivering responsive, secure, and scalable solutions to enhance online presence, growth, and improve customer.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- This is the card that should be contains only my product of the company -->
    <center>
    <section class="container my-3 row-cols-12 row-cols-lg-8" >
        <div class="row text-center">
            <h2 class="mb-2 text-primary">My web Service For My Best Clients</h2>
        </div>
    <div class="row row-cols-2 row-cols-lg-6 g-0">
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/Eklavya Classes.png" alt="App 1">
                    <h5 class="mt-2">Eklavya Classes</h5>
                </div>
            </div>
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/mpbp.jpg" alt="App 2">
                    <h5 class="mt-2">MPBP Infratech</h5>
                </div>
            </div>
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/news360.jpg" alt="App 3">
                    <h5 class="mt-2">News360</h5>
                </div>
            </div>
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/bwitcher.jpg" alt="App 4">
                    <h5 class="mt-2">Bluewitcher</h5>
                </div>
            </div>
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/Super Saving Market.jpg" alt="App 5">
                    <h5 class="mt-2">Super Saving Market</h5>
                </div>
            </div>
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/Rural Literacy Simulator (1).png" alt="App 6">
                    <h5 class="mt-2">RLS Organisation</h5>
                </div>
            </div>
        </div>
    </section>
    </center>
    <!-- This is the contect for the clients -->
      <!-- Here we are creating a form tah should be contact form-->
    <div class="container mt-3" id="contact">
      <div class="row justify-content-center p-3" >
        <div class="col-12 col-md-6 p-3" style="border:2px solid red;border-radius:5px">
          <h2 class="text-center mb-4 text-primary fw-bold m-2" ><u>Contact With me</u></h2>
          <form action="storeClient" method="post">
            @csrf
            <!-- Full Name and Company Name -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="fullName" class="form-label">Full Name:</label>
                <input type="text" class="form-control" name="name" id="fullName" placeholder="Enter full name" required>
              </div>
              <div class="col-md-6">
                <label for="companyName" class="form-label">Company/School/College/Other Name:</label>
                <input type="text" class="form-control" name="company" id="companyName" placeholder="Enter Company/College/School/Other name">
              </div>
            </div>
    
            <!-- Mobile Number and Email -->
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="mobileNumber" class="form-label">Mobile Number</label>
                <input type="tel" class="form-control" name="mobile" id="mobileNumber" placeholder="Enter mobile number" required>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
              </div>
            </div>
            
            <!-- Description Box -->
            <div class="row mb-3">
              <div class="col-12">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter description here" required></textarea>
              </div>
            </div>
    
            <!-- Submit Button -->
            <div class="row mb-3">
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-danger w-50 ">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </x-slot>
</x-layout>
   