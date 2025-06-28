<x-layout>
  <x-slot name="title">E-commerce Technology</x-slot>

      <x-slot name="bodycode">

      <!-- Here i am writing the code for the provide the better e-commerce website -->
      <div class="container mt-1">
        <h2 class="text-center mb-2 text-danger fw-bold">Edgevertise Service Private Limited</h2>
        <p class="text-center fw-bold">E-Commerce Web and App Development Experts</p>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-5 g-4 text-center">
            <div class="col" >
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Custom E-Commerce Platforms</h5>
                    <p class="card-text">Tailor-made online stores with secure checkout.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Mobile Commerce Solutions</h5>
                    <p class="card-text">Build powerful mobile apps for online stores.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Payment Gateway Integration</h5>
                    <p class="card-text">Seamless and secure payment solutions integration.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Multi-Vendor Marketplace</h5>
                    <p class="card-text">Develop scalable multi-vendor e-commerce sites.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">E-Commerce SEO Services</h5>
                    <p class="card-text">Optimize your store for better online visibility.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Inventory Management Systems</h5>
                    <p class="card-text">Efficient stock tracking with real-time updates.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Subscription-Based E-Commerce</h5>
                    <p class="card-text">Launch subscription-based digital stores easily.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">AI-Powered Product Recommendations</h5>
                    <p class="card-text">Enhance user experience with AI-driven tools.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Headless E-Commerce Architecture</h5>
                    <p class="card-text">Flexible frontend with powerful backend support.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <h5 class="card-title fw-bold ">Analytics and Performance Tracking</h5>
                    <p class="card-text">Track sales and performance with analytics tools.</p>
                    <a href="#contact" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- This is the card that should be contains only my product of the company -->
    <center>
    <section class="container my-3 row-cols-12 row-cols-lg-8" >
        <div class="row text-center">
            <h2 class="mb-2 text-danger fw-bold">My web Service For My Best Clients</h2>
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

    <!-- this is teh code of the for applying my cliets -->
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