<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- This is the css properties of the html-->
    
       <script src="{{ asset('javascript/main.js') }}"></script>

       <!-- This is the code of the favicons of the website -->
       <link rel="icon" type="image/x-icon" href="image/main logos.jpeg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
    
    <link rel="stylesheet" href="css/adminstyle.css">
    <link rel="icon" type="image/x-icon" href="image/main logo.png" style="border-radius:100%">
    
    <!-- Linking of the new google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

</head>
<body>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
  <div class="logo">Admin Panel</div>
  <div class="sidebar-links">
    <a href="#" data-section="dashboard" class="active"><i class="fas fa-home me-2"></i> Dashboard</a>
    <a href="#" data-section="Clients"><i class="fas fa-handshake me-2"></i> Clients</a>
    <a href="#" data-section="notifications"><i class="fas fa-id-card me-2"></i>Contact Data</a>
    <a href="#" data-section="intern"><i class="fas fa-user-graduate me-2"></i>Internship</a>
    <a href="#" data-section="training"><i class="fas fa-graduation-cap me-2"></i> Training</a>
    <a href="#" data-section="jobs"><i class="fas fa-file-signature me-2"></i> Applying Jobs</a>
    <a href="#" data-section="publication"><i class="fas fa-file-alt me-2"></i> Publications</a>
    <a href="#" data-section="education"><i class="fas fa-graduation-cap me-2"></i> Education Achievements</a>
    <a href="#" data-section="writer"><i class="fas fa-pen-nib me-2"></i> Writer Achievements</a>
    <a href="#" data-section="social"><i class="fas fa-users me-2"></i> Social Achievements</a>
    <a href="#" data-section="political"><i class="fas fa-landmark me-2"></i> Political Achievements</a>
    <a href="#" data-section="newsletter"><i class="fas fa-envelope me-2"></i> Newsletter</a>
    <a href="#" data-section="events"><i class="fas fa-calendar-alt me-2"></i> Events</a>
    <a href="#" data-section="moments"><i class="fas fa-camera-retro me-2"></i>Movement</a>
    <a href="#" data-section="regular"><i class="fas fa-calendar-alt me-2"></i>Regular Events</a><br><br>
  </div>
</div>


<!-- Sidebar Toggle Button -->
<button class="btn btn-dark toggle-sidebar-btn" onclick="toggleSidebar()">
  <i class="fas fa-bars"></i>
</button>

<!-- Main Content -->
<div class="main-content" id="mainContent">
  <div id="contentArea"></div>
</div>

<!-- Hidden Templates -->
<template id="dashboard">
  <h4 class=" text-center fw-bold"> Your Welcome! Admin Panel</h4>
  <div class="row g-3 mb-4" data-section="upload-news">
    <div class="col-md-4">
      <div class="card card-box p-3" style="border:2px solid black">
        <h5 class="fw-bold text-danger text-center">Clients Messages</h5>
        <p class="text-dark fw-bold text-center">Here updated of total Client Message</p>
        <span class="badge bg-primary">{{ $total_clients }} Message of Clients</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3" style="border:2px solid black">
        <h5 class="fw-bold text-danger text-center">Contact To the Company by Clients</h5>
        <p class="text-dark fw-bold text-center">Try Client to Work from Company</p>
        <span class="badge bg-success"> {{ $total_contact }} Contact Data</span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-box p-3" style="border:2px solid black" >
        <h5 class="fw-bold text-danger text-center">Internship Data </h5>
        <p class="text-dark fw-bold text-center">Total Data of fresher students applying for intern</p>
        <span class="badge bg-warning text-dark">{{ $total_intern }} Intern Students</span>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-4">
  <div class="col-md-4">
    <div class="card card-box p-3" style="border:2px solid black">
      <h5 class="fw-bold text-danger text-center">Training Data of Students</h5>
      <p class="text-dark fw-bold text-center">This is total data applying for training</p>
      <span class="badge bg-info text-dark"> {{ $total_training }} Training Students</span>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-box p-3" style="border:2px solid black">
      <h5 class="fw-bold text-danger text-center">Apply for job in Company</h5>
      <p class="text-dark fw-bold text-center">Total Applying job for Working</p>
      <span class="badge bg-secondary"> {{ $total_jobs }} Applying Jobs</span>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-box p-3" style="border:2px solid black">
      <h5 class="fw-bold text-danger text-center">Writing and Public</h5>
      <p class="text-dark fw-bold text-center">Applying clients for Writing and Publication</p>
      <span class="badge bg-danger"> {{ $total_public }} Writing And Publication</span>
    </div>
  </div>
</div>

<!-- This is the dynamic part of the updation -->
<h5 class="text-danger text-center fw-bold mb-4">For the User Dynamics page</5>
<div class="row g-3 mb-4 mt-1">
    <div class="col-md-4">
      <div class="info-card news-card" style="border:2px solid black">
        <h5 class="card-title">Education Achievements</h5>
        <p class="card-subtitle">Total Education achievements uploaded</p>
       <span class="card-badge bg-warning text-dark"></span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card youtube-card" style="border:2px solid black">
        <h5 class="card-title"> Writing & Publication Achievements</h5>
        <p class="card-subtitle">Total wri-Pub achievements uploaded</p>
        <span class="card-badge bg-warning text-dark"></span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card blog-card" style="border:2px solid black">
        <h5 class="card-title">Uploded Events</h5>
        <p class="card-subtitle">This is total uploded Events</p>
        <span class="card-badge bg-warning text-dark"></span>
      </div>
    </div>
  </div>
  <div class="row g-3 mb-4">
    <div class="col-md-4">
      <div class="info-card members-card" style="border:2px solid black">
        <h5 class="card-title">Total Social Achievements</h5>
        <p class="card-subtitle">Uploded socila achievements by Admin</p>
       <span class="card-badge bg-warning text-dark"></span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card feedback-card" style="border:2px solid black">
        <h5 class="card-title">Total Uploaded Plotical Achievements</h5>
        <p class="card-subtitle">Uploded Polotical Achievements by Admin</p>
        <span class="card-badge bg-warning text-dark"></span>
      </div>
    </div>
    <div class="col-md-4">
      <div class="info-card notification-card" style="border:2px solid black">
        <h5 class="card-title">Uploded Movements & Campiegn </h5>
        <p class="card-subtitle">Total Uploded movements by the admin</p>
      <span class="card-badge bg-warning text-dark"></span>
      </div>
    </div>
</div>
</template>

<!-- This is the page of shown the data of the that is sended by the clients -->
<template id="Clients">
  <h4 class="text-center text-danger fw-bold" >Clients message to connect with the </h4>
  <p class="text-center fw-bold">This is total Data which has been recived online that applying by clients</p>

  
  <div class="container my-2">
  <div class="table-container" id="tableSection">
    <table class="table table-striped table-hover table-bordered" style="font-size:10px">
      <thead class="table-dark">
        <tr>
          <th>Sr.</th>
          <th>Date</th>
          <th>Name</th>
          <th>Number</th>
          <th>Email</th>
          <th>Company</th>
          <th>Message</th>
        </tr>
      </thead>
     <tbody>
       @foreach($clientData as $index => $client)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $client->created_at->format('d M Y') }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->mobile }}</td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->company }}</td>
            <td>{{ $client->description }}</td>
        </tr>
       @endforeach
     </tbody>

    </table>
  </div>
</template>


 <!-- This is notification of the clients -->
<template id="notifications">
    <h4 class="text-center text-danger fw-bold" >Clients message to connect with the </h4>
    <p class="text-center fw-bold">This is total Data which has been recived online that applying by clients</p>


  <div class="container mt-2">
    <h4 class="text-center mb-2 fw-bold text-primary">Submitted Contacts</h4>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date Submitted</th>
                </tr>
            </thead>
            <tbody>
                @forelse($contact as $index => $contact)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td class="text-center">{{ $contact->created_at->format('d M Y') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">No contacts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</template>

<!-- Here i am going to the write code for the Internship apply data -->
 <template id="intern">
 <h4 style="border: 1px solid black; border-radius: 10px; padding: 5px 15px; color: red; text-shadow: 1px 1px black; font-weight: bold; text-align: center;" class="mx-auto d-block">
  Internship of College Students
</h4>
  <p class="text-center"> This is total recieved data of the intern studemts with proper resume and mail</p>

  <!-- Here i am going to write the code for the body code of the intern students -->
  <div class="container my-2">
    <div class="row justify-content-center">
        <div style="font-family: Arima, serif; font-size:13px">
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Sr.</th>
                            <th>Name</th>
                            <th>Whatsapp Num.</th>
                            <th>Resume</th>
                            <th>Submitted Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($internship as $index => $intern)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $intern->name }}</td>
                                <td>{{ $intern->email }}</td>
                                <td>
                                    <a href="{{ $intern->resume }}" class="btn btn-sm btn-primary" target="_blank">
                                        Show
                                    </a>
                                </td>
                                <td class="text-center">
                                    {{ \Carbon\Carbon::parse($intern->created_at)->format('d M Y') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">No internship data available.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</template>

<!-- I am going to write the code for the training data of the students -->
<template id="training">
  <h3 class="text-center text-primary fw-bold"> Training Data of Students</h3>
  <p class="text-center"> This is total data of the those students that are applying for the Training in the company</p>

  <!-- This is the code of the dynamics data tables -->
   <div class="container my-3" style="font-family: Arima, serif; font-size:15px;">
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped align-middle">
            <thead class="table-dark text-center">
                <tr>
                    <th>Sr.</th>
                    <th>Name</th>
                    <th>College</th>
                    <th>Mo. Number</th>
                    <th>Courses</th>
                    <th>Submitted Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($training as $index => $train)
                    <tr>
                        <td class="text-center">{{ $index + 1 }}</td>
                        <td>{{ $train->name }}</td>
                        <td>{{ $train->college }}</td>
                        <td>{{ $train->number }}</td>
                        <td>{{ $train->course }}</td>
                        <td class="text-center">
                            {{ \Carbon\Carbon::parse($train->created_at)->format('d M Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">No training data available.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
</template>

<!-- I am going to  write the code for the job data -->
 <template id="jobs">
  <h4 style="border: 1px solid black; border-radius: 10px; padding: 5px 15px; color: red; text-shadow: 1px 1px black; font-weight: bold; text-align: center;" class="mx-auto d-block">
  Applying for Jobs
</h4>
  <p class="text-center">This is the data of those candidate that have applying for jobs in teh company</p>

  <!-- I m writing code for the table shown data -->
   <div class="container mt-4" style="font-family: Arima, serif; font-size:15px;">
    <div class="row d-flex flex-column flex-md-row">
        <!-- Job Applications Table -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Experience</th>
                        <th>Email</th>
                        <th>Resume</th>
                        <th>Submission Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($Jobs as $index => $jobs)
                        <tr>
                            <td class="text-center">{{ $index + 1 }}</td>
                            <td>{{ $jobs->name }}</td>
                            <td>{{ $jobs->exprience }} Years</td>
                            <td>{{ $jobs->email }}</td>
                            <td class="text-center">
                                <a href="{{ $jobs->resume }}" class="btn btn-sm btn-primary" target="_blank">
                                    Show Resume
                                </a>
                            </td>
                            <td class="text-center">
                                {{ \Carbon\Carbon::parse($jobs->created_at)->format('d M Y') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">No job applications found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</template>

 <template id="publication">
  <h4 style="border: 1px solid black; border-radius: 10px; padding: 5px 15px; color: red; text-shadow: 1px 1px black; font-weight: bold; text-align: center;" class="mx-auto d-block">
  Applying for the writing and Publication
</h4>
  <p class="text-center">This is the data of those clients that wants to some writing and publication facilities</p>

  <div style="font-family: Arima, serif; font-size:10px">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Sr.</th>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Type</th>
                <th>Description</th>
                <th>Submission Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($public as $pub)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pub->name }}</td>
                <td>{{ $pub->number }}</td>
                <td>{{ $pub->option }}</td>
                <td>{{ $pub->description }}</td>
                <td>{{ \Carbon\Carbon::parse($pub->created_at)->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</template>


<!-- Script -->
<script>
  function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('show');
  }

  document.querySelectorAll('.sidebar a').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();

      // Toggle active class
      document.querySelectorAll('.sidebar a').forEach(l => l.classList.remove('active'));
      this.classList.add('active');

      // Load content
      const section = this.getAttribute('data-section');
      const template = document.getElementById(section);
      if (template) {
        document.getElementById('contentArea').innerHTML = template.innerHTML;
      } else {
        document.getElementById('contentArea').innerHTML = '<p class="text-danger">Section not found.</p>';
      }
    });
  });

  // Load dashboard by default
  window.addEventListener('DOMContentLoaded', () => {
    const defaultLink = document.querySelector('[data-section="dashboard"]');
    if (defaultLink) defaultLink.click();
  });
</script>

</body>
</html>
