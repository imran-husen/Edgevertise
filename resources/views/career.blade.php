<x-layout>
  <x-slot name="title">Career</x-slot>
  <x-slot name="bodycode">
   <!-- Hero Section -->
   <section class="hero text-center d-flex flex-column justify-content-center align-items-center py-5">
            <h1 class="display-4 ">Shape Your Future with Edgevertise</h1>
            <p class="lead">Join a team that is transforming ideas into reality.</p>
            <a href="#careers" class="btn btn-primary btn-lg">Explore Careers</a>
        </section>
    
        <!-- About Edgevertise Section -->
        <section id="about" class="py-2 bg-light">
            <div class="container">
                <div class="text-center">
                    <h2 class="text-danger fw-bold">About Edgevertise Services Pvt. Ltd.</h2>
                    <p class="mt-3">
                        Edgevertise Services Private Limited is a leading IT company that specializes in delivering cutting-edge software solutions to clients across the globe. Our expertise spans across web development, mobile applications, cloud computing, and AI-based systems. We are passionate about innovation and dedicated to helping businesses achieve their digital transformation goals.
                    </p>
                </div>
            </div>
        </section>
    
        <!-- Careers Section -->
        <section id="careers " class="py-1">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="text-success fw-bold">Join Our Team</h2>
                    <p class="mt-3">Explore exciting career opportunities and grow with us at Edgevertise Services.</p>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary fw-bold ">Software Developer</h5>
                                <p class="card-text">Design and implement innovative software solutions. Proficiency in modern programming languages is a must.</p>
                                <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary fw-bold">UI/UX Designer</h5>
                                <p class="card-text">Create intuitive and visually appealing interfaces. Experience with design tools like Figma or Adobe XD is preferred.</p>
                                <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary fw-bold">Project Manager</h5>
                                <p class="card-text">Lead and manage software development projects. Strong communication and leadership skills are essential.</p>
                                <a href="#apply" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary fw-bold">Data Scientist</h5>
                                <p class="card-text">Analyze and interpret complex data to drive insights and innovation. Knowledge of Python and machine learning is required.</p>
                                <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body text-center">
                                <h5 class="card-title text-primary fw-bold">Cloud Engineer</h5>
                                <p class="card-text">Develop and manage cloud-based solutions. Experience with AWS, Azure, or Google Cloud is a plus.</p>
                                <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          <!-- Here i am creating a form to apply the new employee-->
          <div class="container mt-1" style="font-family: Lora, serif;" id="focus_on_apply">
            <div class="row justify-content-center p-3">
              <!-- Form container with responsive columns -->
              <div class="col-lg-6 col-12 bg-light" style="border:1px solid grey; border-radius:5px">
                <h3 class="text-center mb-4 fw-bold mt-2 text-warning" style="font-family: Arima, serif; text-shadow:1px 1px black" ><u>Apply For Job</u></h3>
                <form action="jobData" method="post" enctype="multipart/form-data">
                @csrf
                  <!-- Name Input -->
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                  </div>
                  <!-- Exprience input-->
                  <div class="mb-3">
                    <label for="name" class="form-label">Your Exprience</label>
                    <input type="text" class="form-control"  name="exprience" id="name" placeholder="Enter your Exprience" required>
                  </div>
          
                  <!-- WhatsApp Number Input -->
                  <div class="mb-3">
                    <label for="whatsapp" class="form-label">E-mail</label>
                    <input type="tel" class="form-control" name="email"  id="whatsapp" placeholder="Enter your mail" required>
                  </div>
          
                  <!-- Resume File Upload -->
                  <div class="mb-3">
                    <label for="resume" class="form-label">Upload Resume</label>
                    <input type="file" class="form-control"  name="resume" id="resume" accept=".pdf,.doc,.docx" required>
                  </div>
          
                  <!-- Submit Button -->
                  <div class="text-center">
                    <button type="submit" class="btn btn-success mb-2">Apply Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
    
        <!-- Testimonials Section -->
        <section id="testimonials" class="py-3 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="text-danger fw-bold">What Our Employees Say</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm ">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Working at Edgevertise has been an incredible journey. The team is supportive and the projects are challenging.</p>
                                    <footer class="blockquote-footer">Arman Husen, Software Developer</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body ">
                                <blockquote class="blockquote mb-0">
                                    <p>The work environment here is amazing, and the leadership is truly inspiring.</p>
                                    <footer class="blockquote-footer">Pankaj Kushwaha, UI/UX Designer</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm ">
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <p>Edgevertise offers endless opportunities to grow and innovate in the IT field.</p>
                                    <footer class="blockquote-footer">Balmiki Singh, Project Manager</footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  </x-slot>
</x-layout>
       