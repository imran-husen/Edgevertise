<x-layout>
  <x-slot name="title">Mobile Service</x-slot>

  <x-slot name="bodycode">
  <!-- This is the service page of the mobile solution -->
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h2 class="display-5 fw-bold text-danger" >Mobile Application Service</h2>
                <p class="lead fs-6 card-text fw-b" id="keys">Edgevertise provides cutting-edge mobile solutions, empowering businesses with seamless, high-performance apps tailored to their needs. Our secure, user-friendly, and scalable applications enhance productivity, engagement, and operational efficiency. From school management to commercial and business apps, we deliver innovative solutions that drive success, ensuring a smooth and impactful digital experience.</p>
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
            <div class="card" style="border:2px solid blue">
              <img src="image/school app.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-success">School Management App </h5>
                <p class="card-text text-center">Edgevertise delivers cutting-edge school management apps, streamlining administration, enhancing communication, and optimizing efficiency with intuitive, secure, and scalable solutions tailored for modern educational institutions. Empower your school today!</p>
              </div>
            </div>
          </div>
          
          <!-- Card 2 -->
          <div class="col">
            <div class="card" style="border:2px solid blue">
              <img src="image/commercial app.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-success">Commercial Mobile App</h5>
                <p class="card-text text-center">Edgevertise crafts powerful commercial mobile apps, enhancing business operations with seamless functionality, user-friendly design, and robust security. Elevate engagement, efficiency, and growth with our innovative mobile solutions.</p>
              </div>
            </div>
          </div>
      
          <!-- Card 3 -->
          <div class="col">
            <div class="card" style="border:2px solid blue">
              <img src="image/Business mobile app.png" class="card-img-top p-2" alt="Card image 1" style="height:200px; width:200px; margin:auto">
              <div class="card-body">
                <h5 class="card-title text-center fw-bold text-success">Business Mobile App</h5>
                <p class="card-text text-center">Edgevertise develops dynamic business mobile apps, boosting productivity, engagement, and efficiency with seamless functionality, secure solutions, and user-friendly designs tailored to meet your unique business needs.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- This is the card that should be contains only my product of the company -->
    <center>
    <section class="container my-3 row-cols-12 row-cols-lg-8">
        <div class="row text-center">
            <h2 class="mb-2 text-danger">My App Service For the my best clients</h2>
        </div>
        <div class="row row-cols-2 row-cols-md-4 g-0">
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/bwitcher.jpg" alt="App 1">
                    <h5 class="mt-2">Bluwitcher</h5>
                </div>
            </div>
            <div class="col">
                <div class="portfolio-card1">
                    <img src="image/brick.png" alt="App 2">
                    <h5 class="mt-2">Brick.com</h5>
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
                    <img src="image/news bowl.jpg" alt="App 4">
                    <h5 class="mt-2">News Bowl</h5>
                </div>
            </div>
        </div>
    </section>
    </center>
    <!-- This is the contect for the clients -->
      <!-- Here we are creating a form tah should be contact form-->
    <div class="container mt-3" id="contact">
      <div class="row justify-content-center p-3" >
        <div class="col-12 col-md-6 p-3" style="border:2px solid blue;border-radius:5px">
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
  </x-slot>
</x-layout>
