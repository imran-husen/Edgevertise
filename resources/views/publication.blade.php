<x-layout>
  <x-slot name="title">Writing and Publication</x-slot>

      <x-slot name="bodycode">

    <header class="bg-primary text-white text-center py-4">
        <h1 style="text-shadow:2px 2px red">Writing and publication</h1>
        <p>Providing modern writing and publication service</p>
    </header>
    

    <section class="container my-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="text-center fade-slide" id="animatedSection">
                    <h2 class="display-5 fw-bold text-danger">Writing and Publication</h2>
                    <p class="lead fs-6 card-text fw-b" id="keys">
                    Edgevertise Service Private Limited offers expert writing and publication services, delivering high-quality content for businesses, academics, and authors. From compelling articles and research papers to engaging books and professional reports, we ensure originality, clarity, and impact. Our services include authorship, thesis writing, proofreading, plagiarism reduction, and synopsis writing, ensuring excellence and credibility
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container my-2">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <!-- Card 1 -->
            <div class="col">
                <div class="card h-100 p-2">
                    <img src="image/publication.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-danger">Article Writing Services</h5>
                        <p class="card-text">Professional article writing services delivering engaging, SEO-friendly content to enhance your brand’s online presence and drive customer engagement.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col">
                <div class="card h-100 p-2">
                <img src="image/Authorship Services.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-danger">Authorship Service</h5>
                        <p class="card-text">Expert authorship services providing compelling, well-researched content for books, articles, and blogs to establish your authority and credibility.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 3 -->
            <div class="col">
                <div class="card h-100 p-1">
                <img src="image/Thesis.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-danger">Thesis Writing</h5>
                        <p class="card-text">Professional thesis writing services offering in-depth research, structured analysis, and academic excellence to help you achieve your academic goals in the thesis.<p>
                    </div>
                </div>
            </div>
            
            <!-- Card 4 -->
            <div class="col">
                <div class="card h-100 p-2">
                <img src="image/Proof.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold ">Proof Reading</h5>
                        <p class="card-text">Expert proofreading services ensuring error-free, polished, and professional content by correcting grammar, spelling, punctuation, and enhancing clarity.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 5 -->
            <div class="col">
            <div class="card h-100 p-2">
                <img src="image/PPT.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold ">PPT (Normal/3D)</h5>
                        <p class="card-text">"Professional PPT design services creating visually engaging, informative, and impactful presentations to effectively communicate ideas and captivate your audience.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 6 -->
            <div class="col">
              <div class="card h-100 p-2">
                <img src="image/plagiarism.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold ">Plagiarism Reduction</h5>
                        <p class="card-text">Expert plagiarism reduction services ensuring originality by rephrasing, rewriting, and enhancing content while maintaining clarity, coherence, and academic integrity.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 7 -->
            <div class="col">
               <div class="card h-100 p-2">
                <img src="image/report.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title text-danger fw-bold ">Synopsis Writing</h5>
                        <p class="card-text">Professional synopsis writing services delivering concise, compelling summaries that highlight key ideas, ensuring clarity, engagement, and a strong impact.</p>
                    </div>
                </div>
            </div>
            
            <!-- Card 8 -->
            <div class="col">
                <div class="card h-100 p-2">
                    <img src="image\Data Analysis.png" class="card-img-top" alt="CMS Image 1" style="height:100px; width:100px;margin:auto">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-danger">Data Analysis</h5>
                        <p class="card-text">Expert data analysis services providing insights through statistical techniques, visualization, and interpretation to drive informed decision-making and business growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   

    <!-- Here available the contact form -->

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <div class="custom-container">
                    <h3 class="text-center text-danger fw-bold">Contact Form</h3>
                    <form method="post" action="publicationData" >
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="mobile" class="form-label fw-bold">Mobile Number</label>
                            <input type="tel" class="form-control"  name="number"id="mobile" placeholder="Enter your mobile number" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="options" class="form-label fw-bold">Select an Option</label>
                            <select class="form-select" id="options"  name="option" required>
                                <option selected disabled>Choose...</option>
                                <option value="writing">Writing Service</option>
                                <option value="publication">Publication Service</option>
                                <option value="editing">Editing & Proofreading</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter details here..." required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-danger fw-bold px-4">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </x-slot>
</x-layout>