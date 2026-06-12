<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-layer-group me-1"></i> My System
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">

                <ul class="navbar-nav ms-auto gap-2">

                    <li class="nav-item">
                        <a class="nav-link active fw-bold text-warning" href="{{ route('users.index') }}">
                            <i class="fa-solid fa-user me-1"></i> Users
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">
                            <i class="fa-solid fa-box me-1"></i> Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">
                            <i class="fa-solid fa-list me-1"></i> Categories
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('movies.index') }}">
                            <i class="fa-solid fa-film me-1"></i> Movies
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('customers.index') }}">
                            <i class="fa-solid fa-users me-1"></i> Customers
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <!-- Content -->
    <div class="container py-5">

        <div class="text-center mb-4">
            <h1 class="fw-bold">
                <i class="fa-solid fa-user me-2"></i> User Dashboard
            </h1>
            <p class="text-muted mb-0">
                Manage system users and monitor system activity in one place
            </p>
        </div>

        <!-- Cards -->
        <div class="row justify-content-center">

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-users fa-2x text-primary mb-2"></i>
                        <h5>Users</h5>
                        <p class="text-muted mb-0">Manage accounts</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-circle-check fa-2x text-success mb-2"></i>
                        <h5>Active</h5>
                        <p class="text-muted mb-0">System status</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 mb-3">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body">
                        <i class="fa-solid fa-user-shield fa-2x text-warning mb-2"></i>
                        <h5>Roles</h5>
                        <p class="text-muted mb-0">Permissions</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
