<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                🧩 My System
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto gap-2">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}">
                            Users
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            Categories
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
