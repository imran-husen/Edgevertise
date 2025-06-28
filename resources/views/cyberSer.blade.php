<x-layout>
  <x-slot name="title">Mobile Service</x-slot>

  <x-slot name="bodycode">

  <!-- Here i am going to write the cyber security portfolio code -->
  <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="text-center">
                <h2 class="display-5 fw-bold text-danger" >Cyber Security Service</h2>
                <p class="lead fs-6 card-text fw-b" id="keys">Edgevertise Service Private Limited offers advanced cybersecurity solutions, including threat detection, risk assessment, encryption, and penetration testing, ensuring robust protection for businesses against cyber threats, data breaches, and digital vulnerabilities.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Here i am writing the code of teh service box -->
      
    <section class="container my-3 text-center">
        <div class="row text-center">
            <h2 class="mb-4 text-primary fw-bold">Our Cybersecurity Services</h2>
        </div>
        <div class="row row-cols-2 row-cols-lg-5 g-3">
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Network Security</h5>
                    <p>Protects networks from unauthorized access and cyber threats.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Application Security</h5>
                    <p>Secures applications from cyber threats like malware and data breaches.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Cloud Security</h5>
                    <p>Ensures safe storage and access to cloud-based systems and data.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Endpoint Security</h5>
                    <p>Protects devices such as computers and smartphones from cyber threats.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Data Security</h5>
                    <p>Safeguards sensitive information through encryption and access control.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">IAM Security</h5>
                    <p>Manages and controls user access to prevent unauthorized access.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Penetration Testing</h5>
                    <p>Identifies security vulnerabilities through ethical hacking techniques.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">SIEM Security</h5>
                    <p>Provides real-time threat monitoring and security event analysis.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Incident Response</h5>
                    <p>Responds to and mitigates cybersecurity incidents effectively.</p>
                </div>
            </div>
            <div class="col">
                <div class="portfolioc-card">
                    <h5 class="text-danger">Compliance Security</h5>
                    <p>Ensures adherence to industry security standards and regulations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Here i am writing a code for the cyber security coneection in the website -->
     <h4 class="text-center text-success fw-bold"> Contact for the cyber security</h4>
      <!-- Contact Form Section -->
    <section id="contact" class="py-1">
        <div class="container">
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
