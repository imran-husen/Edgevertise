<x-layout>
  <x-slot name="title">CMS-Technology</x-slot>

      <x-slot name="bodycode">

      <!-- This section contains the body of the another code section -->
      <header class="bg-primary text-white text-center py-4">
        <h1>CMS Technology Services</h1>
        <p>Providing modern CMS solutions for businesses</p>
    </header>
    
    <div class="container my-3">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold">WordPress Development</h5>
                        <p class="card-text">Custom themes and plugins for WordPress.</p>
                        <a href="#contact" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold">Shopify Solutions</h5>
                        <p class="card-text">Custom Shopify stores and integrations.</p>
                        <a href="#contact" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold">Magento Development</h5>
                        <p class="card-text">Scalable e-commerce solutions for Magento.</p>
                        <a href="#contact" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold">Headless CMS</h5>
                        <p class="card-text">API-driven CMS solutions for flexibility.</p>
                        <a href="#contact" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold">Custom CMS Development</h5>
                        <p class="card-text">Tailored CMS platforms for unique needs.</p>
                        <a href="#contact" class="btn btn-primary">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

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