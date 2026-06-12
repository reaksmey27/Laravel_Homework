<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Management</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link active fw-bold text-warning" href="{{ route('categories.index') }}">
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

        <div class="card shadow border-0">

            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">

                <h3 class="mb-0">
                    <i class="fa-solid fa-layer-group me-2"></i>
                    Category Management
                </h3>

                <a href="{{ route('categories.create') }}" class="btn btn-light">
                    <i class="fa-solid fa-plus me-1"></i>
                    Create Category
                </a>

            </div>

            <div class="card-body">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">
                        <tr>
                            <th width="80">#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th width="180">Actions</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($categories as $index => $category)
                            <tr>

                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $index + 1 }}
                                    </span>
                                </td>

                                <td class="fw-bold">
                                    {{ $category->name }}
                                </td>

                                <td>
                                    {{ $category->description }}
                                </td>

                                <td>
                                    <div class="d-flex gap-2">

                                        <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                            data-bs-target="#showCategory{{ $category->id }}"
                                            onclick="event.preventDefault();">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>


                                        <a href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-sm btn-warning text-white">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>

                                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory{{ $category->id }}"
                                            onclick="event.preventDefault();">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>


                                    </div>

                                    @include('categories.show')
                                    @include('categories.delete')

                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
