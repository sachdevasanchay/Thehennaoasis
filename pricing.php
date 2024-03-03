
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing - The Henna Oasis</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            color: #333;
            background-color: #f8f9fa;
        }

        .navbar-dark .navbar-nav .nav-link,
        .navbar-dark .navbar-brand {
            color: #ffffff;
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #ffffff;
        }

        .container {
            color: #333;
        }

        h2,
        h4,
        p {
            color: #333;
        }

        .bg-dark {
            background-color: #343a40 !important;
            color: #ffffff;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important;
        }

        /* Pricing Cards Styles */
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .card-subtitle {
            color: #6c757d;
        }

        .card-text {
            color: #495057;
        }

        .card-img-top {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
            max-width: 100%;
            height: auto;
        }
        footer {
            
            color: cadetblue;
            padding: -2px 0;
            text-align: center;
            margin-top: 58px;
        }

        .footer p {
            margin-bottom: 0;
        }

        .btn-order {
            color: #fff;
            background-color: #28a745;
            border-color: #28a745;
            transition: background-color 0.3s ease;
        }

        .btn-order:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <h3 class="m-0">The Henna Oasis</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="contact.php">Contact</a>
                <a class="nav-item nav-link" href="about.php">About</a>
                <a class="nav-item nav-link" href="checkout.php">Checkout</a>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="text-center mb-4">Select your designs</h2>

        <div class="row">
            <!-- Pricing Cards -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
<a href="checkout.php?product=Design1&price=25" class="btn btn-order btn-block">Order Now</a>

                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 2">
                    <div class="card-body">
                        <h5 class="card-title">Design 2</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$30</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design2&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design3&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 4 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design4&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 5 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design5&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 6 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design6&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 7 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design7&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 8 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design8&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 9 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design9&price=250" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design10&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 1</h5>
                        <h6 class="card-subtitle mb-2 text-muted">$25</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design11&price=25" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>

            <!-- Repeat similar card structure for other designs -->
            <!-- Design 10 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <img src="wed.jpg" class="card-img-top" alt="Design 1">
                    <div class="card-body">
                        <h5 class="card-title">Design 10</h5>
                        <h6 class="card-subtitle mb-2 text-muted"></h6>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec justo et ex pulvinar vehicula.</p>
                        <a href="checkout.php?product=Design12&price=2500" class="btn btn-order btn-block">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <p>&copy; 2024 The Henna Oasis. All rights reserved. | <a style="color: #343a40;" href="privacy.php" class="text-white">Privacy Policy</a></p>
            </div>
        </footer>
</footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>