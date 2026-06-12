<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body class="bg-light">

    <!-- Simple Navbar -->
    <nav class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fa-solid fa-layer-group me-1"></i> My System
            </a>
        </div>
    </nav>

    <!-- Content -->
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-7 col-lg-5">

                <div class="card border-0 shadow-lg rounded-3">

                    <!-- Header -->
                    <div class="card-header bg-info text-white text-center">
                        <h4 class="mb-0">
                            <i class="fa-solid fa-plus me-2"></i>
                            Create Category
                        </h4>
                    </div>

                    <!-- Body -->
                    <div class="card-body p-4">

                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf

                            <!-- Name -->
                            <div class="mb-3">
                                <label for="name" class="form-label fw-bold">
                                    <i class="fa-solid fa-tag me-1"></i> Name
                                </label>

                                <input
                                    name="name"
                                    type="text"
                                    class="form-control form-control-lg"
                                    id="name"
                                    placeholder="Enter category name">
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="dec" class="form-label fw-bold">
                                    <i class="fa-solid fa-align-left me-1"></i> Description
                                </label>

                                <textarea
                                    name="dec"
                                    class="form-control"
                                    id="dec"
                                    style="height: 140px"
                                    placeholder="Enter description"></textarea>
                            </div>

                            <!-- Buttons -->
                            <div class="d-flex justify-content-between mt-4">

                                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary">
                                    <i class="fa-solid fa-arrow-left me-1"></i> Back
                                </a>

                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="fa-solid fa-check me-1"></i> Create
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
