<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background-color: #f8f9fa;
            padding: 60px 0;
        }
        .post-preview {
            margin-bottom: 30px;
            border-bottom: 1px solid #eaeaea;
            padding-bottom: 15px;
        }
        footer {
            background-color: #f8f9fa;
            padding: 20px 0;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">My Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero text-center">
    <div class="container">
        <h1 class="display-4">Welcome to My Blog</h1>
        <p class="lead">Sharing my thoughts and experiences</p>
    </div>
</div>

<!-- Blog Posts Section -->
<div class="container my-5">
    <h2 class="mb-4">Latest Posts</h2>
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="post-preview">
                <h3>Post Title 1</h3>
                <p class="text-muted">Posted on January 1, 2023</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="post-preview">
                <h3>Post Title 2</h3>
                <p class="text-muted">Posted on February 2, 2023</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="post-preview">
                <h3>Post Title 3</h3>
                <p class="text-muted">Posted on March 3, 2023</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center">
    <div class="container">
        <p>&copy; 2023 My Blog. All rights reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>