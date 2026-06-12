<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>

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
                        <a class="nav-link" href="{{ route('users.index') }}">
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
                        <a class="nav-link active fw-bold text-warning"
                            href="{{ route('customers.index') }}">
                            <i class="fa-solid fa-users me-1"></i> Customers
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>

    <!-- Content -->
    <div class="container py-5">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">

            <div>
                <h2 class="fw-bold mb-0">
                    <i class="fa-solid fa-users me-2"></i> Customer List
                </h2>
                <small class="text-muted">Manage all registered customers</small>
            </div>

            <span class="badge bg-primary px-3 py-2">
                Total: {{ count($customers) }}
            </span>

        </div>

        <!-- Table Card -->
        <div class="card border-0 shadow-lg rounded-3">

            <div class="card-body p-0">

                <div class="table-responsive">

                    <table class="table table-hover align-middle mb-0">

                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse ($customers as $index => $customer)
                                <tr>

                                    <td>
                                        <span class="badge bg-secondary">
                                            {{ $index + 1 }}
                                        </span>
                                    </td>

                                    <td class="fw-semibold">
                                        {{ $customer->name }}
                                    </td>

                                    <td>
                                        <span class="text-primary">
                                            {{ $customer->email }}
                                        </span>
                                    </td>

                                    <td>
                                        {{ $customer->phone }}
                                    </td>

                                    <td>
                                        @if($customer->gender == 'Male')
                                            <span class="badge bg-info text-dark">Male</span>
                                        @elseif($customer->gender == 'Female')
                                            <span class="badge bg-danger">Female</span>
                                        @else
                                            <span class="badge bg-secondary">Unknown</span>
                                        @endif
                                    </td>

                                </tr>

                            @empty
                                <tr>
                                    <td colspan="5" class="text-center py-4 text-muted">
                                        No customers found
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
