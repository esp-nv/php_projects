<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marketing Services</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .hero {
                background: url('https://placehold.co/1200x400') no-repeat center center/cover;
                color: white;
            }
            .service-card {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Marketing Co.</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonials">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <header class="hero text-center py-5">
            <div class="container">
                <h1 class="display-4">Boost Your Business with Our Marketing Strategies</h1>
                <p class="lead">We provide top-notch marketing services to elevate your brand's presence.</p>
                <a href="#contact" class="btn btn-light btn-lg">Get Started</a>
            </div>
        </header>

        <!-- Services Section -->
        <section id="services" class="container mt-5">
            <h2 class="text-center mb-4">Our Services</h2>
            <div class="row">
                <!-- Service 1 -->
                <div class="col-md-4 service-card">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Digital Marketing</h5>
                            <p class="card-text">We create tailored digital marketing strategies to enhance your online visibility.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-md-4 service-card">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">SEO Services</h5>
                            <p class="card-text">Optimize your website to rank higher in search engine results and drive organic traffic.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-md-4 service-card">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Content Marketing</h5>
                            <p class="card-text">Engage your audience with high-quality content that resonates with your brand values.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="mt-5">
            <div class="container">
                <h2 class="text-center mb-4">What Our Clients Say</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <p class="card-text">"The marketing services were outstanding! Our sales increased by 30% in just a few months!"</p>
                                <h5>- Client A</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <p class="card-text">"I was impressed with how quickly they understood our needs and delivered effective solutions."</p>
                                <h5>- Client B</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-light mt-5 py-5">
            <div class="container text-center">
                <h2>Contact Us</h2>
                <p>Ready to get started? Reach out to us today!</p>
                <a href="mailto:info@marketingco.com" class="btn btn-primary btn-lg">Email Us</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3">
            <p>&copy; 2024 Marketing Co. All Rights Reserved.</p>
        </footer>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    </body>
</html>