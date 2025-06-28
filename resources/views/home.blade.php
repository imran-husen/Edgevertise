<x-layout>
  <x-slot name="title">Home</x-slot>

  <x-slot name="bodycode">
    <!-- This is the slider part of the website -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/slider1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slider2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slider3.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/slider4.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Here crousel has been end-->
    
      <!-- Here we are goig to the develope the code of the header sections -->
      <!-- About 2 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5 d-none d-md-block">
      <div class="container">
        <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
          <div class="col-12 col-lg-6">
            <div class="row justify-content-xl-center">
              <div class="col-12 col-xl-10">
                <h1 class="mb-3 text-success fs-4 fw-bold">Transforming Your Vision into Reality</h1>
                <h2 class="mb-3 text-danger fs-4 fw-bold">Experience exceptional Mobile App & Websites with Edgevertise</h2>
                <div class="d-flex align-items-center mb-3">
                  <div class="me-3 text-secondary">
                    <p class="fs-6 m-0 text-secondry">Edgevertise offers tailored IT solutions with extensive industry experience and a dynamic team of IT experts, ensuring unmatched client satisfaction. With a proven track record, we specialise in custom mobile app development & web development that align with your business objectives.</p>
                  </div>
                </div>
                <!-- Provide the better link here for the connections-->
                <a href="tel:+91 8318822513"><button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill">Connect Now</button></a>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 ">
            <video   height="364px" width="650px" autoplay muted loop src = "image/Visualizations.mp4" frameborder="0"  type="video/mp4"></video>
          </div>
        </div>
      </div>
    </section>
      <!-- here we are creating the some about of the company pats code-->
      <section class="py-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h2 class="display-5 fw-bold text-danger" >Why Hire Edgevertise</h2>
                <p class="lead fs-6 card-text fw-b" id="keys">This is the place where challenges meet with creative and unwavering dedication. Where Innovation, Quality, and Commitment Come Together to Shape Your Success! Join Forces with <b>EDGEVERTISE</b> - Your Catalyst for Growth. Your Partner in Success. Your Bridge to the Future!</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Here it has been end-->
      
      <!-- here are creating three cards for the company properties-->
      <div class="container my-2">
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
          <!-- Card 1 -->
          <div class="col">
            <div class="card" style="border:none">
              <img src="image/web-development.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-success">Web-Developments</h5>
                <p class="card-text text-center">Edgevertise offers innovative, responsive web development solutions, ensuring seamless user experiences, advanced features, and high-performance websites tailored to businesses</p>
              </div>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="col">
            <div class="card"style="border:none">
              <img src="image/mobile-app.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-success">App-Developments</h5>
                <p class="card-text text-center">Edgevertise offers custom, scalable, and secure app development solutions that are user-friendly, innovative, and designed for optimal performance across platforms</p>
              </div>
            </div>
          </div>
      
          <!-- Card 3 -->
          <div class="col">
            <div class="card" style="border:none">
              <img src="image/social-media.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-success">Digital Marketing</h5>
                <p class="card-text text-center">Edgevertise provides innovative digital marketing strategies, ensuring brand growth through SEO, social media, content creation, and data-driven solutions.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Here end of the three cards-->
      
      <!-- Here i am going to talking about the various types of the technology of the company-->
    
      <section class="py-2 d-none d-md-block">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h2 class="display-5 fw-bold text-danger"><u>Our Technologies</u></h2>
                <p class="lead fs-6 card-text fw-b" id="keys">Technologies that is driving innovation and creating a better future for generations to come</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container mt-2 d-none d-md-block ">
        <div class="row justify-content-center">
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center" >
              <img src="image/php.png" class="card-img-top" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center ">php</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/python.png" class="card-img-top p-2" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">Python</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image\django.png" class="card-img-top p-1" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">Django</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/.net core.png" class="card-img-top p-1" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">.Net Core</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/adriod.png" class="card-img-top p-1" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">Android</h5>
              </div>
            </div>
          </div>  
        </div>
      </div>
      <div class="container mt-2 d-none d-md-block">
        <div class="row justify-content-center">
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/ios.png" class="card-img-top p-1" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">IOS</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/laravel.png" class="card-img-top p-2" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">Laravel</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/node js.png" class="card-img-top p-1" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">Node js</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/react js.png" class="card-img-top p-2" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center"> React js</h5>
              </div>
            </div>
          </div>
          <div class="col-sm-2" style="margin-top:10px">
            <div class="card1 text-center">
              <img src="image/blockchain.png" class="card-img-top p-1" alt="Card image 1" style="height:100px; width:100px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center">Blockchain</h5>
              </div>
            </div>
          </div>
          
        </div>
      </div>
     <!-- We have ended the all services of the company-->
    
     <!-- I am going to crete the card to provide the offer to the clients  that id headingg and their below contains some three box-->
     <section class="py-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="text-center">
              <h2 class="display-5 fw-bold" style="color:#17c0de">Our Offerings</h2>
              <p class="lead fs-6 card-text fw-b"><b>Specialized Conclusion of Every Want, One Solution at a Time</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Here start the ccode of the box-->
    <div class="container my-2">
      <div class="row row-cols-1 row-cols-md-3 g-4 ">
        <!-- Card 1 -->
        <div class="col">
          <div class="card" style="border:2px solid #17c0de; border-radius:10px">
            <img src="image/it web service.png" class="card-img-top p-2" alt="Card image 1" style="height:150px; width:150px; margin:auto">
            <div class="card-body">
              <h4 class="card-title text-center fw-bold text-danger">IT-Web Solutions</h4>
              <p class="card-text text-center">Edgevertise Service Pvt. Ltd. offers innovative IT web solutions, combining cutting-edge technology with personalized strategies to help clients enhance their online presence, drive business growth, and achieve seamless digital transformation with exceptional results to future.</p>
            </div>
             <button type="button" class="btn btn-sm text-light" style="background-color:#17c0de"><a href="tel:+91 8318822513" style="text-decoration:none; color: white; font-weight:bold; font-size:15px">Talks to Our Expert</a></button>
          </div>
        </div>
        
        <!-- Card 2 -->
        <div class="col">
          <div class="card"style="border:2px solid #17c0de; border-radius:10px">
            <img src="image/app-development.png" class="card-img-top p-2" alt="Card image 1" style="height:150px; width:150px; margin:auto">
            <div class="card-body">
              <h4 class="card-title text-center fw-bold text-danger">Mobile Application Solutions</h4>
              <p class="card-text text-center">Edgevertise Service Pvt. Ltd. delivers innovative mobile app solutions, crafting intuitive, user-friendly applications that empower clients to engage customers, streamline operations, and enhance business performance through advanced technology and tailored mobile experiences.</p>
            </div>
            <button type="button" class="btn btn-sm text-light" style="background-color:#17c0de"><a href="tel:+91 8318822513" style="text-decoration:none; color: white; font-weight:bold; font-size:15px">Talks to Our Expert</a></button>
          </div>
        </div>
    
          <!-- Card 3 -->
          <div class="col">
            <div class="card" style="border:2px solid #17c0de; border-radius:10px">
              <img src="image/ecommerce.png" class="card-img-top p-2" alt="Card image 1" style="height:150px; width:150px; margin:auto">
              <div class="card-body">
                <h4 class="card-title text-center fw-bold text-danger">E-Commerce Service</h4>
                <p class="card-text text-center">Edgevertise Service Pvt. Ltd. provides robust e-commerce solutions, offering seamless, scalable platforms that enhance user experience, optimize conversions, and drive business growth through innovative features, secure transactions, and customized strategies tailored to client needs.</p>
              </div>
              <button type="button" class="btn btn-sm text-light" style="background-color:#17c0de"><a href="tel:+91 8318822513" style="text-decoration:none; color: white; font-weight:bold; font-size:15px">Talks to Our Expert</a></button>
            </div>
          </div>
        </div>
      </div>
      <!-- Here we are creating a sms box for the internship-->
    
      <!-- Here i am going to code of the Board member -->
      <section class="py-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h4 class="display-6 fw-bold text-danger">Meet Our Board Member</h4>
                <p class="lead fs-6 card-text fw-b" id="keys" style="font-family:Roboto, sans-serif;">Our passionate and dedicated team brings together a diverse range of skills and expertise to deliver exceptional results. From creative visionaries to meticulous strategists, we work seamlessly together to meet and exceed our client's expectations.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="container my-2">
        <div class="row row-cols-1 row-cols-md-3 g-4 ">
          <!-- Card 1 -->
          <div class="col">
            <div class="card" style="border:none">
              <img src="image/Founder sir.jpg" class="card-img-top p-1" alt="Card image 1" style="height:200px; width:200px; margin:auto; border: 2px solid black; border-radius: 100%; box-shadow: 0px 0px 5px 3px black;">
              <div class="card-body">
                <h5 class="card-title text-center text-success">Mr. Sandip Kumar Singh</h5>
                <p class="card-text text-center">Founder</p>
              </div>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="col">
            <div class="card"style="border:none">
              <img src="image/Director Sir.jpg" class="card-img-top p-1" alt="Card image 1" style="height:200px; width:200px; margin:auto;border: 2px solid black; border-radius: 100%; box-shadow: 0px 0px 5px 3px black;">
              <div class="card-body">
                <h5 class="card-title text-center text-success">Dr. Gyan Singh</h5>
                <p class="card-text text-center">Director</p>
              </div>
            </div>
          </div>
      
          <!-- Card 3 -->
          <div class="col">
            <div class="card" style="border:none">
              <img src="image/manager.png" class="card-img-top p-1" alt="Card image 1" style="height:200px; width:200px; margin:auto; border: 2px solid black; border-radius: 100%; box-shadow: 0px 0px 5px 3px black;">
              <div class="card-body">
                <h5 class="card-title text-center text-success">Mr. Imran Husen</h5>
                <p class="card-text text-center">Manager</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Here i am going to crete the about section of the project and clients details -->
    <section class="py-2 ">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="text-center">
              <h4 class="display-6 fw-bold text-primary">About us</h4>
              <p class="lead fs-4 card-text fw-b text-secondary fw-bold" id="keys"><b>A global leader in next-generation digital services and consulting</b></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-1">
      <div class="row">
        <!-- Card 1 -->
        <div class="col-md-3">
          <div class="card mt-1" style="border:none;">
            <div class="card-body text-center"  >
              <h3 class="card-title fw-bold">92%</h3>
              <p class="card-text text-secondary">customer return call for next project</p>
            </div>
          </div>
        </div>
    
        <!-- Card 2 -->
        <div class="col-md-3">
          <div class="card mt-1" style="border:none;">
            <div class="card-body text-center ">
              <h3 class="card-title fw-bold ">50+</h3>
              <p class="card-text text-secondary">Mobile App and Web Development<p>
            </div>
          </div>
        </div>
    
        <!-- Card 3 -->
        <div class="col-md-3">
          <div class="card mt-1" style="border:none;">
            <div class="card-body text-center">
              <h3 class="card-title fw-bold">20+</h3>
              <p class="card-text text-secondary">customized and Maintenace</p>
            </div>
          </div>
        </div>
    
        <!-- Card 4-->
        <div class="col-md-3">
          <div class="card mt-1" style="border:none;">
            <div class="card-body text-center">
              <h3 class="card-title fw-bold">20K</h3>
              <p class="card-text text-secondary">Active customer</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Here closed the clients and project details -->
    
    <!-- Here we are creating a form tah should be contact form-->
    <div class="container mt-3" id="contact">
      <div class="row justify-content-center p-3">
        <div class="col-12 col-md-8 p-3" style="border:1px solid grey;border-radius:5px">
          <h2 class="text-center mb-4 text-danger fw-bold m-2" ><u>Contact With me</u></h2>
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
    <!-- Form code has been end-->
    <!-- Here we will show the feedback of the clients-->
    <h2 class="text-center mt-4" style="font-family: Playfair Display, serif;"><b>Testimonials</b></h2>
    <div class="container mt-1">
      <div class="row">
          <!-- Testimonial 1 -->
          <div class="col-md-3">
              <div class="testimonial-box">
                  <img src="image/client2.jpg" alt="Client Image">
                  <div class="feedback">
                      <div class="rating">
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9734;</span>
                      </div>
                      <p>"This service was amazing! I would definitely recommend it to others."</p>
                  </div>
              </div>
          </div>
          <!-- Testimonial 2 -->
          <div class="col-md-3">
              <div class="testimonial-box">
                  <img src="image/clients1.jpg" alt="Client Image">
                  <div class="feedback">
                      <div class="rating">
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9734;</span>
                      </div>
                      <p>"Really happy with the results! The team was very professional"</p>
                  </div>
              </div>
          </div>
          <!-- Testimonial 3 -->
          <div class="col-md-3">
              <div class="testimonial-box">
                  <img src="image/clients3.jpg" alt="Client Image">
                  <div class="feedback">
                      <div class="rating">
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9734;</span>
                          <span>&#9734;</span>
                      </div>
                      <p>"Edgevertise Service provide the best web solution in the IT Sector"</p>
                  </div>
              </div>
          </div>
          <!-- Testimonial 4 -->
          <div class="col-md-3">
              <div class="testimonial-box">
                  <img src="https://via.placeholder.com/50" alt="Client Image">
                  <div class="feedback">
                      <div class="rating">
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                          <span>&#9733;</span>
                      </div>
                      <p>"Excellent service! Exceeded my expectations. Will definitely return!"</p>
                  </div>
              </div>
          </div>
      </div>
    </div>
    <!-- Here we end the testomials the clients feedback-->
    
    </x-slot>
</x-layout>
