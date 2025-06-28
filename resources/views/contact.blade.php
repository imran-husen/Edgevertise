<x-layout>
  <x-slot name="title"> Contact Us</x-slot>

  <x-slot name="bodycode">

    <!-- Hero Section -->
    <section class="hero text-center d-flex flex-column justify-content-center align-items-center py-5">
        <h1 class="display-4">Get in Touch with Us</h1>
        <p class="lead">We'd love to hear from you. Reach out to us for any inquiries or assistance.</p>
    </section>

    <!-- Contact Information Cards -->
    <!-- Contact Information Section -->
    <div class="container my-1 mt-2 text-center">
    <section>
        <h3 class="fw-bold">Get in Touch</h3>
        <div class="row">

            <!-- Mobile Number Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-phone-alt fa-2x"></i>
                        <h5 class="card-title mt-3 fw-bold text-danger">Mobile Number</h5>
                        <p class="card-text">For any inquiries, call us at:</p>
                        <a href="tel:tel:+91 8318822513" class="btn btn-success">Mobile Call</a>
                    </div>
                </div>
            </div>

            <!-- WhatsApp Number Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fab fa-whatsapp fa-2x"></i>
                        <h5 class="card-title mt-3 fw-bold text-danger">WhatsApp Number</h5>
                        <p class="card-text">Chat with us on WhatsApp:</p>
                        <a href="https://chat.whatsapp.com/KYJVLmlx598JvK3jzLaCtL" class="btn btn-success" target="_blank">WhatsApp Chat</a>
                    </div>
                </div>
            </div>

            <!-- Email Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fas fa-envelope fa-2x"></i>
                        <h5 class="card-title mt-3 fw-bold text-danger">Email</h5>
                        <p class="card-text">For any email inquiries, reach us at:</p>
                        <a href="mailto:edgevertisepvt@gmail.com" class="btn btn-success">Mail Me</a>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
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

    <!-- Map Section -->
    <section class="py-2">
        <div class="container">
            <h2 class="text-center mb-1 mt-3">Our Location</h2>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3416.5618592666247!2d80.92556537527416!3d26.98442247660455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x3999515d7017afff%3A0xdb7cb62be32a9b8b!2s1st%20Floor%2C%20Bluewitcher%20Training%20center%2C%20dildaar%20complex%2C%20Asti%20Rd%2C%20Bakshi%20Ka%20Talab%2C%20lucknow%2C%20Bargadi%20Magath%2C%20Uttar%20Pradesh%20227202!3m2!1d26.984422499999997!2d80.9281403!5e1!3m2!1sen!2sin!4v1735131559040!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
  </x-slot>
                </x-layout>