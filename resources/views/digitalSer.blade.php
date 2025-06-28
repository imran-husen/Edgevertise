<x-layout>
  <x-slot name="title">Mobile Service</x-slot>

  <x-slot name="bodycode">

  <!-- Here i am going to write the digital marketing portfolio code -->
   <section>
       <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h2 class="display-5 fw-bold text-danger" >Digital marketing Service</h2>
                <p class="lead fs-6 card-text fw-b" id="keys">Edgevertise Service Private Limited offers advanced cybersecurity solutions, including threat detection, risk assessment, encryption, and penetration testing, ensuring robust protection for businesses against cyber threats, data breaches, and digital vulnerabilities.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    <section class="container my-3 text-center">
        <div class="row text-center">
            <h2 class="mb-4 text-primary fw-bold">Our Digital Marketing Services</h2>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-3">
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">SEO</h5>
                    <p>Optimize your website to rank higher on search engines and drive organic traffic.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">SEM</h5>
                    <p>Use paid advertising to appear on top of search results and increase visibility.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Media Marketing</h5>
                    <p>Engage your audience on social media</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Content Marketing</h5>
                    <p>Create valuable content to attract and retain your target audience.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Email Marketing</h5>
                    <p>Reach customers directly engaging email campaigns.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Affiliate Marketing</h5>
                    <p>Leverage partnerships to promot product.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Influencer Marketing</h5>
                    <p>Collaborate with influencers to expand your brand.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">PPC Advertising</h5>
                    <p>Run targeted ad campaigns to drive instant traffic.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Mobile Marketing</h5>
                    <p>Optimize campaigns for mobile users through SMS.</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
            <div class="col">
                <div class="portfoliod-card">
                    <h5 class="text-danger fw-bold">Video Marketing</h5>
                    <p>Boost engagement with high-quality video content on social Media</p>
                    <a href="#focus_on_apply" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Here i am going to write the code of the contact form -->
    <h5 class="text-center text-primary fw-bold mt-2"> Fill the form for digital marketing</h5>
    <section id="contact" class="py-1" >
        <div class="container" id="focus_on_apply">
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6" style="border:1px solid grey; border-radius:10px">
                    <h2 class="text-center mb-4 fw-bold p-2"><u>Contact Us</u></h2>
                    <form action="smsData" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control"  name="name" id="name" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter the subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                        </div>
                        <div class="d-grid p-2">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </x-slot>
</x-layout>