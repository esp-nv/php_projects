<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Online Store</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .product-card {
                margin-bottom: 30px;
            }
            .hero {
                background: url('https://placehold.co/1600x400') no-repeat center center;
                background-size: cover;
                padding: 100px 0;
                color: white;
            }
            .hero h1 {
                font-size: 48px;
            }
        </style>
    </head>
    <body>

        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">OnlineStore</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <section class="hero text-center">
            <div class="container">
                <h1>Welcome to Our Online Store</h1>
                <p>Shop the best products at unbeatable prices!</p>
                <a href="#products" class="btn btn-primary btn-lg">Shop Now</a>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="container my-5">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x300" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$19.99</p>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x300" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">$29.99</p>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x300" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">$39.99</p>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card product-card">
                        <img src="https://placehold.co/300x300" class="card-img-top" alt="Product 4">
                        <div class="card-body">
                            <h5 class="card-title">Product 4</h5>
                            <p class="card-text">$49.99</p>
                            <a href="#" class="btn btn-success">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                <p>&copy; 2024 OnlineStore. All Rights Reserved.</p>
                <p>Follow us on:
                    <a href="#" class="text-white">Facebook</a> |
                    <a href="#" class="text-white">Twitter</a> |
                    <a href="#" class="text-white">Instagram</a>
                </p>
            </div>
        </footer>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    </body>
</html>