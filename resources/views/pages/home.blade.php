<!DOCTYPE html>
<html lang="en" dir="{{ env('SITE_RTL') == 'on' ? 'rtl' : '' }}">
<head>
    <title>
        {{  config('app.name', 'Kericho Chess Club') }}
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Scripts&Canvas, Kericho Chess Club." />
    <meta name="keywords" content="Kericho Chess Club, web development, " />
    <meta name="author" content="Kericho Chess Club" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link rel="icon" href="{{ url("logos/scripts&canvas.png") }}" type="image/x-icon" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"
        {{-- integrity="sha384-cn7l7gDp0eyK7H49j9l0bEUoxMfzLkBXI2RA7nU9EIvzEfGh9j4bBeKKnFhbfvlA" --}}
        crossorigin="anonymous"></script>



    {{-- @if (env('SITE_RTL') == 'on')
        <link rel="stylesheet" href="{{ asset('assets/css/style-rtl.css') }}" id="main-style-link">
    @else
        @if (isset($mode_setting['dark_mode']) && $mode_setting['dark_mode'] == 'on')
            <link rel="stylesheet" href="{{ asset('assets/css/style-dark.css') }}">
        @else
            <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link">
        @endif
    @endif --}}
    <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400..700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <header class="w-100">

        @include('partials.nav')
        
    </header>

    <section class="hero-section">
        <div class="overlay">
            
        </div>
        <div class="container text-start text-white hero-content py-5">
            <h1 class="display-4 fw-bold mb-3">
                Transforming <span class="text-highlight">Vision</span><br>Into Reality
            </h1>
            <p class="lead mb-4">Transforming ideas into innovative solutions, automating processes, <br>and scaling businesses for sustainable success.</p>
            {{-- <p class="fw-semibold"><i class="bi bi-geo-alt-fill"></i> 237 Green Street, City</p> --}}
            <div class="cta-buttons mt-4 d-flex gap-3">
                <a href="#" class="btn-custom btn-lg px-5">Get Started</a>
                {{-- <a href="#about" class="btn btn-outline-light btn-lg px-5">Learn More</a> --}}
            </div>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container">
            <h2 class="fw-bold mb-2 display-5">What We Offer</h2>
            <p class="fw-semibold text-muted">Explore our wide range of services tailored for the chess community.</p>
            <div class="row g-4 justify-content-between mt-5">
                {{-- <div class="row" data-aos-delay="200"> --}}
                    <div class="row card-custom p-3 col-md-6 col-sm-12 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-laptop custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Chess Training</a>
                            </h4>
                            <p>
                                Kericho Chess Club offers a multifaceted training program that caters to diverse demographics within the chess community. Designed for parents, juniors, and trainers,..
                                <a class="services-anchor mx-3" href="services/training">Learn more</a>
                            </p>
                        </div>
                    </div>

                    <div class="row card-custom p-3 col-md-6 col-sm-12 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-trophy custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Tournaments and Events</a>
                            </h4>
                            <p>
                                We organize local, regional, and national chess tournaments, providing players with opportunities to compete and showcase their skills. Join our regular events to experience the thrill of competitive chess and win exciting prizes.
                                <a class="services-anchor mx-3" href="services/training">Learn more</a>
                            </p>
                        </div>
                    </div>

                    <div class="row card-custom p-3 col-md-6 col-sm-12  mt-3 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-book custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Chess Library and Resources</a>
                            </h4>
                            <p>
                                Enhance your chess knowledge with access to our comprehensive library of chess books, magazines, and digital resources. Learn openings, strategies, and endgames to become a better player.
                                <a class="services-anchor mx-3" href="services/training">Learn more</a>
                            </p>
                        </div>
                    </div>

                    <div class="row card-custom p-3 col-md-6 col-sm-12 mt-3 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-briefcase custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Corporate Chess Programs</a>
                            </h4>
                            <p>
                                Boost your team's strategic thinking and problem-solving skills through our corporate chess programs. We offer workshops and sessions tailored to organizations looking to use chess as a team-building tool.
                                <a class="services-anchor mx-3" href="services/training">Learn more</a>
                            </p>
                        </div>
                    </div>
                    
                {{-- </div> --}}   
            </div>
        </div>
    </section>
    
    <section id="about" class="about section-bg">
        <div class="container py-5">
            <div class="row">
                <div class="col-xl-5 col-lg-6 d-flex justify-content-center img-box-about" >
                    {{-- <a href="https://files.victoriachess.org/Content/video.mp4" class="glightbox play-btn mb-4"></a> --}}
                    {{-- <img src="{{ asset('../images/chessstudents.jpg') }}" alt="about us image" srcset="" width="100%" height="100%"> --}}
                </div><!--!-->

                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h4 class="text-muted">About Us</h4>
                    <h3 class="">Fostering Talent Through Chess</h3>
                    <p class="">Welcome to Kericho Chess Club (KCC), a hub for fostering critical thinking, strategy, and community growth through chess. Our mission is to promote chess excellence and inspire individuals of all ages to achieve their potential.</p>

                    <div class="row card-custom p-3 col-md-12 col-sm-12 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-laptop custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Chess Training</a>
                            </h4>
                            <p>
                                Our training programs include beginner to advanced levels, focusing on game tactics, strategies, and sportsmanship. We cater to students, parents, and trainers to ensure holistic development.
                            </p>
                        </div>
                    </div>

                    <div class="row card-custom p-3 col-md-12 col-sm-12 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-trophy custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Chess Tournaments</a>
                            </h4>
                            <p>
                                KCC organizes regular tournaments to provide players an opportunity to showcase their skills and compete at various levels. Join us and become part of a competitive yet supportive chess community.
                            </p>
                        </div>
                    </div>

                    <div class="row card-custom p-3 col-md-12 col-sm-12 px-3">
                        <div class="col-2 d-flex justify-content-center">
                            <div class="icon-box">
                                <i class="bi bi-people custom-icons"></i>
                            </div>
                        </div>
                        <div class="col-10">
                            <h4>
                                <a class="" href="services/training">Community Outreach</a>
                            </h4>
                            <p>
                                Through workshops and outreach programs, we engage schools and communities to nurture talent and promote the values of chess as a tool for education and social development.
                            </p>
                        </div>
                    </div>
                    <p class="text-center">
                        <a class="btn btn-primary" href="about">Read More</a>
                    </p>
                </div>
            </div>
         </div>
    </section>

    <section class="sponsors-section py-5 bg-light">
        <div class="container text-center">
            {{-- <h2 class="fw-bold mb-4">Our Partners</h2> --}}
            <div id="sponsorsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="sponsor1-logo.png" alt="Sponsor 1" class="img-fluid mx-3" style="height: 100px;">
                            <img src="sponsor2-logo.png" alt="Sponsor 2" class="img-fluid mx-3" style="height: 100px;">
                            <img src="sponsor3-logo.png" alt="Sponsor 3" class="img-fluid mx-3" style="height: 100px;">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="sponsor4-logo.png" alt="Sponsor 4" class="img-fluid mx-3" style="height: 100px;">
                            <img src="sponsor5-logo.png" alt="Sponsor 5" class="img-fluid mx-3" style="height: 100px;">
                            <img src="sponsor6-logo.png" alt="Sponsor 6" class="img-fluid mx-3" style="height: 100px;">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#sponsorsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sponsorsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    
    <section class="why-choose-us-section py-5" style="background-color: #F0F4F8;">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Why Choose Kericho Chess Club</h2>
            <p class="text-muted mb-5">Discover the unique benefits of joining our vibrant chess community.</p>
            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-people-fill fs-1 custom-icons mb-3"></i>
                        <h4>Inclusive Community</h4>
                        <p>We welcome players of all ages and skill levels to grow and thrive in chess.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-trophy-fill fs-1  custom-icons mb-3"></i>
                        <h4>Award-Winning Coaches</h4>
                        <p>Learn from the best with our experienced coaches who bring home championships.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-lightbulb-fill fs-1  custom-icons mb-3"></i>
                        <h4>Strategic Thinking</h4>
                        <p>Our programs enhance critical thinking and decision-making skills through chess.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 mt-4">
                <!-- Feature 4 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-calendar-check-fill fs-1  custom-icons mb-3"></i>
                        <h4>Regular Tournaments</h4>
                        <p>Participate in local and national tournaments to showcase your skills.</p>
                    </div>
                </div>
                <!-- Feature 5 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-book-fill fs-1  custom-icons mb-3"></i>
                        <h4>Comprehensive Training</h4>
                        <p>Our curriculum is designed to cater to beginners, juniors, and advanced players.</p>
                    </div>
                </div>
                <!-- Feature 6 -->
                <div class="col-md-4">
                    <div class="feature-card p-4 shadow-sm bg-white rounded">
                        <i class="bi bi-heart-fill fs-1  custom-icons mb-3"></i>
                        <h4>Passion for Chess</h4>
                        <p>We’re dedicated to fostering a love for chess in our community and beyond.</p>
                    </div>
                </div>
            </div>
            <p class="text-center my-5">
                <a class="btn btn-primary" href="about">Read More</a>
            </p>
        </div>
    </section>
    
   

    <section class="register-now-section text-center text-white py-5" style="background: url('images/chessboard.jpg') center/cover no-repeat; background-attachment: fixed; position: relative;">
        <div class="overlay" style="background: rgba(128, 0, 0, .1); top: 0; left: 0; width: 100%; height: 100%; position: absolute; z-index: 0"></div>
        <div class="container py-5" style="z-index: 2; position: relative;">
            <h2 class="fw-bold mb-4">Join the Kericho Chess Club Today!</h2>
            <p class="fs-5 mb-4">Improve your skills, compete in tournaments, and be part of a vibrant chess community.</p>
            <a href="/register" class="btn btn-primary btn-lg px-5">Register Now</a>
        </div>
    </section>
    
    
    <section class="testimonials-section py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">What Our Members Say</h2>
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Testimonial 1 -->
                    <div class="carousel-item active">
                        <div class="testimonial-card p-4 bg-light shadow rounded">
                            <img src="images/avatar1.jpg" alt="John Doe" class="rounded-circle mb-3" width="80" height="80">
                            <p class="fs-5 text-muted">"Joining the Kericho Chess Club has been an incredible journey. The community and coaching are exceptional!"</p>
                            <h5 class="fw-bold mt-3">- John Doe</h5>
                        </div>
                    </div>
                    <!-- Testimonial 2 -->
                    <div class="carousel-item">
                        <div class="testimonial-card p-4 bg-light shadow rounded">
                            <img src="images/avatar2.jpg" alt="Jane Smith" class="rounded-circle mb-3" width="80" height="80">
                            <p class="fs-5 text-muted">"I’ve learned so much from the tournaments and met amazing people along the way."</p>
                            <h5 class="fw-bold mt-3">- Jane Smith</h5>
                        </div>
                    </div>
                    <!-- Testimonial 3 -->
                    <div class="carousel-item">
                        <div class="testimonial-card p-4 bg-light shadow rounded">
                            <img src="images/avatar3.jpg" alt="Alex Kim" class="rounded-circle mb-3" width="80" height="80">
                            <p class="fs-5 text-muted">"The training sessions are top-notch, and my game has improved significantly."</p>
                            <h5 class="fw-bold mt-3">- Alex Kim</h5>
                        </div>
                    </div>
                </div>
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    
    

    @include('partials.footer')
    <style>
        
    </style>

</body>
</html>