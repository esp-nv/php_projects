<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Personal Portfolio</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .profile-img {
                width: 150px;
                height: 150px;
                border-radius: 50%;
            }
            .project-card {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">My Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- About Section -->
        <section id="about" class="text-center py-5">
            <div class="container">
                <h2>About Me</h2>
                <img src="https://placehold.co/200x200" alt="Profile Image" class="profile-img mb-3">
                <p>Hello! I am a passionate web developer with experience in building responsive and user-friendly websites. I love to create and design interfaces that provide great user experiences.</p>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">My Skills</h2>
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h5>HTML</h5>
                        <p>Experienced in building webpages using HTML5.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5>CSS</h5>
                        <p>Skilled in creating responsive styles with CSS3.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <h5>JavaScript</h5>
                        <p>Proficient in using JavaScript for dynamic web functionality.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Projects</h2>
                <div class="row">
                    <!-- Project 1 -->
                    <div class="col-md-4 project-card">
                        <div class="card">
                            <img src="https://placehold.co/350x350" class="card-img-top" alt="Project 1">
                            <div class="card-body">
                                <h5 class="card-title">Project 1</h5>
                                <p class="card-text">A brief description of Project 1 that illustrates what it does and the technology used.</p>
                                <a href="#" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 2 -->
                    <div class="col-md-4 project-card">
                        <div class="card">
                            <img src="https://placehold.co/350x350" class="card-img-top" alt="Project 2">
                            <div class="card-body">
                                <h5 class="card-title">Project 2</h5>
                                <p class="card-text">A brief description of Project 2 that illustrates what it does and the technology used.</p>
                                <a href="#" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Project 3 -->
                    <div class="col-md-4 project-card">
                        <div class="card">
                            <img src="https://placehold.co/350x350" class="card-img-top" alt="Project 3">
                            <div class="card-body">
                                <h5 class="card-title">Project 3</h5>
                                <p class="card-text">A brief description of Project 3 that illustrates what it does and the technology used.</p>
                                <a href="#" class="btn btn-primary">View Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-5 bg-light">
            <div class="container text-center">
                <h2>Contact Me</h2>
                <p>If you would like to get in touch, feel free to reach out via email.</p>
                <a href="mailto:your-email@example.com" class="btn btn-primary btn-lg">Email Me</a>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3">
            <p>&copy; 2024 Your Name. All Rights Reserved.</p>
        </footer>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    </body>
</html>